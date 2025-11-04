<?php

namespace FriendsOfBotble\ProductSizeGuide\Forms\Settings;

use Botble\Base\Forms\Fields\ColorField;
use Botble\Base\Forms\Fields\HtmlField;
use Botble\Base\Forms\Fields\MultiCheckListField;
use Botble\Base\Forms\Fields\NumberField;
use Botble\Base\Forms\Fields\OnOffField;
use Botble\Base\Forms\Fields\SelectField;
use Botble\Base\Forms\Fields\TextField;
use Botble\Setting\Forms\SettingForm;
use FriendsOfBotble\ProductSizeGuide\Http\Requests\Settings\ProductSizeGuideSettingRequest;

class ProductSizeGuideSettingForm extends SettingForm
{
    public function setup(): void
    {
        parent::setup();

        $displayMode = old('product_size_guide_display_mode', setting('product_size_guide_display_mode', 'inline'));
        $tableStyles = json_decode(setting('product_size_guide_table_styles', '["table-bordered"]'), true) ?: ['table-bordered'];

        $this
            ->setSectionTitle(trans('plugins/fob-product-size-guide::size-guide.settings.title'))
            ->setSectionDescription(trans('plugins/fob-product-size-guide::size-guide.settings.description'))
            ->setValidatorClass(ProductSizeGuideSettingRequest::class)
            ->add('product_size_guide_display_mode', SelectField::class, [
                'label' => trans('plugins/fob-product-size-guide::size-guide.settings.display_mode'),
                'choices' => [
                    'inline' => trans('plugins/fob-product-size-guide::size-guide.settings.display_mode_inline'),
                    'popup' => trans('plugins/fob-product-size-guide::size-guide.settings.display_mode_popup'),
                    'conditional' => trans('plugins/fob-product-size-guide::size-guide.settings.display_mode_conditional'),
                ],
                'value' => $displayMode,
                'help_block' => [
                    'text' => trans('plugins/fob-product-size-guide::size-guide.settings.display_mode_help'),
                ],
            ])
            ->addOpenCollapsible('product_size_guide_display_mode', 'conditional', $displayMode)
            ->add('product_size_guide_row_threshold', NumberField::class, [
                'label' => trans('plugins/fob-product-size-guide::size-guide.settings.row_threshold'),
                'value' => setting('product_size_guide_row_threshold', 10),
                'attr' => [
                    'min' => 1,
                    'max' => 100,
                ],
                'help_block' => [
                    'text' => trans('plugins/fob-product-size-guide::size-guide.settings.row_threshold_help'),
                ],
            ])
            ->addCloseCollapsible('product_size_guide_display_mode', 'conditional')
            // Inline mode settings
            ->addOpenCollapsible('product_size_guide_display_mode', 'inline', $displayMode)
            ->add('product_size_guide_button_text', TextField::class, [
                'label' => trans('plugins/fob-product-size-guide::size-guide.settings.button_text'),
                'value' => setting('product_size_guide_button_text', 'Size Guide'),
                'attr' => [
                    'placeholder' => trans('plugins/fob-product-size-guide::size-guide.settings.button_text_placeholder'),
                ],
                'help_block' => [
                    'text' => trans('plugins/fob-product-size-guide::size-guide.settings.button_text_help'),
                ],
            ])
            ->add('product_size_guide_inline_expanded', OnOffField::class, [
                'label' => trans('plugins/fob-product-size-guide::size-guide.settings.inline_expanded'),
                'value' => setting('product_size_guide_inline_expanded', true),
                'help_block' => [
                    'text' => trans('plugins/fob-product-size-guide::size-guide.settings.inline_expanded_help'),
                ],
            ])
            ->addCloseCollapsible('product_size_guide_display_mode', 'inline')
            // Popup mode settings
            ->addOpenCollapsible('product_size_guide_display_mode', 'popup', $displayMode)
            ->add('product_size_guide_modal_title', TextField::class, [
                'label' => trans('plugins/fob-product-size-guide::size-guide.settings.modal_title'),
                'value' => setting('product_size_guide_modal_title', 'Size Guide'),
                'attr' => [
                    'placeholder' => trans('plugins/fob-product-size-guide::size-guide.settings.modal_title_placeholder'),
                ],
                'help_block' => [
                    'text' => trans('plugins/fob-product-size-guide::size-guide.settings.modal_title_help'),
                ],
            ])
            ->addCloseCollapsible('product_size_guide_display_mode', 'popup')
            // Common settings for all modes
            ->add('product_size_guide_show_image', OnOffField::class, [
                'label' => trans('plugins/fob-product-size-guide::size-guide.settings.show_image'),
                'value' => setting('product_size_guide_show_image', true),
                'help_block' => [
                    'text' => trans('plugins/fob-product-size-guide::size-guide.settings.show_image_help'),
                ],
            ])
            ->add('appearance_heading', HtmlField::class, [
                'html' => '<h4 class="setting-title mt-4">' . trans('plugins/fob-product-size-guide::size-guide.settings.appearance') . '</h4>',
            ])
            ->add('product_size_guide_link_color', ColorField::class, [
                'label' => trans('plugins/fob-product-size-guide::size-guide.settings.link_color'),
                'value' => setting('product_size_guide_link_color', '#0d6efd'),
                'help_block' => [
                    'text' => trans('plugins/fob-product-size-guide::size-guide.settings.link_color_help'),
                ],
            ])
            ->add('product_size_guide_header_bg_color', ColorField::class, [
                'label' => trans('plugins/fob-product-size-guide::size-guide.settings.header_bg_color'),
                'value' => setting('product_size_guide_header_bg_color', '#f8f9fa'),
                'help_block' => [
                    'text' => trans('plugins/fob-product-size-guide::size-guide.settings.header_bg_color_help'),
                ],
            ])
            ->add('product_size_guide_header_text_color', ColorField::class, [
                'label' => trans('plugins/fob-product-size-guide::size-guide.settings.header_text_color'),
                'value' => setting('product_size_guide_header_text_color', '#212529'),
                'help_block' => [
                    'text' => trans('plugins/fob-product-size-guide::size-guide.settings.header_text_color_help'),
                ],
            ])
            ->add('product_size_guide_row_bg_color', ColorField::class, [
                'label' => trans('plugins/fob-product-size-guide::size-guide.settings.row_bg_color'),
                'value' => setting('product_size_guide_row_bg_color', '#ffffff'),
                'help_block' => [
                    'text' => trans('plugins/fob-product-size-guide::size-guide.settings.row_bg_color_help'),
                ],
            ])
            ->add('product_size_guide_row_alt_bg_color', ColorField::class, [
                'label' => trans('plugins/fob-product-size-guide::size-guide.settings.row_alt_bg_color'),
                'value' => setting('product_size_guide_row_alt_bg_color', '#f8f9fa'),
                'help_block' => [
                    'text' => trans('plugins/fob-product-size-guide::size-guide.settings.row_alt_bg_color_help'),
                ],
            ])
            ->add('product_size_guide_row_text_color', ColorField::class, [
                'label' => trans('plugins/fob-product-size-guide::size-guide.settings.row_text_color'),
                'value' => setting('product_size_guide_row_text_color', '#212529'),
                'help_block' => [
                    'text' => trans('plugins/fob-product-size-guide::size-guide.settings.row_text_color_help'),
                ],
            ])
            ->add('product_size_guide_border_color', ColorField::class, [
                'label' => trans('plugins/fob-product-size-guide::size-guide.settings.border_color'),
                'value' => setting('product_size_guide_border_color', '#dee2e6'),
                'help_block' => [
                    'text' => trans('plugins/fob-product-size-guide::size-guide.settings.border_color_help'),
                ],
            ])
            ->add('product_size_guide_table_styles[]', MultiCheckListField::class, [
                'label' => trans('plugins/fob-product-size-guide::size-guide.settings.table_styles'),
                'choices' => [
                    'table-bordered' => trans('plugins/fob-product-size-guide::size-guide.settings.table_style_bordered'),
                    'table-striped' => trans('plugins/fob-product-size-guide::size-guide.settings.table_style_striped'),
                    'table-hover' => trans('plugins/fob-product-size-guide::size-guide.settings.table_style_hover'),
                    'table-sm' => trans('plugins/fob-product-size-guide::size-guide.settings.table_style_small'),
                ],
                'value' => $tableStyles,
                'help_block' => [
                    'text' => trans('plugins/fob-product-size-guide::size-guide.settings.table_styles_help'),
                ],
            ])
            ->add('product_size_guide_font_size', NumberField::class, [
                'label' => trans('plugins/fob-product-size-guide::size-guide.settings.font_size'),
                'value' => setting('product_size_guide_font_size', 14),
                'attr' => [
                    'min' => 10,
                    'max' => 24,
                ],
                'help_block' => [
                    'text' => trans('plugins/fob-product-size-guide::size-guide.settings.font_size_help'),
                ],
            ])
            ->add('product_size_guide_border_radius', NumberField::class, [
                'label' => trans('plugins/fob-product-size-guide::size-guide.settings.border_radius'),
                'value' => setting('product_size_guide_border_radius', 4),
                'attr' => [
                    'min' => 0,
                    'max' => 20,
                ],
                'help_block' => [
                    'text' => trans('plugins/fob-product-size-guide::size-guide.settings.border_radius_help'),
                ],
            ]);
    }
}
