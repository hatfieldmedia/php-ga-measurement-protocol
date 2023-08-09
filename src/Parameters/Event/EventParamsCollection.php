<?php

namespace TheIconic\Tracking\GoogleAnalytics\Parameters\Event;

use TheIconic\Tracking\GoogleAnalytics\Parameters\CompoundParameterCollection;

/**
 * Class EventParamsCollection
 *
 * Represents a collection of Event paramaters. Event data sent on the payload have an "ep" prefix.
 *
 * @package TheIconic\Tracking\GoogleAnalytics\Parameters\Event
 */
class EventParamsCollection extends CompoundParameterCollection
{
  /**
   * @inheritDoc
   *
   * @var string
   */
  protected $name = 'ep';
}
