<?php

namespace AwesomeJapanese;
use AwesomeJapanese\AwesomeJapanese;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(AwesomeJapanese::class, function () {
            return new AwesomeJapanese();
        });

        $this->app->alias(AwesomeJapanese::class, 'AwesomeJapanese');
    }
}