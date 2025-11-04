@if($sizeGuide)
    @php
        $modalTitle = setting('product_size_guide_modal_title', 'Size Guide');
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
    @endphp

    <!-- Modal -->
    <div class="modal fade" id="sizeGuideModal" tabindex="-1" aria-labelledby="sizeGuideModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="sizeGuideModalLabel">{{ $modalTitle }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="{{ trans('plugins/fob-product-size-guide::size-guide.frontend.close') }}"></button>
                </div>
                <div class="modal-body">
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        {{ trans('plugins/fob-product-size-guide::size-guide.frontend.close') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
@endif
