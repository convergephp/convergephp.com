<?php

namespace App\Providers\Converge;

use Fluxtor\Converge\Module;
use Fluxtor\Converge\Providers\ModuleProvider;

class DocsModuleProvider extends ModuleProvider
{
    /**
     * Register New Module Service Provider.
     */
    public function module(Module $module): Module
    {
        return $module
            ->id('converge-docs')
            ->default()
            ->routePath('docs')
            ->in('docs');
    }
}

