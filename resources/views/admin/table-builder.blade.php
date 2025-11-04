<div class="form-group mb-3">
    <label class="form-label">{{ trans('plugins/fob-product-size-guide::size-guide.form.table_builder') }}</label>
    <div class="form-text mb-3">{{ trans('plugins/fob-product-size-guide::size-guide.form.table_builder_helper') }}</div>

    <div class="card">
        <div class="card-body">
            <div id="size-guide-table-builder">
                <!-- Column Headers Section -->
                <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h4 class="mb-0">{{ trans('plugins/fob-product-size-guide::size-guide.table_builder.column_header') }}</h4>
                        <button type="button" class="btn btn-primary btn-sm" id="add-column-btn">
                            <x-core::icon name="ti ti-plus" />
                            {{ trans('plugins/fob-product-size-guide::size-guide.table_builder.add_column') }}
                        </button>
                    </div>
                    <div id="table-headers" class="row g-2">
                        @if(empty($headers))
                            <div class="col-12">
                                <div class="alert alert-info mb-0">
                                    {{ trans('plugins/fob-product-size-guide::size-guide.table_builder.no_columns') }}
                                </div>
                            </div>
                        @else
                            @php
                                $availableHeaders = \FriendsOfBotble\ProductSizeGuide\Models\SizeGuideHeader::query()
                                    ->where('status', \Botble\Base\Enums\BaseStatusEnum::PUBLISHED)
                                    ->orderBy('order')
                                    ->orderBy('name')
                                    ->get();
                            @endphp
                            @foreach($headers as $index => $header)
                                <div class="col-md-3 col-sm-6 column-header-item" data-index="{{ $index }}">
                                    <div class="input-group">
                                        <select class="form-control column-header-input"
                                                name="table_headers[]">
                                            <option value="">{{ trans('plugins/fob-product-size-guide::size-guide.table_builder.select_header') }}</option>
                                            @foreach($availableHeaders as $availableHeader)
                                                <option value="{{ $availableHeader->slug }}" {{ $header === $availableHeader->slug ? 'selected' : '' }}>
                                                    {{ $availableHeader->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <button type="button" class="btn btn-danger btn-icon remove-column-btn" data-index="{{ $index }}">
                                            <x-core::icon name="ti ti-trash" />
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

                <hr class="my-3">

                <!-- Table Rows Section -->
                <div>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h4 class="mb-0">{{ trans('plugins/fob-product-size-guide::size-guide.table_builder.add_row') }}</h4>
                        <button type="button" class="btn btn-primary btn-sm" id="add-row-btn">
                            <x-core::icon name="ti ti-plus" />
                            {{ trans('plugins/fob-product-size-guide::size-guide.table_builder.add_row') }}
                        </button>
                    </div>
                    <div id="table-rows">
                        @if(empty($rows))
                            <div class="alert alert-info" id="no-rows-alert">
                                {{ trans('plugins/fob-product-size-guide::size-guide.table_builder.no_rows') }}
                            </div>
                        @else
                            @foreach($rows as $rowIndex => $row)
                                <div class="row g-2 mb-2 table-row-item" data-row-index="{{ $rowIndex }}">
                                    @foreach($row as $colIndex => $cell)
                                        <div class="col table-cell-item" data-col-index="{{ $colIndex }}">
                                            <input type="text"
                                                   class="form-control table-cell-input"
                                                   name="table_rows[{{ $rowIndex }}][]"
                                                   value="{{ $cell }}"
                                                   placeholder="...">
                                        </div>
                                    @endforeach
                                    <div class="col-auto">
                                        <button type="button" class="btn btn-danger btn-icon remove-row-btn">
                                            <x-core::icon name="ti ti-trash" />
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

                <!-- Preview Section -->
                <div class="mt-4" id="table-preview-wrapper" style="display: {{ empty($headers) && empty($rows) ? 'none' : 'block' }}">
                    <h4 class="mb-2">Preview</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="table-preview">
                            <thead>
                                <tr id="preview-headers">
                                    @foreach($headers as $header)
                                        <th>{{ $header }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody id="preview-body">
                                @foreach($rows as $row)
                                    <tr>
                                        @foreach($row as $cell)
                                            <td>{{ $cell }}</td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
