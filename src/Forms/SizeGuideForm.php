<?php

namespace FriendsOfBotble\ProductSizeGuide\Forms;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Facades\Assets;
use Botble\Base\Forms\Fields\MediaImageField;
use Botble\Base\Forms\Fields\NumberField;
use Botble\Base\Forms\Fields\SelectField;
use Botble\Base\Forms\Fields\TextareaField;
use Botble\Base\Forms\Fields\TextField;
use Botble\Base\Forms\FormAbstract;
use FriendsOfBotble\ProductSizeGuide\Http\Requests\SizeGuideRequest;
use FriendsOfBotble\ProductSizeGuide\Models\SizeGuide;

class SizeGuideForm extends FormAbstract
{
    public function setup(): void
    {
        Assets::addScripts(['size-guide-admin'])
            ->addScriptsDirectly('vendor/core/plugins/fob-product-size-guide/js/size-guide-admin.js');

        $this
            ->model(SizeGuide::class)
            ->setValidatorClass(SizeGuideRequest::class)
            ->add('name', TextField::class, [
                'label' => trans('plugins/fob-product-size-guide::size-guide.form.name'),
                'required' => true,
                'attr' => [
                    'placeholder' => trans('plugins/fob-product-size-guide::size-guide.form.name_placeholder'),
                ],
            ])
            ->add('description', TextareaField::class, [
                'label' => trans('plugins/fob-product-size-guide::size-guide.form.description'),
                'attr' => [
                    'rows' => 3,
                    'placeholder' => trans('plugins/fob-product-size-guide::size-guide.form.description_placeholder'),
                ],
            ])
            ->add('image', MediaImageField::class, [
                'label' => trans('plugins/fob-product-size-guide::size-guide.form.image'),
                'help_block' => [
                    'text' => trans('plugins/fob-product-size-guide::size-guide.form.image_helper'),
                ],
            ])
            ->add('table_builder_wrapper', 'html', [
                'html' => view('plugins/fob-product-size-guide::admin.table-builder', [
                    'headers' => $this->getModel()->table_headers ?: [],
                    'rows' => $this->getModel()->table_rows ?: [],
                ])->render(),
            ])
            ->add('status', SelectField::class, [
                'label' => trans('core/base::forms.status'),
                'required' => true,
                'choices' => BaseStatusEnum::labels(),
            ])
            ->add('order', NumberField::class, [
                'label' => trans('plugins/fob-product-size-guide::size-guide.form.order'),
                'default_value' => 0,
                'attr' => [
                    'min' => 0,
                ],
                'help_block' => [
                    'text' => trans('plugins/fob-product-size-guide::size-guide.form.order_helper'),
                ],
            ])
            ->setBreakFieldPoint('status');
    }
}
