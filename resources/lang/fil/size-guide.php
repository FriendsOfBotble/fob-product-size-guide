<?php

return [
    'name' => 'Mga Size Guide ng Produkto',
    'size_guide' => 'Size Guide',
    'size_guides' => 'Mga Size Guide',
    'create' => 'Bagong Size Guide',
    'edit' => 'I-edit ang Size Guide',
    'settings_menu' => 'Mga Setting',

    'form' => [
        'name' => 'Pangalan',
        'name_placeholder' => 'Ilagay ang pangalan ng size guide',
        'description' => 'Paglalarawan',
        'description_placeholder' => 'Ilagay ang paglalarawan (opsyonal)',
        'image' => 'Larawan',
        'image_helper' => 'Mag-upload ng diagram o larawan ng size guide',
        'table_builder' => 'Tagabuo ng Talahanayan',
        'table_builder_helper' => 'Gumawa ng size guide table sa pamamagitan ng pagdaragdag ng mga kolum at hanay',
        'status' => 'Status',
        'order' => 'Ayos',
        'order_helper' => 'Mas mababang numero ang unang lumalabas',
    ],

    'table' => [
        'id' => 'ID',
        'name' => 'Pangalan',
        'image' => 'Larawan',
        'rows_count' => 'Mga Hanay',
        'status' => 'Status',
        'created_at' => 'Nilikha noong',
    ],

    'table_builder' => [
        'add_column' => 'Magdagdag ng Kolum',
        'add_row' => 'Magdagdag ng Hanay',
        'column_header' => 'Pamagat ng Kolum',
        'select_header' => 'Piliin ang pamagat ng kolum',
        'no_columns' => 'Wala pang mga kolum. I-click ang "Magdagdag ng Kolum" upang magsimula.',
        'no_rows' => 'Wala pang mga hanay. I-click ang "Magdagdag ng Hanay" upang magdagdag ng data.',
    ],

    'headers' => [
        'name' => 'Mga Header ng Size Guide',
        'create' => 'Bagong Header',
        'edit' => 'I-edit ang Header',
        'category' => 'Kategorya',
        'categories' => [
            'general' => 'Pangkalahatan',
            'size' => 'Sukat',
            'measurement' => 'Pagsukat',
            'unit' => 'Yunit',
        ],
    ],

    'settings' => [
        'title' => 'Mga Setting ng Product Size Guide',
        'description' => 'I-configure kung paano ipinapakita ang mga size guide sa mga pahina ng produkto',

        'display' => 'Mga Setting ng Pag-display',
        'display_mode' => 'Mode ng Pag-display',
        'display_mode_inline' => 'Inline',
        'display_mode_popup' => 'Popup (Modal)',
        'display_mode_conditional' => 'Conditional',
        'display_mode_help' => 'Piliin kung paano lalabas ang size guide sa mga pahina ng produkto',

        'row_threshold' => 'Row Threshold (para sa conditional mode)',
        'row_threshold_help' => 'Ang mga talahanayan na may mas maraming hanay kaysa dito ay magbubukas sa popup',

        'button_text' => 'Teksto ng Button',
        'button_text_placeholder' => 'Size Guide',
        'button_text_help' => 'Tekstong makikita sa link/button ng size guide',

        'inline_expanded' => 'Pinalawak bilang Default (Inline Mode)',
        'inline_expanded_help' => 'Ipakita ang size guide na naka-expand bilang default sa inline mode. Kung hindi naka-check, ito ay nakatiklop na may toggle button.',

        'modal_title' => 'Pamagat ng Modal',
        'modal_title_placeholder' => 'Size Guide',
        'modal_title_help' => 'Pamagat na ipinapakita sa popup modal',

        'appearance' => 'Mga Setting ng Hitsura',
        'show_image' => 'Ipakita ang Larawan',
        'show_image_help' => 'Ipakita ang larawan ng size guide sa itaas ng talahanayan',

        'link_color' => 'Kulay ng Link',
        'link_color_help' => 'Kulay ng teksto ng link ng size guide (inline mode)',
        'header_bg_color' => 'Kulayan ng Background ng Header',
        'header_bg_color_help' => 'Background na kulay para sa header ng talahanayan',
        'header_text_color' => 'Kulay ng Teksto ng Header',
        'header_text_color_help' => 'Kulay ng teksto para sa header ng talahanayan',
        'row_bg_color' => 'Kulayan ng Background ng Hanay',
        'row_bg_color_help' => 'Background na kulay para sa mga hanay ng talahanayan',
        'row_alt_bg_color' => 'Alternatibong Kulay ng Background ng Hanay',
        'row_alt_bg_color_help' => 'Kulay ng background para sa salitang mga hanay (striped)',
        'row_text_color' => 'Kulay ng Teksto ng Hanay',
        'row_text_color_help' => 'Kulay ng teksto para sa mga hanay ng talahanayan',
        'border_color' => 'Kulay ng Gilid',
        'border_color_help' => 'Kulay para sa mga gilid ng talahanayan',
        'table_styles' => 'Mga estilo ng talahanayan',
        'table_styles_help' => 'Piliin ang mga Bootstrap table class na gagamitin sa talahanayan ng size guide.',
        'table_style_bordered' => 'May border (table-bordered)',
        'table_style_striped' => 'May guhit na mga hilera (table-striped)',
        'table_style_hover' => 'Hover effect (table-hover)',
        'table_style_small' => 'Compact na talahanayan (table-sm)',
        'font_size' => 'Laki ng Font (px)',
        'font_size_help' => 'Laki ng font ng teksto sa talahanayan sa pixels',
        'border_radius' => 'Border Radius (px)',
        'border_radius_help' => 'Border radius ng mga kanto ng talahanayan sa pixels',
    ],

    'metabox' => [
        'title' => 'Product Size Guide',
        'select_size_guide' => 'Piliin ang Size Guide',
        'select_size_guide_placeholder' => '-- Piliin ang isang size guide --',
        'no_size_guide' => 'Walang size guide',
        'help_text' => 'Italaga ang isang size guide sa :type na ito. Papalitan nito ang anumang guide na minana mula sa kategorya o brand.',
        'help_text_category' => 'Ang lahat ng produkto sa kategoryang ito ay mamanahin ang size guide na ito (maliban kung papalitan sa antas ng produkto).',
        'help_text_brand' => 'Ang lahat ng produkto mula sa brand na ito ay mamanahin ang size guide na ito (maliban kung papalitan sa antas ng produkto o kategorya).',
    ],

    'frontend' => [
        'view_size_guide' => 'Tingnan ang Size Guide',
        'close' => 'Isara',
    ],

    'messages' => [
        'created' => 'Matagumpay na nalikha ang size guide',
        'updated' => 'Matagumpay na na-update ang size guide',
        'deleted' => 'Matagumpay na nabura ang size guide',
        'settings_saved' => 'Matagumpay na na-save ang mga setting',
    ],
];
