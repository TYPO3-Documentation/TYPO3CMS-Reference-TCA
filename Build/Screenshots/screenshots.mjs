// Takes the screenshots of the TCA Reference from a running TYPO3 backend
// with the example extension and the records of create-records.php.
//
// Usage: node screenshots.mjs [name ...]
// Without names, all screenshots are taken.

import { readFileSync } from 'node:fs';
import { chromium } from 'playwright';

const baseUrl = process.env.TYPO3_BASE_URL ?? 'http://localhost:8080';
const target = process.env.SCREENSHOT_TARGET ?? '../../Documentation/Images/Conference';
const username = process.env.TYPO3_USERNAME ?? 'admin';
const password = process.env.TYPO3_PASSWORD ?? 'Screenshots-2026!';

const editUrl = (table, uid) => `${baseUrl}/typo3/record/edit?edit[${table}][${uid}]=edit`;
// Space around an element, so its border does not touch the edge
const margin = 12;
// The innermost form group with the field name, which debug mode shows
const field = (name) => `.form-group:has(code:text-is("[${name}]"))`;

// Opens the value picker of a field, which shows its choices in a list
const openValuePicker = async (frame, name) => {
  const input = frame.locator(`${field(name)} typo3-backend-combobox input`).last();
  // Near the bottom of the window, the list would open upwards
  await input.evaluate((element) => element.scrollIntoView({ block: 'center' }));
  await input.focus();
  await frame.page().keyboard.press('ArrowDown');
};
const valuePickerList = (name) => `${field(name)} typo3-backend-combobox [role="listbox"]`;

// The uids of the records that create-records.php created
const {
  storageFolder, contentElement, conference, conferenceTranslation, talk, workshop,
  speaker, speakerTranslation, location, hall, backendLayout,
} =
  JSON.parse(readFileSync('../../var/screenshot-records.json', 'utf8'));

