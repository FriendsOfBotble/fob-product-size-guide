@if($sizeGuide)
    @php
        $displayMode = setting('product_size_guide_display_mode', 'inline');
        $rowThreshold = setting('product_size_guide_row_threshold', 10);
        $buttonText = setting('product_size_guide_button_text', 'Size Guide');
        $showImage = setting('product_size_guide_show_image', true);

        // Custom styling
        $headerBgColor = setting('product_size_guide_header_bg_color', '#f8f9fa');
        $headerTextColor = setting('product_size_guide_header_text_color', '#212529');
        $rowBgColor = setting('product_size_guide_row_bg_color', '#ffffff');
        $rowAltBgColor = setting('product_size_guide_row_alt_bg_color', '#f8f9fa');
        $rowTextColor = setting('product_size_guide_row_text_color', '#212529');
        $borderColor = setting('product_size_guide_border_color', '#dee2e6');
        $fontSize = setting('product_size_guide_font_size', 14);
        $borderRadius = setting('product_size_guide_border_radius', 4);
        $tableStyles = json_decode(setting('product_size_guide_table_styles', '["table-bordered"]'), true);
        if (! is_array($tableStyles) || empty($tableStyles)) {
            $tableStyles = ['table-bordered'];
        }
        $tableCssClasses = trim('table ' . implode(' ', array_unique(array_filter($tableStyles))));

        $rowCount = is_array($sizeGuide->table_rows) ? count($sizeGuide->table_rows) : 0;

        // Determine actual display mode
        if ($displayMode === 'conditional') {
            $actualDisplayMode = $rowCount > $rowThreshold ? 'popup' : 'inline';
        } else {
            $actualDisplayMode = $displayMode;
        }
    @endphp

    <div class="product-size-guide-wrapper mt-4" id="product-size-guide">
        @if($actualDisplayMode === 'inline')
            <!-- Inline Display -->
            @php
                $inlineExpanded = setting('product_size_guide_inline_expanded', true);
                $linkColor = setting('product_size_guide_link_color', '#0d6efd');
            @endphp
            <div class="size-guide-inline">
                <a href="#sizeGuideContent"
                   class="size-guide-header d-inline-flex align-items-center text-decoration-none"
                   data-bs-toggle="collapse"
                   aria-expanded="{{ $inlineExpanded ? 'true' : 'false' }}"
                   aria-controls="sizeGuideContent"
                   style="color: {{ $linkColor }};">
                    <span class="size-guide-label">{{ $buttonText }}</span>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" class="chevron-icon ms-2 {{ $inlineExpanded ? 'expanded' : '' }}">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </a>

                <div class="collapse {{ $inlineExpanded ? 'show' : '' }} mt-3" id="sizeGuideContent">
                @if($showImage && $sizeGuide->image)
                    <div class="size-guide-image mb-3">
                        <img src="{{ RvMedia::getImageUrl($sizeGuide->image) }}"
                             alt="{{ $sizeGuide->name }}"
                             class="img-fluid rounded">
                    </div>
                @endif

                @if($sizeGuide->table_headers && $sizeGuide->table_rows)
                    @php
                        $headerModels = \FriendsOfBotble\ProductSizeGuide\Models\SizeGuideHeader::query()
                            ->whereIn('slug', $sizeGuide->table_headers)
                            ->pluck('name', 'slug');
                    @endphp
                    <div class="table-responsive">
                        <table class="{{ $tableCssClasses }}" style="border-color: {{ $borderColor }}; border-radius: {{ $borderRadius }}px; overflow: hidden; font-size: {{ $fontSize }}px;">
                            <thead>
                                <tr style="background-color: {{ $headerBgColor }}; color: {{ $headerTextColor }};">
                                    @foreach($sizeGuide->table_headers as $header)
                                        <th style="background-color: {{ $headerBgColor }}; color: {{ $headerTextColor }}; border-color: {{ $borderColor }};">
                                            {{ $headerModels->get($header, $header) }}
                                        </th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sizeGuide->table_rows as $index => $row)
                                    <tr style="background-color: {{ $index % 2 === 0 ? $rowBgColor : $rowAltBgColor }}; color: {{ $rowTextColor }};">
                                        @foreach($row as $cell)
                                            <td style="border-color: {{ $borderColor }}; color: {{ $rowTextColor }};">{{ $cell }}</td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
                </div>
            </div>
        @else
            <!-- Popup/Modal Display -->
            <div class="size-guide-popup">
                <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#sizeGuideModal">
                    <i class="icon-size me-1"></i>
                    {{ $buttonText }}
                </a>
            </div>
        @endif
    </div>

    @push('footer')
        <link rel="stylesheet" href="{{ asset('vendor/core/plugins/fob-product-size-guide/css/size-guide-frontend.css') }}">
        <script src="{{ asset('vendor/core/plugins/fob-product-size-guide/js/size-guide-frontend.js') }}"></script>
    @endpush
@endif
