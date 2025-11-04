<?php

namespace FriendsOfBotble\ProductSizeGuide\Http\Controllers;

use Botble\Base\Events\CreatedContentEvent;
use Botble\Base\Events\UpdatedContentEvent;
use Botble\Base\Facades\PageTitle;
use Botble\Base\Http\Actions\DeleteResourceAction;
use Botble\Base\Http\Controllers\BaseController;
use FriendsOfBotble\ProductSizeGuide\Forms\SizeGuideHeaderForm;
use FriendsOfBotble\ProductSizeGuide\Http\Requests\SizeGuideHeaderRequest;
use FriendsOfBotble\ProductSizeGuide\Models\SizeGuideHeader;
use FriendsOfBotble\ProductSizeGuide\Tables\SizeGuideHeaderTable;

class SizeGuideHeaderController extends BaseController
{
    public function index(SizeGuideHeaderTable $table)
    {
        PageTitle::setTitle(trans('plugins/fob-product-size-guide::size-guide.headers.name'));

        return $table->renderTable();
    }

    public function create()
    {
        PageTitle::setTitle(trans('plugins/fob-product-size-guide::size-guide.headers.create'));

        return SizeGuideHeaderForm::create()->renderForm();
    }

    public function store(SizeGuideHeaderRequest $request)
    {
        $sizeGuideHeader = SizeGuideHeader::query()->create($request->validated());

        event(new CreatedContentEvent(SizeGuideHeader::class, $request, $sizeGuideHeader));

        return $this
            ->httpResponse()
            ->setPreviousUrl(route('size-guide-headers.index'))
            ->setNextUrl(route('size-guide-headers.edit', $sizeGuideHeader->getKey()))
            ->withCreatedSuccessMessage();
    }

    public function edit(SizeGuideHeader $sizeGuideHeader)
    {
        PageTitle::setTitle(trans('core/base::forms.edit_item', ['name' => $sizeGuideHeader->name]));

        return SizeGuideHeaderForm::createFromModel($sizeGuideHeader)->renderForm();
    }

    public function update(SizeGuideHeader $sizeGuideHeader, SizeGuideHeaderRequest $request)
    {
        $sizeGuideHeader->fill($request->validated());
        $sizeGuideHeader->save();

        event(new UpdatedContentEvent(SizeGuideHeader::class, $request, $sizeGuideHeader));

        return $this
            ->httpResponse()
            ->setPreviousUrl(route('size-guide-headers.index'))
            ->withUpdatedSuccessMessage();
    }

    public function destroy(SizeGuideHeader $sizeGuideHeader)
    {
        return DeleteResourceAction::make($sizeGuideHeader);
    }
}
