<?php

namespace App\Providers\Converge;

use Fluxtor\Converge\Module;
use Fluxtor\Converge\Theme\Theme;
use Fluxtor\Converge\Enums\Layout;
use Fluxtor\Converge\Support\Themes;
use Fluxtor\Converge\Enums\Spotlight;
use Fluxtor\Converge\Clusters\Cluster;
use Fluxtor\Converge\Clusters\Clusters;
use Fluxtor\Converge\Enums\IconPosition;
use Fluxtor\Converge\MenuItems\MenuItem;
use Fluxtor\Converge\MenuItems\MenuItems;
use Fluxtor\Converge\Clusters\ClusterLink;
use Fluxtor\Converge\Enums\HighlighterName;
use Fluxtor\Converge\Providers\ModuleProvider;
use Fluxtor\Converge\Support\SidebarItemsStyles;

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
            ->latestVersionLabel('v1.0.0-beta.1')
            ->defineClusters(fn(Clusters $clusters) => $this->defineClusters($clusters))
            ->theme(fn(Theme $theme) => $this->theme($theme))
            ->defineMenuItems(function (MenuItems $menuItems) {
                $menuItems->add(
                    fn(MenuItem $menuItem) =>
                    $menuItem->url('https://github.com/convergephp/converge')
                        ->openUrlInNewTab()
                        ->icon(fn() => svg('bi-github', 'w-5 h-5'))
                        ->iconPosition(IconPosition::After)
                        ->label('')
                );

                $menuItems->add(
                    fn(MenuItem $menuItem) =>
                    $menuItem->url('https://github.com/convergephp/converge?sponsor=1')
                        ->openUrlInNewTab()
                        ->classes('btn btn-sm btn-outline btn-primary')
                        ->label('Sponsor')
                );
            })
            ->brandLogo('Converge')
            ->in(realpath(base_path('docs/v1/framework')));
    }


    private function defineClusters(Clusters $clusters)
    {
        $clusters->add(
            fn(Cluster $cluster) => $cluster
                ->label('Documentation')
                ->icon(fn () => svg('iconsax-bul-book', 'w-5 h-5'))
        )->default();

        $clusters->add(
            fn(Cluster $cluster) => $cluster
                ->route('components')
                ->label('Components')
                ->in(realpath(base_path('docs/v1/components')))
                ->icon(fn () => svg('iconsax-bul-3dcube' , 'h-5 w-5'))
        );
    }

    private function theme(Theme $theme)
    {
        return $theme
            ->sidebarItemStyle(SidebarItemsStyles::GHOST)
            ->highlighterTheme(HighlighterName::Aurora_x)
            ->theme(Themes::overrideDark([
                '--color-base-200' => "black",
                '--text-base' => '.94rem',
                '--text-sm' => '.9rem',
            ]),
                Themes::overrideLight([
                '--color-base-200' => 'white',
                '--text-base' => '.94rem',
                '--text-sm' => '.9rem',
            ]))
            ->layout(Layout::Default)
            ->collapsedGroupes(false)
            ->font('inter')
            ->spotlight(Spotlight::Strock);
    }
}
