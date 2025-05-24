<?php

namespace App\Providers\Converge;

use Converge\Enums\Interceptor;
use Converge\Enums\Layout;
use Converge\Enums\Spotlight;
use Converge\MenuItems\MenuItem;
use Converge\MenuItems\MenuItems;
use Converge\Module;
use Converge\Providers\ModuleProvider;
use Converge\Support\SidebarItemsStyles;
use Converge\Support\Themes;
use Converge\Theme\Theme;

class GSMDocsModuleProvider extends ModuleProvider
{
    /**
     * Register New Module Service Provider.
     */
    public function module(Module $module): Module
    {
        return $module
            ->default()
            ->id('gsmdocs')
            ->routePath('plugins/gsm/docs')
            ->in(realpath(base_path('plugins/gsm-docs')))
            ->brandLogo("Global Search Modal")
            ->theme(function (Theme $theme) {
                return $theme
                    ->sidebarItemStyle(SidebarItemsStyles::ECHO)
                    ->layout(Layout::Aurum)
                    ->theme(
                        Themes::overrideDark([
                            '--color-base-200' => "black",
                            '--color-primary' => 'oklch(79.5% 0.184 86.047)'
                        ]),
                        Themes::overrideLight([
                            '--color-base-200' => 'white',
                            '--color-primary' => 'oklch(79.5% 0.184 86.047)'
                        ])
                    )
                    ->spotlight(Spotlight::Hive);
            })
            ->defineMenuItems(function (MenuItems $menuItems) {
                $menuItems->add(
                    fn(MenuItem $menuItem) =>
                    $menuItem->url('https://github.com/CharrafiMed/gsm-docs')
                        ->openUrlInNewTab()
                        ->label('Github')
                );

                $menuItems->add(
                    fn(MenuItem $menuItem) =>
                    $menuItem->url('https://github.com/sponsors/charrafimed')
                        ->label('Sponsor')
                );
            });;
    }
}
