<?php

return [
    'name' => 'Panduan Saiz Produk',
    'size_guide' => 'Panduan Saiz',
    'size_guides' => 'Panduan Saiz',
    'create' => 'Panduan saiz baharu',
    'edit' => 'Sunting panduan saiz',
    'settings_menu' => 'Tetapan',

    'form' => [
        'name' => 'Nama',
        'name_placeholder' => 'Masukkan nama panduan saiz',
        'description' => 'Penerangan',
        'description_placeholder' => 'Masukkan penerangan (pilihan)',
        'image' => 'Imej',
        'image_helper' => 'Muat naik diagram atau imej rujukan panduan saiz',
        'table_builder' => 'Pembina Jadual',
        'table_builder_helper' => 'Bina jadual panduan saiz dengan menambah lajur dan baris',
        'status' => 'Status',
        'order' => 'Turutan',
        'order_helper' => 'Nombor lebih kecil dipaparkan dahulu',
    ],

    'table' => [
        'id' => 'ID',
        'name' => 'Nama',
        'image' => 'Imej',
        'rows_count' => 'Baris',
        'status' => 'Status',
        'created_at' => 'Dicipta pada',
    ],

    'table_builder' => [
        'add_column' => 'Tambah lajur',
        'add_row' => 'Tambah baris',
        'column_header' => 'Header lajur',
        'select_header' => 'Pilih header lajur',
        'no_columns' => 'Belum ada lajur. Klik "Tambah lajur" untuk mulakan.',
        'no_rows' => 'Belum ada baris. Klik "Tambah baris" untuk tambah data.',
    ],

    'headers' => [
        'name' => 'Header panduan saiz',
        'create' => 'Header baharu',
        'edit' => 'Sunting header',
        'category' => 'Kategori',
        'categories' => [
            'general' => 'Umum',
            'size' => 'Saiz',
            'measurement' => 'Ukuran',
            'unit' => 'Unit',
        ],
    ],

    'settings' => [
        'title' => 'Tetapan Panduan Saiz Produk',
        'description' => 'Konfigurasikan cara panduan saiz dipaparkan pada halaman produk',

        'display' => 'Tetapan paparan',
        'display_mode' => 'Mod paparan',
        'display_mode_inline' => 'Inline',
        'display_mode_popup' => 'Popup (Modal)',
        'display_mode_conditional' => 'Bersyarat',
        'display_mode_help' => 'Pilih bagaimana panduan saiz ditunjukkan pada halaman produk',

        'row_threshold' => 'Ambang baris (untuk mod bersyarat)',
        'row_threshold_help' => 'Jadual dengan baris melebihi nilai ini akan dibuka dalam popup',

        'button_text' => 'Teks butang',
        'button_text_placeholder' => 'Panduan Saiz',
        'button_text_help' => 'Teks yang dipaparkan pada pautan/butang panduan saiz',

        'inline_expanded' => 'Dikembangkan secara lalai (mod inline)',
        'inline_expanded_help' => 'Tunjukkan panduan saiz yang dikembangkan secara lalai dalam mod inline. Jika dinyahpilih, ia akan dilipat dengan butang togol.',

        'modal_title' => 'Tajuk modal',
        'modal_title_placeholder' => 'Panduan Saiz',
        'modal_title_help' => 'Tajuk yang ditunjukkan dalam popup modal',

        'appearance' => 'Tetapan rupa',
        'show_image' => 'Tunjukkan imej',
        'show_image_help' => 'Paparkan imej panduan saiz di atas jadual',

        'link_color' => 'Warna pautan',
        'link_color_help' => 'Warna teks pautan panduan saiz (mod inline)',
        'header_bg_color' => 'Warna latar header',
        'header_bg_color_help' => 'Warna latar untuk header jadual',
        'header_text_color' => 'Warna teks header',
        'header_text_color_help' => 'Warna teks untuk header jadual',
        'row_bg_color' => 'Warna latar baris',
        'row_bg_color_help' => 'Warna latar untuk baris jadual',
        'row_alt_bg_color' => 'Warna latar baris alternatif',
        'row_alt_bg_color_help' => 'Warna latar untuk baris berselang (bergaris)',
        'row_text_color' => 'Warna teks baris',
        'row_text_color_help' => 'Warna teks untuk baris jadual',
        'border_color' => 'Warna sempadan',
        'border_color_help' => 'Warna untuk sempadan jadual',
        'table_styles' => 'Gaya jadual',
        'table_styles_help' => 'Pilih kelas jadual Bootstrap yang akan digunakan pada jadual panduan saiz.',
        'table_style_bordered' => 'Berbatas (table-bordered)',
        'table_style_striped' => 'Baris berjalur (table-striped)',
        'table_style_hover' => 'Kesan hover (table-hover)',
        'table_style_small' => 'Jadual padat (table-sm)',
        'font_size' => 'Saiz fon (px)',
        'font_size_help' => 'Saiz fon teks jadual dalam piksel',
        'border_radius' => 'Jejari sudut (px)',
        'border_radius_help' => 'Jejari sudut jadual dalam piksel',
    ],

    'metabox' => [
        'title' => 'Panduan Saiz Produk',
        'select_size_guide' => 'Pilih panduan saiz',
        'select_size_guide_placeholder' => '-- Pilih panduan saiz --',
        'no_size_guide' => 'Tiada panduan saiz',
        'help_text' => 'Tetapkan panduan saiz kepada :type ini. Ini akan menggantikan panduan yang diwarisi daripada kategori atau jenama.',
        'help_text_category' => 'Semua produk dalam kategori ini akan mewarisi panduan ini (melainkan diganti di peringkat produk).',
        'help_text_brand' => 'Semua produk daripada jenama ini akan mewarisi panduan ini (melainkan diganti di peringkat produk atau kategori).',
    ],

    'frontend' => [
        'view_size_guide' => 'Lihat panduan saiz',
        'close' => 'Tutup',
    ],

    'messages' => [
        'created' => 'Panduan saiz berjaya dicipta',
        'updated' => 'Panduan saiz berjaya dikemas kini',
        'deleted' => 'Panduan saiz berjaya dipadam',
        'settings_saved' => 'Tetapan berjaya disimpan',
    ],
];
