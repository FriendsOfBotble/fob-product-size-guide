/**
 * Size Guide Table Builder - Admin Panel
 */

(function($) {
    'use strict';

    var SizeGuideTableBuilder = {
        init: function() {
            this.bindEvents();
        },

        bindEvents: function() {
            $(document).on('click', '#add-column-btn', this.addColumn.bind(this));
            $(document).on('click', '.remove-column-btn', this.removeColumn.bind(this));
            $(document).on('click', '#add-row-btn', this.addRow.bind(this));
            $(document).on('click', '.remove-row-btn', this.removeRow.bind(this));
            $(document).on('input', '.column-header-input', this.updatePreview.bind(this));
            $(document).on('input', '.table-cell-input', this.updatePreview.bind(this));
        },

        addColumn: function(e) {
            e.preventDefault();
            console.log('Add column clicked');

            const $headersContainer = $('#table-headers');
            const $alert = $headersContainer.find('.alert');

            if ($alert.length) {
                $alert.remove();
            }

            const columnCount = $('.column-header-item').length;
            const newIndex = columnCount;

            // Get header options from the first existing select (if any) or build from data
            let optionsHtml = '';
            const $existingSelect = $('.column-header-input').first();

            if ($existingSelect.length && $existingSelect.is('select')) {
                // Clone options from existing select
                $existingSelect.find('option').each(function() {
                    const value = $(this).val();
                    const text = $(this).text();
                    optionsHtml += `<option value="${value}">${text}</option>`;
                });
            }

            const columnHtml = `
                <div class="col-md-3 col-sm-6 column-header-item" data-index="${newIndex}">
                    <div class="input-group">
                        <select class="form-control column-header-input" name="table_headers[]">
                            ${optionsHtml}
                        </select>
                        <button type="button" class="btn btn-danger btn-icon remove-column-btn" data-index="${newIndex}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 7l16 0"></path><path d="M10 11l0 6"></path><path d="M14 11l0 6"></path><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path></svg>
                        </button>
                    </div>
                </div>
            `;

            $headersContainer.append(columnHtml);
            this.updateAllRows();
            this.updatePreview();
        },

        removeColumn: function(e) {
            e.preventDefault();

            const $btn = $(e.currentTarget);
            const columnIndex = parseInt($btn.data('index'));

            // Remove column header
            $btn.closest('.column-header-item').remove();

            // Re-index remaining columns
            $('.column-header-item').each(function(index) {
                $(this).attr('data-index', index);
                $(this).find('.remove-column-btn').attr('data-index', index);
            });

            // Remove corresponding cells from all rows
            $('.table-row-item').each(function() {
                $(this).find('.table-cell-item').eq(columnIndex).remove();
            });

            // Re-index cells
            $('.table-row-item').each(function() {
                $(this).find('.table-cell-item').each(function(index) {
                    $(this).attr('data-col-index', index);
                });
            });

            // Show alert if no columns left
            if ($('.column-header-item').length === 0) {
                $('#table-headers').html('<div class="col-12"><div class="alert alert-info mb-0">No columns yet. Click "Add Column" to start.</div></div>');
            }

            this.updatePreview();
        },

        addRow: function(e) {
            e.preventDefault();
            console.log('Add row clicked');

            const columnCount = $('.column-header-item').length;

            if (columnCount === 0) {
                alert('Please add at least one column first.');
                return;
            }

            const $rowsContainer = $('#table-rows');
            const $alert = $rowsContainer.find('#no-rows-alert');

            if ($alert.length) {
                $alert.remove();
            }

            const rowCount = $('.table-row-item').length;
            const newRowIndex = rowCount;

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
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 7l16 0"></path><path d="M10 11l0 6"></path><path d="M14 11l0 6"></path><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path></svg>
                        </button>
                    </div>
                </div>
            `;

            $rowsContainer.append(rowHtml);
            this.updatePreview();
        },

        removeRow: function(e) {
            e.preventDefault();

            const $row = $(e.currentTarget).closest('.table-row-item');
            $row.remove();

            // Re-index rows
            $('.table-row-item').each(function(index) {
                $(this).attr('data-row-index', index);
                $(this).find('.table-cell-input').each(function() {
                    const name = $(this).attr('name');
                    $(this).attr('name', name.replace(/\[\d+\]/, '[' + index + ']'));
                });
            });

            // Show alert if no rows left
            if ($('.table-row-item').length === 0) {
                $('#table-rows').html('<div class="alert alert-info" id="no-rows-alert">No rows yet. Click "Add Row" to add data.</div>');
            }

            this.updatePreview();
        },

        updateAllRows: function() {
            const columnCount = $('.column-header-item').length;

            $('.table-row-item').each(function() {
                const $row = $(this);
                const currentCellCount = $row.find('.table-cell-item').length;
                const rowIndex = $row.data('row-index');

                // Add missing cells
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

        updatePreview: function() {
            const headers = [];
            const rows = [];

            // Get headers - use selected option text for display
            $('.column-header-input').each(function() {
                if ($(this).is('select')) {
                    const selectedText = $(this).find('option:selected').text();
                    headers.push(selectedText || '');
                } else {
                    headers.push($(this).val() || '');
                }
            });

            // Get rows
            $('.table-row-item').each(function() {
                const row = [];
                $(this).find('.table-cell-input').each(function() {
                    row.push($(this).val() || '');
                });
                rows.push(row);
            });

            // Update preview
            if (headers.length === 0 && rows.length === 0) {
                $('#table-preview-wrapper').hide();
                return;
            }

            $('#table-preview-wrapper').show();

            // Update preview headers
            let headersHtml = '';
            headers.forEach(function(header) {
                headersHtml += '<th>' + (header || '...') + '</th>';
            });
            $('#preview-headers').html(headersHtml);

            // Update preview body
            let bodyHtml = '';
            rows.forEach(function(row) {
                bodyHtml += '<tr>';
                row.forEach(function(cell) {
                    bodyHtml += '<td>' + (cell || '...') + '</td>';
                });
                bodyHtml += '</tr>';
            });
            $('#preview-body').html(bodyHtml);
        }
    };

    $(document).ready(function() {
        console.log('Size Guide JS loaded');
        console.log('Element found:', $('#size-guide-table-builder').length);
        if ($('#size-guide-table-builder').length) {
            console.log('Initializing SizeGuideTableBuilder');
            SizeGuideTableBuilder.init();
        }
    });

})(jQuery);
