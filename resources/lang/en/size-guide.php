<?php

return [
    'name' => 'Product Size Guides',
    'size_guide' => 'Size Guide',
    'size_guides' => 'Size Guides',
    'create' => 'New Size Guide',
    'edit' => 'Edit Size Guide',
    'settings_menu' => 'Settings',

    'form' => [
        'name' => 'Name',
        'name_placeholder' => 'Enter size guide name',
        'description' => 'Description',
        'description_placeholder' => 'Enter description (optional)',
        'image' => 'Image',
        'image_helper' => 'Upload a size guide diagram or reference image',
        'table_builder' => 'Table Builder',
        'table_builder_helper' => 'Create your size guide table by adding columns and rows',
        'status' => 'Status',
        'order' => 'Order',
        'order_helper' => 'Lower numbers appear first',
    ],

    'table' => [
        'id' => 'ID',
        'name' => 'Name',
        'image' => 'Image',
        'rows_count' => 'Rows',
        'status' => 'Status',
        'created_at' => 'Created At',
    ],

    'table_builder' => [
        'add_column' => 'Add Column',
        'add_row' => 'Add Row',
        'column_header' => 'Column Header',
        'select_header' => 'Select column header',
        'no_columns' => 'No columns yet. Click "Add Column" to start.',
        'no_rows' => 'No rows yet. Click "Add Row" to add data.',
    ],

    'headers' => [
        'name' => 'Size Guide Headers',
        'create' => 'New Header',
        'edit' => 'Edit Header',
        'category' => 'Category',
        'categories' => [
            'general' => 'General',
            'size' => 'Size',
            'measurement' => 'Measurement',
            'unit' => 'Unit',
        ],
    ],

    'settings' => [
        'title' => 'Product Size Guide Settings',
        'description' => 'Configure how size guides are displayed on product pages',

        'display' => 'Display Settings',
        'display_mode' => 'Display Mode',
        'display_mode_inline' => 'Inline',
        'display_mode_popup' => 'Popup (Modal)',
        'display_mode_conditional' => 'Conditional',
        'display_mode_help' => 'Choose how the size guide appears on product pages',

        'row_threshold' => 'Row Threshold (for conditional mode)',
        'row_threshold_help' => 'Tables with more than this many rows will open in a popup',

        'button_text' => 'Button Text',
        'button_text_placeholder' => 'Size Guide',
        'button_text_help' => 'Text displayed on the size guide link/button',

        'inline_expanded' => 'Expanded by Default (Inline Mode)',
        'inline_expanded_help' => 'Show size guide expanded by default in inline mode. If unchecked, it will be collapsed with a toggle button.',

        'modal_title' => 'Modal Title',
        'modal_title_placeholder' => 'Size Guide',
        'modal_title_help' => 'Title shown in the popup modal',

        'appearance' => 'Appearance Settings',
        'show_image' => 'Show Image',
        'show_image_help' => 'Display the size guide image above the table',

        'link_color' => 'Link Color',
        'link_color_help' => 'Color for the size guide link text (inline mode)',
        'header_bg_color' => 'Header Background Color',
        'header_bg_color_help' => 'Background color for table header',
        'header_text_color' => 'Header Text Color',
        'header_text_color_help' => 'Text color for table header',
        'row_bg_color' => 'Row Background Color',
        'row_bg_color_help' => 'Background color for table rows',
        'row_alt_bg_color' => 'Alternate Row Background Color',
        'row_alt_bg_color_help' => 'Background color for alternate (striped) rows',
        'row_text_color' => 'Row Text Color',
        'row_text_color_help' => 'Text color for table rows',
        'border_color' => 'Border Color',
        'border_color_help' => 'Color for table borders',
        'table_styles' => 'Table Styles',
        'table_styles_help' => 'Choose additional Bootstrap table classes to style the size guide.',
        'table_style_bordered' => 'Bordered rows (table-bordered)',
        'table_style_striped' => 'Striped rows (table-striped)',
        'table_style_hover' => 'Hover effect (table-hover)',
        'table_style_small' => 'Compact table (table-sm)',
        'font_size' => 'Font Size (px)',
        'font_size_help' => 'Font size for table text in pixels',
        'border_radius' => 'Border Radius (px)',
        'border_radius_help' => 'Border radius for table corners in pixels',
    ],

    'metabox' => [
        'title' => 'Product Size Guide',
        'select_size_guide' => 'Select Size Guide',
        'select_size_guide_placeholder' => '-- Select a size guide --',
        'no_size_guide' => 'No size guide',
        'help_text' => 'Assign a size guide to this :type. This will override any size guide inherited from category or brand.',
        'help_text_category' => 'All products in this category will inherit this size guide (unless overridden at product level).',
        'help_text_brand' => 'All products from this brand will inherit this size guide (unless overridden at product or category level).',
    ],

    'frontend' => [
        'view_size_guide' => 'View Size Guide',
        'close' => 'Close',
    ],

    'messages' => [
        'created' => 'Size guide created successfully',
        'updated' => 'Size guide updated successfully',
        'deleted' => 'Size guide deleted successfully',
        'settings_saved' => 'Settings saved successfully',
    ],
];
