<?php

namespace App\Providers\Converge;

use Fluxtor\Converge\Clusters\Cluster;
use Fluxtor\Converge\Clusters\ClusterLink;
use Fluxtor\Converge\Clusters\Clusters;
use Fluxtor\Converge\Enums\HighlighterName;
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
            ->latestVersionLabel('v1.0.0-alpha.5')
            ->defineClusters(fn(Clusters $clusters) => $this->defineClusters($clusters))
            ->theme(fn(Theme $theme) => $this->theme($theme))
            ->in(base_path('docs'));
    }


    private function defineClusters(Clusters $clusters)
    {
        $clusters->add(
            fn(Cluster $cluster) => $cluster
                ->label('Documentation')
        )->default();

        $clusters->addLink(
            fn(ClusterLink $cluster) => $cluster
                ->label('Blog')
                ->sort(2)
                ->url('https://docs.cachethq.io/v3.x')
        );
    }

    private function theme(Theme $theme)
    {
        return $theme
            ->sidebarItemStyle(SidebarItemsStyles::STYLE4)
            ->highlighterTheme(HighlighterName::Vesper)
            ->layout(Layout::Default)
            ->collapsedGroupes(false)
            ->font('inter')
            ->spotlight(Spotlight::Strock);
    }
}
