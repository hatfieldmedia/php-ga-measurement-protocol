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
    '/^grade/' => 'grade',
    '/^location_id/' => 'location_id',
    '/^name/' => 'name',
    '/^search_term/' => 'search_term',
    '/^trophy_id/' => 'trophy_id',
    '/^user_id/' => 'user_id',
  ];

  /**
   * @inheritDoc
   *
   * @var array
   */
  protected $requiredParameters = [];
}
