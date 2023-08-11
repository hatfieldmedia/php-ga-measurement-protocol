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
    '/^classroom_id/' => 'classroom_id',
    '/^date_of_birth/' => 'date_of_birth',
    '/^first_name/' => 'first_name',
    '/^gender/' => 'gender',
    '/^grade/' => 'grade',
    '/^location_id/' => 'location_id',
    '/^middle_name/' => 'middle_name',
    '/^last_name/' => 'last_name',
    '/^name/' => 'name',
    '/^race/' => 'race',
    '/^search_term/' => 'search_term',
    '/^student_id/' => 'student_id',
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
