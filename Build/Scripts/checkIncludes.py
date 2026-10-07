#!/usr/bin/env python3
"""Show which lines each literalinclude of the manual emphasizes.

`:emphasize-lines:` and `:visible-lines:` use line numbers. When a line
is added to an included file, these numbers point to other lines, and
the rendering does not warn about it. This script prints the content of
every emphasized line, so that a wrong number is visible at once.

Usage, from the root of the repository:

    Build/Scripts/checkIncludes.py              # all includes
    Build/Scripts/checkIncludes.py ext_localconf.php ConferenceList.xml

An argument limits the output to includes whose path contains it. The
script exits with 1 when a line number is beyond the end of the file or
an emphasized line is not visible.
"""

import pathlib
import re
import sys

DOCUMENTATION = pathlib.Path('Documentation')
INCLUDE = re.compile(r'^(\s*)\.\.\s+literalinclude::\s+(\S+)')
OPTION = re.compile(r'^\s+:([\w-]+):\s*(.*)$')


def line_numbers(spec):
    numbers = []
    for part in spec.split(','):
        part = part.strip()
        if '-' in part:
            first, last = part.split('-')
            numbers += range(int(first), int(last) + 1)
        elif part:
            numbers.append(int(part))
    return numbers


def resolve(page, target):
    if target.startswith('/'):
        return DOCUMENTATION / target.lstrip('/')
    return page.parent / target


def check(page, filters):
    errors = 0
    lines = page.read_text().split('\n')
    for index, line in enumerate(lines):
        match = INCLUDE.match(line)
        if not match:
            continue
        target = match.group(2)
        if filters and not any(f in target for f in filters):
            continue
        options = {}
        for option_line in lines[index + 1:]:
            option = OPTION.match(option_line)
            if not option:
                break
            options[option.group(1)] = option.group(2)
        if 'emphasize-lines' not in options and 'visible-lines' not in options:
            continue
        location = f'{page}:{index + 1}'
        source = resolve(page, target)
        if not source.is_file():
            print(f'{location}: {target} does not exist')
            errors += 1
            continue
        content = source.read_text().split('\n')
        if content and content[-1] == '':
            content.pop()
        # With :lines:, Sphinx counts :emphasize-lines: from the first shown line
        offset = 0
        if 'lines' in options:
            offset = line_numbers(options['lines'].split(',')[0].split('-')[0])[0] - 1
        visible = line_numbers(options.get('visible-lines', ''))
        emphasized = [n + offset for n in line_numbers(options.get('emphasize-lines', ''))]
        print(f'{location}: {target}')
        for number in sorted(set(visible + emphasized)):
            if number > len(content):
                print(f'    {number}: beyond the end of the file ({len(content)} lines)')
                errors += 1
        if visible:
            print(f'    visible {options["visible-lines"]}')
        for number in emphasized:
            if number > len(content):
                continue
            mark = '' if not visible or number in visible else '  <- not visible'
            if mark:
                errors += 1
            print(f'    {number:4}: {content[number - 1].strip()[:70]}{mark}')
    return errors


def main():
    filters = sys.argv[1:]
    errors = 0
    for page in sorted(DOCUMENTATION.rglob('*.rst*')):
        if 'GENERATED' in str(page):
            continue
        errors += check(page, filters)
    if errors:
        print(f'{errors} problem(s) found')
    return 1 if errors else 0


if __name__ == '__main__':
    sys.exit(main())
