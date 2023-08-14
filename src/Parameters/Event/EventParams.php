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
    '/^answer/' => 'answer',
    '/^article_id/' => 'article_id',
    '/^classroom_id/' => 'classroom_id',
    '/^date_of_birth/' => 'date_of_birth',
    '/^evaluation_id/' => 'evaluation_id',
    '/^first_name/' => 'first_name',
    '/^gender/' => 'gender',
    '/^grade/' => 'grade',
    '/^lesson_id/' => 'lesson_id',
    '/^location_id/' => 'location_id',
    '/^middle_name/' => 'middle_name',
    '/^last_name/' => 'last_name',
    '/^name/' => 'name',
    '/^race/' => 'race',
    '/^search_term/' => 'search_term',
    '/^score/' => 'score',
    '/^student_id/' => 'student_id',
    '/^trophy_id/' => 'trophy_id',
    '/^unit_id/' => 'unit_id',
    '/^user_id/' => 'user_id',
    '/^video_id/' => 'video_id',
    '/^question_id/' => 'question_id',
  ];

  /**
   * @inheritDoc
   *
   * @var array
   */
  protected $requiredParameters = [];
}
