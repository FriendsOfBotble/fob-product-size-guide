<?php

namespace FriendsOfBotble\ProductSizeGuide\Http\Controllers\Settings;

use Botble\Base\Http\Controllers\BaseController;
use Botble\Setting\Http\Controllers\Concerns\InteractsWithSettings;
use FriendsOfBotble\ProductSizeGuide\Forms\Settings\ProductSizeGuideSettingForm;
use FriendsOfBotble\ProductSizeGuide\Http\Requests\Settings\ProductSizeGuideSettingRequest;

class ProductSizeGuideSettingController extends BaseController
{
    use InteractsWithSettings;

    public function edit()
    {
        $this->pageTitle(trans('plugins/fob-product-size-guide::size-guide.settings.title'));

        return ProductSizeGuideSettingForm::create()->renderForm();
    }

    public function update(ProductSizeGuideSettingRequest $request)
    {
        return $this->performUpdate($request->validated());
    }
}
