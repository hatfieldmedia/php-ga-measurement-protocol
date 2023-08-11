<?php

namespace TheIconic\Tracking\GoogleAnalytics\Parameters\Event;

use TheIconic\Tracking\GoogleAnalytics\Parameters\CompoundParameter;

/**
 * Class EventName
 *
 * @package TheIconic\Tracking\GoogleAnalytics\Parameters\Event
 */
class EventParams extends CompoundParameter
{
  protected $parameterNameMapper = [
    '/^search_term/' => 'search_term',
    '/^user_id/' => 'user_id',
  ];

  /**
   * @inheritDoc
   *
   * @var array
   */
  protected $requiredParameters = [];
}
