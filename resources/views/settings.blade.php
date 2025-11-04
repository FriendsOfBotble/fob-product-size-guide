<x-core-setting::section
    :title="trans('plugins/fob-product-size-guide::size-guide.name')"
    :description="trans('plugins/fob-product-size-guide::size-guide.settings.description')"
>
    <x-core-setting::select
        name="product_size_guide_display_mode"
        :label="trans('plugins/fob-product-size-guide::size-guide.settings.display_mode')"
        :value="setting('product_size_guide_display_mode', 'inline')"
        :helper-text="trans('plugins/fob-product-size-guide::size-guide.settings.display_mode_help')"
    >
        <option value="inline" @selected(setting('product_size_guide_display_mode', 'inline') === 'inline')>
            {{ trans('plugins/fob-product-size-guide::size-guide.settings.display_mode_inline') }}
        </option>
        <option value="popup" @selected(setting('product_size_guide_display_mode', 'inline') === 'popup')>
            {{ trans('plugins/fob-product-size-guide::size-guide.settings.display_mode_popup') }}
        </option>
        <option value="conditional" @selected(setting('product_size_guide_display_mode', 'inline') === 'conditional')>
            {{ trans('plugins/fob-product-size-guide::size-guide.settings.display_mode_conditional') }}
        </option>
    </x-core-setting::select>

    <x-core-setting::text-input
        name="product_size_guide_row_threshold"
        :label="trans('plugins/fob-product-size-guide::size-guide.settings.row_threshold')"
        type="number"
        :value="setting('product_size_guide_row_threshold', 10)"
        :helper-text="trans('plugins/fob-product-size-guide::size-guide.settings.row_threshold_help')"
    />

    <x-core-setting::text-input
        name="product_size_guide_button_text"
        :label="trans('plugins/fob-product-size-guide::size-guide.settings.button_text')"
        :value="setting('product_size_guide_button_text', 'Size Guide')"
        :placeholder="trans('plugins/fob-product-size-guide::size-guide.settings.button_text_placeholder')"
        :helper-text="trans('plugins/fob-product-size-guide::size-guide.settings.button_text_help')"
    />

    <x-core-setting::checkbox
        name="product_size_guide_inline_expanded"
        :label="trans('plugins/fob-product-size-guide::size-guide.settings.inline_expanded')"
        :checked="setting('product_size_guide_inline_expanded', true)"
        :helper-text="trans('plugins/fob-product-size-guide::size-guide.settings.inline_expanded_help')"
    />

    <x-core-setting::text-input
        name="product_size_guide_modal_title"
        :label="trans('plugins/fob-product-size-guide::size-guide.settings.modal_title')"
        :value="setting('product_size_guide_modal_title', 'Size Guide')"
        :placeholder="trans('plugins/fob-product-size-guide::size-guide.settings.modal_title_placeholder')"
        :helper-text="trans('plugins/fob-product-size-guide::size-guide.settings.modal_title_help')"
    />

    <x-core-setting::checkbox
        name="product_size_guide_show_image"
        :label="trans('plugins/fob-product-size-guide::size-guide.settings.show_image')"
        :checked="setting('product_size_guide_show_image', true)"
        :helper-text="trans('plugins/fob-product-size-guide::size-guide.settings.show_image_help')"
    />

    <x-core-setting::text-input
        name="product_size_guide_header_bg_color"
        :label="trans('plugins/fob-product-size-guide::size-guide.settings.header_bg_color')"
        type="color"
        :value="setting('product_size_guide_header_bg_color', '#f8f9fa')"
        :helper-text="trans('plugins/fob-product-size-guide::size-guide.settings.header_bg_color_help')"
    />

    <x-core-setting::text-input
        name="product_size_guide_header_text_color"
        :label="trans('plugins/fob-product-size-guide::size-guide.settings.header_text_color')"
        type="color"
        :value="setting('product_size_guide_header_text_color', '#212529')"
        :helper-text="trans('plugins/fob-product-size-guide::size-guide.settings.header_text_color_help')"
    />

    <x-core-setting::text-input
        name="product_size_guide_row_bg_color"
        :label="trans('plugins/fob-product-size-guide::size-guide.settings.row_bg_color')"
        type="color"
        :value="setting('product_size_guide_row_bg_color', '#ffffff')"
        :helper-text="trans('plugins/fob-product-size-guide::size-guide.settings.row_bg_color_help')"
    />

    <x-core-setting::text-input
        name="product_size_guide_row_alt_bg_color"
        :label="trans('plugins/fob-product-size-guide::size-guide.settings.row_alt_bg_color')"
        type="color"
        :value="setting('product_size_guide_row_alt_bg_color', '#f8f9fa')"
        :helper-text="trans('plugins/fob-product-size-guide::size-guide.settings.row_alt_bg_color_help')"
    />

    <x-core-setting::text-input
        name="product_size_guide_row_text_color"
        :label="trans('plugins/fob-product-size-guide::size-guide.settings.row_text_color')"
        type="color"
        :value="setting('product_size_guide_row_text_color', '#212529')"
        :helper-text="trans('plugins/fob-product-size-guide::size-guide.settings.row_text_color_help')"
    />

    <x-core-setting::text-input
        name="product_size_guide_border_color"
        :label="trans('plugins/fob-product-size-guide::size-guide.settings.border_color')"
        type="color"
        :value="setting('product_size_guide_border_color', '#dee2e6')"
        :helper-text="trans('plugins/fob-product-size-guide::size-guide.settings.border_color_help')"
    />

    @php
        $tableStyles = json_decode(setting('product_size_guide_table_styles', '["table-bordered"]'), true) ?: ['table-bordered'];
        $availableTableStyles = [
            'table-bordered' => trans('plugins/fob-product-size-guide::size-guide.settings.table_style_bordered'),
            'table-striped' => trans('plugins/fob-product-size-guide::size-guide.settings.table_style_striped'),
            'table-hover' => trans('plugins/fob-product-size-guide::size-guide.settings.table_style_hover'),
            'table-sm' => trans('plugins/fob-product-size-guide::size-guide.settings.table_style_small'),
        ];
    @endphp

    <x-core-setting::form-group>
        <label class="form-label">
            {{ trans('plugins/fob-product-size-guide::size-guide.settings.table_styles') }}
        </label>

        <div class="row gy-2">
            @foreach($availableTableStyles as $class => $label)
                <div class="col-md-3 col-sm-6">
                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            name="product_size_guide_table_styles[]"
                            id="product_size_guide_table_style_{{ $class }}"
                            value="{{ $class }}"
                            @checked(in_array($class, $tableStyles, true))
                        >
                        <label class="form-check-label" for="product_size_guide_table_style_{{ $class }}">
                            {{ $label }}
                        </label>
                    </div>
                </div>
            @endforeach
        </div>

        {{ Form::helper(trans('plugins/fob-product-size-guide::size-guide.settings.table_styles_help')) }}
    </x-core-setting::form-group>

    <x-core-setting::text-input
        name="product_size_guide_font_size"
        :label="trans('plugins/fob-product-size-guide::size-guide.settings.font_size')"
        type="number"
        :value="setting('product_size_guide_font_size', 14)"
        :helper-text="trans('plugins/fob-product-size-guide::size-guide.settings.font_size_help')"
    />

    <x-core-setting::text-input
        name="product_size_guide_border_radius"
        :label="trans('plugins/fob-product-size-guide::size-guide.settings.border_radius')"
        type="number"
        :value="setting('product_size_guide_border_radius', 4)"
        :helper-text="trans('plugins/fob-product-size-guide::size-guide.settings.border_radius_help')"
    />
</x-core-setting::section>
