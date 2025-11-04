<?php

namespace FriendsOfBotble\ProductSizeGuide\Providers;

use Botble\Base\Facades\MetaBox;
use Botble\Base\Supports\ServiceProvider;
use Botble\Ecommerce\Models\Brand;
use Botble\Ecommerce\Models\Product;
use Botble\Ecommerce\Models\ProductCategory;
use FriendsOfBotble\ProductSizeGuide\Services\SizeGuideService;

class HookServiceProvider extends ServiceProvider
{
    protected static ?Product $currentProduct = null;

    public function boot(): void
    {

        add_action(BASE_ACTION_META_BOXES, function ($context, $object): void {
            if (get_class($object) === Product::class && $context === 'advanced') {
                $sizeGuideService = app(SizeGuideService::class);

                MetaBox::addMetaBox(
                    'product_size_guide_metabox',
                    trans('plugins/fob-product-size-guide::size-guide.metabox.title'),
                    function () use ($object, $sizeGuideService) {
                        return view('plugins/fob-product-size-guide::metaboxes.size-guide-metabox', [
                            'sizeGuides' => $sizeGuideService->getAllSizeGuides(),
                            'selectedSizeGuideId' => $sizeGuideService->getAssignedSizeGuideId($object->getKey(), 'product'),
                            'helpText' => trans('plugins/fob-product-size-guide::size-guide.metabox.help_text', ['type' => 'product']),
                        ]);
                    },
                    get_class($object),
                    $context
                );
            }
        }, 30, 2);

        add_action(BASE_ACTION_AFTER_CREATE_CONTENT, function ($type, $request, $object): void {
            if (get_class($object) === Product::class && $request->has('size_guide_id')) {
                $sizeGuideService = app(SizeGuideService::class);
                $sizeGuideId = $request->input('size_guide_id') ?: null;
                $sizeGuideService->assignSizeGuide($sizeGuideId, $object->getKey(), 'product');
            }
        }, 30, 3);

        add_action(BASE_ACTION_AFTER_UPDATE_CONTENT, function ($type, $request, $object): void {
            if (get_class($object) === Product::class && $request->has('size_guide_id')) {
                $sizeGuideService = app(SizeGuideService::class);
                $sizeGuideId = $request->input('size_guide_id') ?: null;
                $sizeGuideService->assignSizeGuide($sizeGuideId, $object->getKey(), 'product');
            }
        }, 30, 3);

        add_action(BASE_ACTION_META_BOXES, function ($context, $object): void {
            if (get_class($object) === ProductCategory::class && $context === 'advanced') {
                $sizeGuideService = app(SizeGuideService::class);

                MetaBox::addMetaBox(
                    'category_size_guide_metabox',
                    trans('plugins/fob-product-size-guide::size-guide.metabox.title'),
                    function () use ($object, $sizeGuideService) {
                        return view('plugins/fob-product-size-guide::metaboxes.size-guide-metabox', [
                            'sizeGuides' => $sizeGuideService->getAllSizeGuides(),
                            'selectedSizeGuideId' => $sizeGuideService->getAssignedSizeGuideId($object->getKey(), 'category'),
                            'helpText' => trans('plugins/fob-product-size-guide::size-guide.metabox.help_text_category'),
                        ]);
                    },
                    get_class($object),
                    $context
                );
            }
        }, 30, 2);

        add_action(BASE_ACTION_AFTER_CREATE_CONTENT, function ($type, $request, $object): void {
            if (get_class($object) === ProductCategory::class && $request->has('size_guide_id')) {
                $sizeGuideService = app(SizeGuideService::class);
                $sizeGuideId = $request->input('size_guide_id') ?: null;
                $sizeGuideService->assignSizeGuide($sizeGuideId, $object->getKey(), 'category');
            }
        }, 30, 3);

        add_action(BASE_ACTION_AFTER_UPDATE_CONTENT, function ($type, $request, $object): void {
            if (get_class($object) === ProductCategory::class && $request->has('size_guide_id')) {
                $sizeGuideService = app(SizeGuideService::class);
                $sizeGuideId = $request->input('size_guide_id') ?: null;
                $sizeGuideService->assignSizeGuide($sizeGuideId, $object->getKey(), 'category');
            }
        }, 30, 3);

        add_action(BASE_ACTION_META_BOXES, function ($context, $object): void {
            if (get_class($object) === Brand::class && $context === 'advanced') {
                $sizeGuideService = app(SizeGuideService::class);

                MetaBox::addMetaBox(
                    'brand_size_guide_metabox',
                    trans('plugins/fob-product-size-guide::size-guide.metabox.title'),
                    function () use ($object, $sizeGuideService) {
                        return view('plugins/fob-product-size-guide::metaboxes.size-guide-metabox', [
                            'sizeGuides' => $sizeGuideService->getAllSizeGuides(),
                            'selectedSizeGuideId' => $sizeGuideService->getAssignedSizeGuideId($object->getKey(), 'brand'),
                            'helpText' => trans('plugins/fob-product-size-guide::size-guide.metabox.help_text_brand'),
                        ]);
                    },
                    get_class($object),
                    $context
                );
            }
        }, 30, 2);

        add_action(BASE_ACTION_AFTER_CREATE_CONTENT, function ($type, $request, $object): void {
            if (get_class($object) === Brand::class && $request->has('size_guide_id')) {
                $sizeGuideService = app(SizeGuideService::class);
                $sizeGuideId = $request->input('size_guide_id') ?: null;
                $sizeGuideService->assignSizeGuide($sizeGuideId, $object->getKey(), 'brand');
            }
        }, 30, 3);

        add_action(BASE_ACTION_AFTER_UPDATE_CONTENT, function ($type, $request, $object): void {
            if (get_class($object) === Brand::class && $request->has('size_guide_id')) {
                $sizeGuideService = app(SizeGuideService::class);
                $sizeGuideId = $request->input('size_guide_id') ?: null;
                $sizeGuideService->assignSizeGuide($sizeGuideId, $object->getKey(), 'brand');
            }
        }, 30, 3);

        add_filter(ECOMMERCE_PRODUCT_DETAIL_EXTRA_HTML, function ($html, $product) {
            if ($product instanceof Product) {
                self::$currentProduct = $product;

                $sizeGuideService = app(SizeGuideService::class);
                $sizeGuide = $sizeGuideService->getSizeGuideForProduct($product);

                if ($sizeGuide) {
                    return $html . view('plugins/fob-product-size-guide::frontend.size-guide', compact('sizeGuide'));
                }
            }

            return $html;
        }, 150, 2);

        add_filter(THEME_FRONT_FOOTER, function ($html) {
            $product = self::$currentProduct;

            if ($product instanceof Product) {
                $sizeGuideService = app(SizeGuideService::class);
                $sizeGuide = $sizeGuideService->getSizeGuideForProduct($product);

                if ($sizeGuide) {
                    $displayMode = setting('product_size_guide_display_mode', 'inline');
                    $rowThreshold = setting('product_size_guide_row_threshold', 10);
                    $rowCount = is_array($sizeGuide->table_rows) ? count($sizeGuide->table_rows) : 0;

                    $showModal = false;
                    if ($displayMode === 'popup') {
                        $showModal = true;
                    } elseif ($displayMode === 'conditional' && $rowCount > $rowThreshold) {
                        $showModal = true;
                    }

                    if ($showModal) {
                        return $html . view('plugins/fob-product-size-guide::frontend.size-guide-modal', compact('sizeGuide'));
                    }
                }
            }

            return $html;
        }, 150);
    }

    public function addSettings(?string $data = null): string
    {
        return $data . view('plugins/fob-product-size-guide::settings')->render();
    }
}
