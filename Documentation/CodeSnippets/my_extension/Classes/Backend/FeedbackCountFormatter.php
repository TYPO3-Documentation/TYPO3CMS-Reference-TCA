<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Backend;

use TYPO3\CMS\Core\Localization\LanguageService;

final class FeedbackCountFormatter
{
  /**
   * Shows the number of feedback forms as text, for example "12 attendees"
   */
  public function format(array $parameters): string
  {
    $count = (int)($parameters['value'] ?? 0);
    $label = $count === 1 ? 'talk.feedback_count.one' : 'talk.feedback_count.other';
    return sprintf($this->getLanguageService()->sL('my_extension.db:' . $label), $count);
  }

  private function getLanguageService(): LanguageService
  {
    return $GLOBALS['LANG'];
  }
}