const screenshots = {
  CtrlRecordList: {
    // Wide enough for all columns next to the page tree
    width: 1600,
    url: `${baseUrl}/typo3/module/content/records?id=${storageFolder}&table=tx_myextension_conference`,
    prepare: async (frame) => {
      await frame.getByRole('button', { name: 'English' }).click();
      await frame.getByText('Deutsch', { exact: true }).click();
      await frame.waitForLoadState('networkidle');
    },
    element: '.recordlist',
  },
  CtrlTypeContentElement: {
    url: editUrl('tt_content', contentElement),
    element: field('CType'),
  },
  CtrlTypeWorkshop: {
    url: editUrl('tx_myextension_talk', workshop),
    from: 'h1',
    to: field('talk_type'),
  },
  CtrlTypeChangeModal: {
    url: editUrl('tx_myextension_talk', talk),
    prepare: async (frame) => {
      await frame.selectOption(`select[name="data[tx_myextension_talk][${talk}][talk_type]"]`, 'workshop');
    },
    modal: true,
  },
  CtrlEnableColumns: {
    url: editUrl('tx_myextension_conference', conference),
    tab: 'Access',
    from: field('hidden'),
    to: field('endtime'),
  },
  CtrlDescriptionColumn: {
    url: editUrl('tx_myextension_conference', conference),
    from: 'h1',
    to: '.nav-tabs',
  },
  CtrlLanguageField: {
    url: editUrl('tx_myextension_conference', conference),
    tab: 'Language',
    element: field('sys_language_uid'),
  },
  CtrlTransOrigPointerField: {
    url: editUrl('tx_myextension_conference', conferenceTranslation),
    element: field('title'),
  },
  CtrlSeliconField: {
    url: editUrl('tx_myextension_conference', conference),
    element: field('location'),
  },
  ColumnsBasicField: {
    url: editUrl('tx_myextension_conference', conference),
    element: field('title'),
  },
  ColumnsOnChange: {
    url: editUrl('tx_myextension_conference', conference),
    element: field('event_format'),
  },
  ColumnsOnChangeModal: {
    url: editUrl('tx_myextension_conference', conference),
    prepare: async (frame) => {
      await frame.selectOption(`select[name="data[tx_myextension_conference][${conference}][event_format]"]`, 'online');
    },
    modal: true,
  },
  ColumnsInlineComments: {
    url: editUrl('tx_myextension_talk', talk),
    element: field('comments'),
  },
  ColumnsPrefixLangTitle: {
    url: editUrl('tx_myextension_conference', conferenceTranslation),
    tab: 'Details',
    element: field('description'),
  },
  ColumnsDefaultAsReadonly: {
    url: editUrl('tx_myextension_conference', conferenceTranslation),
    element: field('event_format'),
  },
  ColumnsTranslatedSelect: {
    url: editUrl('tx_myextension_speaker', speakerTranslation),
    element: field('salutation'),
  },
  InputPlaceholder: {
    url: editUrl('tx_myextension_conference', conference),
    element: field('short_title'),
  },
  InputValuePicker: {
    url: editUrl('tx_myextension_talk', talk),
    prepare: (frame) => openValuePicker(frame, 'room'),
    from: field('room'),
    to: valuePickerList('room'),
  },
  TextAbstract: {
    url: editUrl('tx_myextension_talk', talk),
    element: field('abstract'),
  },
  TextRichtext: {
    url: editUrl('tx_myextension_conference', conference),
    tab: 'Details',
    element: field('description'),
  },
  TextCodeEditor: {
    url: editUrl('tx_myextension_conference', conference),
    tab: 'Details',
    element: field('embed_code'),
  },
  TextTable: {
    url: editUrl('tx_myextension_conference', conference),
    tab: 'Details',
    element: field('prices'),
  },
  TextFixedFont: {
    url: editUrl('tx_myextension_talk', workshop),
    element: field('requirements'),
  },
  TextMax: {
    url: editUrl('tx_myextension_speaker', speaker),
    element: field('short_bio'),
  },
  TextRichtextMinimal: {
    url: editUrl('tx_myextension_speaker', speaker),
    element: field('bio'),
  },
  TextBackendLayoutWizard: {
    url: editUrl('backend_layout', backendLayout),
    element: field('config'),
  },
  NumberValuePicker: {
    url: editUrl('tx_myextension_location', location),
    prepare: (frame) => openValuePicker(frame, 'capacity'),
    from: field('capacity'),
    to: valuePickerList('capacity'),
  },
  DatetimeDate: {
    url: editUrl('tx_myextension_conference', conference),
    element: field('conference_date'),
  },
  DatetimeTime: {
    url: editUrl('tx_myextension_conference', conference),
    element: field('doors_open'),
  },
  ColorField: {
    url: editUrl('tx_myextension_conference', conference),
    tab: 'Details',
    element: field('color'),
  },
  ColorOpacity: {
    url: editUrl('tx_myextension_conference', conference),
    tab: 'Details',
    element: field('overlay_color'),
  },
  EmailContact: {
    url: editUrl('tx_myextension_conference', conference),
    tab: 'Details',
    element: field('contact_email'),
  },
  LinkTickets: {
    url: editUrl('tx_myextension_conference', conference),
    element: field('ticket_link'),
  },
  LinkValuePicker: {
    url: editUrl('tx_myextension_speaker', speaker),
    element: field('website'),
  },
  PasswordGenerator: {
    url: editUrl('tx_myextension_conference', conference),
    element: field('livestream_password'),
  },
  PasswordSecretToken: {
    url: editUrl('tx_myextension_conference', conference),
    tab: 'Details',
    element: field('ticketing_secret'),
  },
  CheckSingle: {
    url: editUrl('tx_myextension_talk', talk),
    element: field('recording_allowed'),
  },
  CheckColumns: {
    url: editUrl('tx_myextension_conference', conference),
    tab: 'Details',
    element: field('amenities'),
  },
  CheckInline: {
    url: editUrl('tx_myextension_location', location),
    element: field('open_days'),
  },
  CheckMaximumRecordsChecked: {
    url: editUrl('tx_myextension_location', location),
    element: field('main_venue'),
  },
  CheckToggle: {
    url: editUrl('tx_myextension_conference', conference),
    element: field('published'),
  },
  CheckLabeledToggle: {
    url: editUrl('tx_myextension_conference', conference),
    element: field('registration_open'),
  },
  CheckItemsProcessors: {
    url: editUrl('tx_myextension_talk', workshop),
    element: field('days'),
  },
  RadioLevel: {
    url: editUrl('tx_myextension_talk', talk),
    element: field('level'),
  },
  RadioItemsProcessors: {
    url: editUrl('tx_myextension_talk', talk),
    element: field('spoken_language'),
  },
  SelectSingleTimezone: {
    url: editUrl('tx_myextension_conference', conference),
    element: field('timezone'),
  },
  SelectSingleSalutation: {
    url: editUrl('tx_myextension_speaker', speaker),
    element: field('salutation'),
  },
  SelectSingleFileFolder: {
    url: editUrl('tx_myextension_location', location),
    element: field('marker'),
  },
  SelectSingleBox: {
    url: editUrl('tx_myextension_talk', talk),
    element: field('audience'),
  },
  SelectCheckBox: {
    url: editUrl('tx_myextension_speaker', speaker),
    element: field('topics'),
  },
  SelectMultipleSideBySide: {
    url: editUrl('tx_myextension_talk', talk),
    element: field('equipment'),
  },
  SelectMultipleSideBySideFieldControl: {
    url: editUrl('tx_myextension_conference', conference),
    tab: 'Program',
    element: field('speakers'),
  },
  SelectTree: {
    url: editUrl('tx_myextension_location', hall),
    element: field('parent'),
  },
};

