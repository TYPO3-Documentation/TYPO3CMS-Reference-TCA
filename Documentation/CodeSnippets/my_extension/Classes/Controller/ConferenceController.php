<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

final class ConferenceController extends ActionController
{
  public function listAction(): ResponseInterface
  {
    return $this->htmlResponse('<p>List of conferences</p>');
  }

  public function showAction(): ResponseInterface
  {
    return $this->htmlResponse('<p>Details of a conference</p>');
  }
}
