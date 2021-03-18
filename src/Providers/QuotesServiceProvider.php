<?php

namespace Addon\Quotes\Providers;

use Addon\Quotes\Console\QuoteCommand;
use Fusion\Providers\AddonServiceProvider;

class QuotesServiceProvider extends AddonServiceProvider
{
	/**
	 * FusionCMS CP navigation.
	 * 
	 * @var array
	 */
    protected $navigation = [
        'title' => 'Quotes',
        'to'    => '/quotes',
        'icon'  => 'comment-alt'
    ];

    /**
     * Artisan commands.
     * 
     * @var array
     */
    protected $commands = [
    	QuoteCommand::class
    ];
}
