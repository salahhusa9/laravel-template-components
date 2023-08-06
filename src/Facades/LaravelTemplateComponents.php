<?php

namespace Salahhusa9\LaravelTemplateComponents\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Salahhusa9\LaravelTemplateComponents\LaravelTemplateComponents
 */
class LaravelTemplateComponents extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Salahhusa9\LaravelTemplateComponents\LaravelTemplateComponents::class;
    }
}
