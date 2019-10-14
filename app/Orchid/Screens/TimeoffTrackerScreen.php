<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;

class TimeoffTrackerScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Time offs';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Tracker';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [];
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): array
    {
        return [];
    }

    /**
     * Views.
     *
     * @return Layout[]
     */
    public function layout(): array
    {
        return [];
    }
}
