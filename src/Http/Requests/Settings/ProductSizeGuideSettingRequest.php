<?php

namespace FriendsOfBotble\ProductSizeGuide\Http\Requests\Settings;

use Botble\Support\Http\Requests\Request;
use Illuminate\Validation\Rule;

class ProductSizeGuideSettingRequest extends Request
{
    public function rules(): array
    {
        return [
            'product_size_guide_display_mode' => ['nullable', 'string', 'in:inline,popup,conditional'],
            'product_size_guide_row_threshold' => ['nullable', 'integer', 'min:1', 'max:100'],
            'product_size_guide_button_text' => ['nullable', 'string', 'max:250'],
            'product_size_guide_modal_title' => ['nullable', 'string', 'max:250'],
            'product_size_guide_inline_expanded' => ['nullable', 'boolean'],
            'product_size_guide_show_image' => ['nullable', 'boolean'],

            'product_size_guide_link_color' => ['nullable', 'string', 'regex:/^\\s*(#(?:[A-Fa-f0-9]{3,8})|(?:rgba?|hsla?)\\([^)]+\\)|transparent)\\s*$/i'],
            'product_size_guide_header_bg_color' => ['nullable', 'string', 'regex:/^\\s*(#(?:[A-Fa-f0-9]{3,8})|(?:rgba?|hsla?)\\([^)]+\\)|transparent)\\s*$/i'],
            'product_size_guide_header_text_color' => ['nullable', 'string', 'regex:/^\\s*(#(?:[A-Fa-f0-9]{3,8})|(?:rgba?|hsla?)\\([^)]+\\)|transparent)\\s*$/i'],
            'product_size_guide_row_bg_color' => ['nullable', 'string', 'regex:/^\\s*(#(?:[A-Fa-f0-9]{3,8})|(?:rgba?|hsla?)\\([^)]+\\)|transparent)\\s*$/i'],
            'product_size_guide_row_alt_bg_color' => ['nullable', 'string', 'regex:/^\\s*(#(?:[A-Fa-f0-9]{3,8})|(?:rgba?|hsla?)\\([^)]+\\)|transparent)\\s*$/i'],
            'product_size_guide_row_text_color' => ['nullable', 'string', 'regex:/^\\s*(#(?:[A-Fa-f0-9]{3,8})|(?:rgba?|hsla?)\\([^)]+\\)|transparent)\\s*$/i'],
            'product_size_guide_border_color' => ['nullable', 'string', 'regex:/^\\s*(#(?:[A-Fa-f0-9]{3,8})|(?:rgba?|hsla?)\\([^)]+\\)|transparent)\\s*$/i'],
            'product_size_guide_table_styles' => ['nullable', 'array'],
            'product_size_guide_table_styles.*' => ['string', Rule::in(['table-bordered', 'table-striped', 'table-hover', 'table-sm'])],

            'product_size_guide_font_size' => ['nullable', 'integer', 'min:10', 'max:24'],
            'product_size_guide_border_radius' => ['nullable', 'integer', 'min:0', 'max:20'],
        ];
    }
}
