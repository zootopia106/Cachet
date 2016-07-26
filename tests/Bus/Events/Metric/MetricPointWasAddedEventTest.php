<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Events\Metric;

use CachetHQ\Cachet\Bus\Events\Metric\MetricPointWasAddedEvent;
use CachetHQ\Cachet\Models\Metric;

/**
 * This is the metric point was added event test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class MetricPointWasAddedEventTest extends AbstractMetricEventTestCase
{
    protected function objectHasHandlers()
    {
        return false;
    }

    protected function getObjectAndParams()
    {
        $params = ['metric' => new Metric()];
        $object = new MetricPointWasAddedEvent($params['metric']);

        return compact('params', 'object');
    }
}
