<?php

namespace Addon\Quotes\Providers;

use Fusion\Fusion;
use Addon\Quotes\Console\QuoteCommand;
use Addon\Quotes\Fieldtypes\QuoteFieldtype;
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
        'icon'  => 'quote-right'
    ];

    /**
     * Artisan commands.
     * 
     * @var array
     */
    protected $commands = [
    	QuoteCommand::class
    ];

    /**
     * Fieldtypes.
     *
     * @var array
     */
    protected $fieldtypes = [
        QuoteFieldtype::class
    ];

    /**
     * Front-end assets.
     * 
     * @var array
     */
    protected $assets = [
        '/vendor/quotes/js/quotes.js',
        '/vendor/quotes/css/quotes.css'
    ];
}