// Tall, so that most forms fit without scrolling
const viewportHeight = 2000;

const browser = await chromium.launch();
const page = await browser.newPage({ viewport: { width: 1280, height: viewportHeight } });
await page.goto(`${baseUrl}/typo3/`);
await page.fill('#t3-username', username);
await page.fill('#t3-password', password);
await page.click('#t3-login-submit');
await page.waitForURL(/\/typo3\/(main|module)/);

const names = process.argv.length > 2 ? process.argv.slice(2) : Object.keys(screenshots);
for (const name of names) {
  const screenshot = screenshots[name];
  if (screenshot === undefined) {
    throw new Error(`Unknown screenshot "${name}"`);
  }
  // A modal is centered in the window, which would be far down in a tall one
  await page.setViewportSize({ width: screenshot.width ?? 1280, height: screenshot.modal ? 1000 : viewportHeight });
  await page.goto(screenshot.url);
  await page.waitForLoadState('networkidle');
  const frame = page.frame({ name: 'list_frame' });
  await frame.waitForLoadState('networkidle');
  // The backend remembers the last tab of a form, so every form opens a
  // tab of its own: General, unless the screenshot names another one
  const tab = frame.getByRole('tab', { name: screenshot.tab ?? 'General', exact: true });
  if (await tab.count() > 0) {
    await tab.click();
  }
  if (screenshot.prepare) {
    await screenshot.prepare(frame);
    await page.waitForTimeout(500);
  }
  // A hovered tab or button would look selected
  await page.mouse.move(0, 0);
  await page.waitForTimeout(300);
  const path = `${target}/${name}.png`;
  if (screenshot.modal) {
    await page.locator('typo3-backend-modal dialog[open]').waitFor();
    await page.waitForTimeout(500);
    await page.screenshot({ path, clip: await page.locator('iframe[name="list_frame"]').boundingBox() });
  } else {
    // Only the visible part of the page can be cut out. The window is tall
    // enough for most forms; an area further down is scrolled into view.
    const end = await frame.locator(screenshot.to ?? screenshot.element).last().boundingBox();
    if (end.y + end.height + margin > viewportHeight) {
      await frame.locator(screenshot.to ?? screenshot.element).last()
        .evaluate((element) => element.scrollIntoView({ block: 'center' }));
      await page.waitForTimeout(300);
    }
    // Bounding boxes are relative to the page, also for elements in the frame
    const from = await frame.locator(screenshot.from ?? screenshot.element).last().boundingBox();
    const to = await frame.locator(screenshot.to ?? screenshot.element).last().boundingBox();
    const left = Math.max(Math.min(from.x, to.x) - margin, 0);
    const top = Math.max(from.y - margin, 0);
    await page.screenshot({
      path,
      clip: {
        x: left,
        y: top,
        width: Math.max(from.x + from.width, to.x + to.width) + margin - left,
        height: to.y + to.height + margin - top,
      },
    });
  }
  console.log(`${name}.png`);
}
await browser.close();
