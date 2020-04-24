<?php

namespace Modules\Quotes\Jobs;

use Menu;
use Illuminate\Foundation\Bus\Dispatchable;

class LoadNavigation
{
    use Dispatchable;

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if ($menu = Menu::get('admin')) {
            $menu->add('Quotes')->data([
                'to'    => '/quotes',
                'icon'  => 'comment-alt'
            ]);

            $menu->quotes->add('Dashboard')->data([
                'to' => '/quotes',
            ]);
        }
    }
}
