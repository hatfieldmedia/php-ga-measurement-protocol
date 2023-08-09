<?php

namespace TheIconic\Tracking\GoogleAnalytics\Parameters\Event;

use TheIconic\Tracking\GoogleAnalytics\Parameters\SingleParameter;

/**
 * Class EventName
 *
 * @link https://developers.google.com/analytics/devguides/collection/protocol/ga4/sending-events?client_type=gtag
 *
 * @package TheIconic\Tracking\GoogleAnalytics\Parameters\Event
 */
class EventName extends SingleParameter
{
  /**
   * @inheritDoc
   *
   * @var string
   */
  protected $name = 'en';
}
