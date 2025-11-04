<?php

namespace FriendsOfBotble\ProductSizeGuide\Forms;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Forms\Fields\NumberField;
use Botble\Base\Forms\Fields\SelectField;
use Botble\Base\Forms\Fields\TextField;
use Botble\Base\Forms\FormAbstract;
use FriendsOfBotble\ProductSizeGuide\Http\Requests\SizeGuideHeaderRequest;
use FriendsOfBotble\ProductSizeGuide\Models\SizeGuideHeader;

class SizeGuideHeaderForm extends FormAbstract
{
    public function setup(): void
    {
        $this
            ->model(SizeGuideHeader::class)
            ->setValidatorClass(SizeGuideHeaderRequest::class)
            ->add('name', TextField::class, [
                'label' => trans('core/base::forms.name'),
                'required' => true,
                'attr' => [
                    'placeholder' => trans('core/base::forms.name_placeholder'),
                ],
            ])
            ->add('slug', TextField::class, [
                'label' => trans('core/base::forms.slug'),
                'required' => true,
                'attr' => [
                    'data-counter' => 120,
                    'placeholder' => trans('core/base::forms.slug_placeholder'),
                ],
            ])
            ->add('category', SelectField::class, [
                'label' => trans('plugins/fob-product-size-guide::size-guide.headers.category'),
                'required' => true,
                'choices' => [
                    'general' => trans('plugins/fob-product-size-guide::size-guide.headers.categories.general'),
                    'size' => trans('plugins/fob-product-size-guide::size-guide.headers.categories.size'),
                    'measurement' => trans('plugins/fob-product-size-guide::size-guide.headers.categories.measurement'),
                    'unit' => trans('plugins/fob-product-size-guide::size-guide.headers.categories.unit'),
                ],
            ])
            ->add('status', SelectField::class, [
                'label' => trans('core/base::forms.status'),
                'required' => true,
                'choices' => BaseStatusEnum::labels(),
            ])
            ->add('order', NumberField::class, [
                'label' => trans('core/base::forms.order'),
                'default_value' => 0,
                'attr' => [
                    'min' => 0,
                ],
            ])
            ->setBreakFieldPoint('status');
    }
}
