<?php

namespace FriendsOfBotble\ProductSizeGuide\Providers;

use Botble\Base\Facades\DashboardMenu;
use Botble\Base\Supports\ServiceProvider;
use Botble\Base\Traits\LoadAndPublishDataTrait;
use Botble\LanguageAdvanced\Supports\LanguageAdvancedManager;
use Botble\Theme\Supports\ThemeSupport;
use FriendsOfBotble\ProductSizeGuide\Models\SizeGuideHeader;
use FriendsOfBotble\ProductSizeGuide\Services\SizeGuideService;

class ProductSizeGuideServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register(): void
    {
        $this->app->bind(SizeGuideService::class, function () {
            return new SizeGuideService();
        });
    }

    public function boot(): void
    {
        $this
            ->setNamespace('plugins/fob-product-size-guide')
            ->loadHelpers()
            ->loadAndPublishConfigurations(['permissions'])
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadMigrations()
            ->loadRoutes();

        $this->app->register(HookServiceProvider::class);

        DashboardMenu::beforeRetrieving(function (): void {
            DashboardMenu::make()
                ->registerItem([
                    'id' => 'cms-plugins-product-size-guide',
                    'priority' => 550,
                    'parent_id' => null,
                    'name' => trans('plugins/fob-product-size-guide::size-guide.name'),
                    'icon' => 'ti ti-ruler-measure',
                    'url' => route('product-size-guide.index'),
                    'permissions' => ['product-size-guide.index'],
                ])
                ->registerItem([
                    'id' => 'cms-plugins-product-size-guide-list',
                    'priority' => 1,
                    'parent_id' => 'cms-plugins-product-size-guide',
                    'name' => trans('plugins/fob-product-size-guide::size-guide.size_guides'),
                    'icon' => 'ti ti-list',
                    'url' => route('product-size-guide.index'),
                    'permissions' => ['product-size-guide.index'],
                ])
                ->registerItem([
                    'id' => 'cms-plugins-product-size-guide-headers',
                    'priority' => 2,
                    'parent_id' => 'cms-plugins-product-size-guide',
                    'name' => trans('plugins/fob-product-size-guide::size-guide.headers.name'),
                    'icon' => 'ti ti-layout-columns',
                    'url' => route('size-guide-headers.index'),
                    'permissions' => ['size-guide-headers.index'],
                ])
                ->registerItem([
                    'id' => 'cms-plugins-product-size-guide-settings',
                    'priority' => 3,
                    'parent_id' => 'cms-plugins-product-size-guide',
                    'name' => trans('plugins/fob-product-size-guide::size-guide.settings_menu'),
                    'icon' => 'ti ti-settings',
                    'url' => route('settings.product-size-guide'),
                    'permissions' => ['product-size-guide.settings'],
                ]);
        });

        $this->app->booted(function (): void {
            $this->app->make(ThemeSupport::class)
                ->registerToastNotification();

            if (defined('LANGUAGE_ADVANCED_MODULE_SCREEN_NAME')) {
                LanguageAdvancedManager::registerModule(SizeGuideHeader::class, [
                    'name',
                ]);
            }
        });
    }
}
