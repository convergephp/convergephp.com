<?php

namespace App\Providers\Converge;

use Converge\Enums\Interceptor;
use Converge\Module;
use Converge\Theme\Theme;
use Converge\Enums\Layout;
use Converge\Support\Themes;
use Converge\Enums\Spotlight;
use Converge\Clusters\Cluster;
use Converge\Clusters\ClusterLink;
use Converge\Clusters\Clusters;
use Converge\Enums\IconPosition;
use Converge\MenuItems\MenuItem;
use Converge\MenuItems\MenuItems;
use Converge\Enums\HighlighterName;
use Converge\Providers\ModuleProvider;
use Converge\Support\SidebarItemsStyles;

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
            ->latestVersionLabel('v1.0.0-beta.8')
            ->brandLogo('Converge')
            ->defineClusters(fn(Clusters $clusters) => $this->defineClusters($clusters))
            ->defineMenuItems(fn(MenuItems $menuItems) => $this->defineMenuItems($menuItems))
            ->theme(fn(Theme $theme) => $this->theme($theme))
            ->in(realpath(base_path('docs/v1/framework')));
    }


    private function defineClusters(Clusters $clusters)
    {
        $clusters->add(
            fn(Cluster $cluster) => $cluster
                ->label('Documentation')
                ->icon(fn() => svg('iconsax-bul-book', 'w-5 h-5'))
        )->default();

        $clusters->add(
            fn(Cluster $cluster) => $cluster
                ->route('components')
                ->label('Components')
                ->in(realpath(base_path('docs/v1/components')))
                ->icon(fn() => svg('iconsax-bul-3dcube', 'h-5 w-5'))
        );
    }
    private function defineMenuItems(MenuItems $menuItems)
    {
        $menuItems->add(
            fn(MenuItem $menuItem) =>
            $menuItem->url('https://github.com/convergephp/converge')
                ->openUrlInNewTab()
                ->icon(fn() => svg('bi-github', 'w-5 h-5'))
                ->iconPosition(IconPosition::After)
                ->label('')
        );

        // $menuItems->add(
        //     fn(MenuItem $menuItem) =>
        //     $menuItem->url('https://github.com/convergephp/converge?sponsor=1')
        //         ->openUrlInNewTab()
        //         ->classes('btn btn-sm btn-outline btn-primary')
        //         ->label('Sponsor')
        // );
    }

    private function theme(Theme $theme)
    {
        return $theme
            ->sidebarItemStyle(SidebarItemsStyles::GHOST)
            ->highlighterTheme(HighlighterName::Github_dark_default)
            ->favicon(asset('images/favicon.png'))
            ->theme(
                Themes::overrideDark([
                    '--color-base-200' => "black",
                    '--text-base' => '.94rem',
                    '--text-sm' => '.9rem',
                ]),
                Themes::overrideLight([
                    '--color-base-200' => 'white',
                    '--text-base' => '.94rem',
                    '--text-sm' => '.9rem',
                ])
            )
            ->layout(Layout::Default)
            ->collapsedGroupes(false)
            ->font('inter')
            ->spotlight(Spotlight::Strock);
    }
}
