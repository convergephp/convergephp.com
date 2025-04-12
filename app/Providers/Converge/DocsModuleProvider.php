<?php

namespace App\Providers\Converge;

use Fluxtor\Converge\Enums\Layout;
use Fluxtor\Converge\Enums\Spotlight;
use Fluxtor\Converge\Module;
use Fluxtor\Converge\Providers\ModuleProvider;
use Fluxtor\Converge\Support\SidebarItemsStyles;
use Fluxtor\Converge\Theme\Theme;

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
            ->theme(fn(Theme $theme) => $this->theme($theme))
            ->in(base_path('docs'));
    }

    private function theme(Theme $theme)
    {
        return $theme
            ->sidebarItemStyle(SidebarItemsStyles::STYLE4)
            // ->highlighterTheme(HighlighterName::Vesper)
            ->layout(Layout::Default)
            ->collapsedGroupes(false)
            ->font('inter')
            ->spotlight(Spotlight::Strock);
    }
}

