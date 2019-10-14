<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Metric;

class BossOptimaCampaignMetrics extends Metric
{
    /**
     * @var string
     */
    protected $title = 'Boss Optima';

    /**
     * @var array
     */
    protected $labels = [
    'Agents Scouted',
    'Jobs Covered',
    'Billing',
    'Sales',
    'Total Sales Today',
];

    /**
     * @var string
     */
    protected $target = 'optimacampaign';
}
