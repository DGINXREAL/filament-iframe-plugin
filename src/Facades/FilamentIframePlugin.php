<?php

namespace DGINXREAL\FilamentIframePlugin\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DGINXREAL\FilamentIframePlugin\FilamentIframePlugin
 */
class FilamentIframePlugin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \DGINXREAL\FilamentIframePlugin\FilamentIframePlugin::class;
    }
}
