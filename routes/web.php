<?php

use Botble\Base\Facades\AdminHelper;
use FriendsOfBotble\ProductSizeGuide\Http\Controllers\Settings\ProductSizeGuideSettingController;
use FriendsOfBotble\ProductSizeGuide\Http\Controllers\SizeGuideController;
use FriendsOfBotble\ProductSizeGuide\Http\Controllers\SizeGuideHeaderController;
use Illuminate\Support\Facades\Route;

AdminHelper::registerRoutes(function (): void {
    Route::group(['prefix' => 'product-size-guides', 'as' => 'product-size-guide.'], function (): void {
        Route::resource('', SizeGuideController::class)
            ->parameters(['' => 'sizeGuide'])
            ->except(['show']);
    });

    Route::group(['prefix' => 'size-guide-headers', 'as' => 'size-guide-headers.'], function (): void {
        Route::resource('', SizeGuideHeaderController::class)
            ->parameters(['' => 'size-guide-header'])
            ->except(['show']);
    });

    Route::group(['prefix' => 'settings', 'as' => 'settings.', 'permission' => 'product-size-guide.settings'], function (): void {
        Route::get('product-size-guide', [ProductSizeGuideSettingController::class, 'edit'])->name('product-size-guide');
        Route::put('product-size-guide', [ProductSizeGuideSettingController::class, 'update']);
    });
});
