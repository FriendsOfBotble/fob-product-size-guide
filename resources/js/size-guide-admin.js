/**
 * Size Guide Table Builder - Admin Panel
 */

(function ($) {
    'use strict';

    const trashIconSvg = '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 7l16 0"></path><path d="M10 11l0 6"></path><path d="M14 11l0 6"></path><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path></svg>';

    const escapeHtml = function (value) {
        return $('<div>').text(value == null ? '' : String(value)).html();
    };

    const SizeGuideTableBuilder = {
        availableHeaders: [],
        translations: {
            selectHeader: 'Select column header',
            noColumns: 'No columns yet. Click "Add Column" to start.',
            noRows: 'No rows yet. Click "Add Row" to add data.',
            addFirstColumn: 'Please add at least one column first.',
        },

        init: function () {
            this.loadConfig();
            this.bindEvents();
        },

        loadConfig: function () {
            const config = $('#size-guide-table-builder').data('builder-config') || {};

            if (Array.isArray(config.availableHeaders)) {
                this.availableHeaders = config.availableHeaders;
            }

            if (config.translations) {
                this.translations = Object.assign(this.translations, config.translations);
            }
        },

        buildOptionsHtml: function (selectedSlug) {
            let html = `<option value="">${escapeHtml(this.translations.selectHeader)}</option>`;

            this.availableHeaders.forEach(function (header) {
                const isSelected = selectedSlug && selectedSlug === header.slug ? ' selected' : '';
                html += `<option value="${escapeHtml(header.slug)}"${isSelected}>${escapeHtml(header.name)}</option>`;
            });

            return html;
        },

        bindEvents: function () {
            $(document).on('click', '#add-column-btn', this.addColumn.bind(this));
            $(document).on('click', '.remove-column-btn', this.removeColumn.bind(this));
            $(document).on('click', '#add-row-btn', this.addRow.bind(this));
            $(document).on('click', '.remove-row-btn', this.removeRow.bind(this));
            $(document).on('change input', '.column-header-input', this.updatePreview.bind(this));
            $(document).on('input', '.table-cell-input', this.updatePreview.bind(this));
        },

        addColumn: function (e) {
            e.preventDefault();

            const $headersContainer = $('#table-headers');
            $headersContainer.find('.alert').closest('.col-12').remove();
            $headersContainer.find('.alert').remove();

            const newIndex = $('.column-header-item').length;
            const optionsHtml = this.buildOptionsHtml();

            const columnHtml = `
                <div class="col-md-3 col-sm-6 column-header-item" data-index="${newIndex}">
                    <div class="input-group">
                        <select class="form-control column-header-input" name="table_headers[]">
                            ${optionsHtml}
                        </select>
                        <button type="button" class="btn btn-danger btn-icon remove-column-btn" data-index="${newIndex}">
                            ${trashIconSvg}
                        </button>
                    </div>
                </div>
            `;

            $headersContainer.append(columnHtml);
            this.updateAllRows();
            this.updatePreview();
        },

        removeColumn: function (e) {
            e.preventDefault();

            const $btn = $(e.currentTarget);
            const columnIndex = parseInt($btn.data('index'), 10);

            $btn.closest('.column-header-item').remove();

            $('.column-header-item').each(function (index) {
                $(this).attr('data-index', index);
                $(this).find('.remove-column-btn').attr('data-index', index);
            });

            $('.table-row-item').each(function () {
                $(this).find('.table-cell-item').eq(columnIndex).remove();
            });

            $('.table-row-item').each(function () {
                $(this).find('.table-cell-item').each(function (index) {
                    $(this).attr('data-col-index', index);
                });
            });

            if ($('.column-header-item').length === 0) {
                $('#table-headers').html(
                    `<div class="col-12"><div class="alert alert-info mb-0">${escapeHtml(this.translations.noColumns)}</div></div>`
                );
            }

            this.updatePreview();
        },

        addRow: function (e) {
            e.preventDefault();

            const columnCount = $('.column-header-item').length;

            if (columnCount === 0) {
                window.alert(this.translations.addFirstColumn);
                return;
            }

            const $rowsContainer = $('#table-rows');
            $rowsContainer.find('#no-rows-alert').remove();

            const newRowIndex = $('.table-row-item').length;

            let cellsHtml = '';
            for (let i = 0; i < columnCount; i++) {
                cellsHtml += `
                    <div class="col table-cell-item" data-col-index="${i}">
                        <input type="text"
                               class="form-control table-cell-input"
                               name="table_rows[${newRowIndex}][]"
                               placeholder="...">
                    </div>
                `;
            }

            const rowHtml = `
                <div class="row g-2 mb-2 table-row-item" data-row-index="${newRowIndex}">
                    ${cellsHtml}
                    <div class="col-auto">
                        <button type="button" class="btn btn-danger btn-icon remove-row-btn">
                            ${trashIconSvg}
                        </button>
                    </div>
                </div>
            `;

            $rowsContainer.append(rowHtml);
            this.updatePreview();
        },

        removeRow: function (e) {
            e.preventDefault();

            const $row = $(e.currentTarget).closest('.table-row-item');
            $row.remove();

            $('.table-row-item').each(function (index) {
                $(this).attr('data-row-index', index);
                $(this).find('.table-cell-input').each(function () {
                    const name = $(this).attr('name');
                    $(this).attr('name', name.replace(/\[\d+\]/, '[' + index + ']'));
                });
            });

            if ($('.table-row-item').length === 0) {
                $('#table-rows').html(
                    `<div class="alert alert-info" id="no-rows-alert">${escapeHtml(this.translations.noRows)}</div>`
                );
            }

            this.updatePreview();
        },

        updateAllRows: function () {
            const columnCount = $('.column-header-item').length;

            $('.table-row-item').each(function () {
                const $row = $(this);
                const currentCellCount = $row.find('.table-cell-item').length;
                const rowIndex = $row.data('row-index');

                if (currentCellCount < columnCount) {
                    for (let i = currentCellCount; i < columnCount; i++) {
                        const cellHtml = `
                            <div class="col table-cell-item" data-col-index="${i}">
                                <input type="text"
                                       class="form-control table-cell-input"
                                       name="table_rows[${rowIndex}][]"
                                       placeholder="...">
                            </div>
                        `;
                        $row.find('.col-auto').before(cellHtml);
                    }
                }
            });
        },

        updatePreview: function () {
            const headers = [];
            const rows = [];

            $('.column-header-input').each(function () {
                const $input = $(this);
                if ($input.is('select')) {
                    const $selected = $input.find('option:selected');
                    headers.push($selected.length ? $selected.text().trim() : '');
                } else {
                    headers.push($input.val() || '');
                }
            });

            $('.table-row-item').each(function () {
                const row = [];
                $(this).find('.table-cell-input').each(function () {
                    row.push($(this).val() || '');
                });
                rows.push(row);
            });

            if (headers.length === 0 && rows.length === 0) {
                $('#table-preview-wrapper').hide();
                return;
            }

            $('#table-preview-wrapper').show();

            let headersHtml = '';
            headers.forEach(function (header) {
                headersHtml += '<th>' + escapeHtml(header || '...') + '</th>';
            });
            $('#preview-headers').html(headersHtml);

            let bodyHtml = '';
            rows.forEach(function (row) {
                bodyHtml += '<tr>';
                row.forEach(function (cell) {
                    bodyHtml += '<td>' + escapeHtml(cell || '...') + '</td>';
                });
                bodyHtml += '</tr>';
            });
            $('#preview-body').html(bodyHtml);
        },
    };

    $(document).ready(function () {
        if ($('#size-guide-table-builder').length) {
            SizeGuideTableBuilder.init();
        }
    });
})(jQuery);
