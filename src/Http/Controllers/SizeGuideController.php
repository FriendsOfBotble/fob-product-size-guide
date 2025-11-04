<?php

namespace FriendsOfBotble\ProductSizeGuide\Http\Controllers;

use Botble\Base\Http\Actions\DeleteResourceAction;
use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Supports\Breadcrumb;
use FriendsOfBotble\ProductSizeGuide\Forms\SizeGuideForm;
use FriendsOfBotble\ProductSizeGuide\Http\Requests\SizeGuideRequest;
use FriendsOfBotble\ProductSizeGuide\Models\SizeGuide;
use FriendsOfBotble\ProductSizeGuide\Tables\SizeGuideTable;

class SizeGuideController extends BaseController
{
    protected function breadcrumb(): Breadcrumb
    {
        return parent::breadcrumb()
            ->add(trans('plugins/fob-product-size-guide::size-guide.name'));
    }

    public function index(SizeGuideTable $table)
    {
        $this->pageTitle(trans('plugins/fob-product-size-guide::size-guide.name'));

        return $table->renderTable();
    }

    public function create()
    {
        $this->pageTitle(trans('plugins/fob-product-size-guide::size-guide.create'));

        return SizeGuideForm::create()->renderForm();
    }

    public function store(SizeGuideRequest $request)
    {
        $form = SizeGuideForm::create()->setRequest($request);
        $form->save();

        return $this
            ->httpResponse()
            ->setPreviousUrl(route('product-size-guide.index'))
            ->setNextUrl(route('product-size-guide.edit', $form->getModel()->getKey()))
            ->withCreatedSuccessMessage();
    }

    public function edit(SizeGuide $sizeGuide)
    {
        $this->pageTitle(trans('core/base::forms.edit_item', ['name' => $sizeGuide->name]));

        return SizeGuideForm::createFromModel($sizeGuide)->renderForm();
    }

    public function update(SizeGuide $sizeGuide, SizeGuideRequest $request)
    {
        SizeGuideForm::createFromModel($sizeGuide)
            ->setRequest($request)
            ->save();

        return $this
            ->httpResponse()
            ->setPreviousUrl(route('product-size-guide.index'))
            ->withUpdatedSuccessMessage();
    }

    public function destroy(SizeGuide $sizeGuide)
    {
        return DeleteResourceAction::make($sizeGuide);
    }
}
