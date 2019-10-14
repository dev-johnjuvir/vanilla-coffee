<?php

namespace App\Orchid\Layouts\Examples;

use Orchid\Screen\Layouts\Metric;

class MetricsExample extends Metric
{
    /**
     * @var string
     */
    protected $title = 'Life Treatment Campaign';

    /**
     * @var string
     */
    protected $target = 'metrics';

    /**
     * @var array
     */
    protected $labels = [
        'Calls Made Today',
        'Answering Machine',
        'Valid Transfers',
        'Invalid Transfers',
        'Total Calls',
    ];
}
