<?php

return [
    'name' => 'Panduan Ukuran Produk',
    'size_guide' => 'Panduan Ukuran',
    'size_guides' => 'Panduan Ukuran',
    'create' => 'Panduan ukuran baru',
    'edit' => 'Edit panduan ukuran',
    'settings_menu' => 'Pengaturan',

    'form' => [
        'name' => 'Nama',
        'name_placeholder' => 'Masukkan nama panduan ukuran',
        'description' => 'Deskripsi',
        'description_placeholder' => 'Masukkan deskripsi (opsional)',
        'image' => 'Gambar',
        'image_helper' => 'Unggah diagram atau gambar referensi panduan ukuran',
        'table_builder' => 'Pembuat Tabel',
        'table_builder_helper' => 'Buat tabel panduan ukuran dengan menambahkan kolom dan baris',
        'status' => 'Status',
        'order' => 'Urutan',
        'order_helper' => 'Nomor yang lebih kecil tampil lebih dahulu',
    ],

    'table' => [
        'id' => 'ID',
        'name' => 'Nama',
        'image' => 'Gambar',
        'rows_count' => 'Baris',
        'status' => 'Status',
        'created_at' => 'Dibuat pada',
    ],

    'table_builder' => [
        'add_column' => 'Tambah kolom',
        'add_row' => 'Tambah baris',
        'column_header' => 'Judul kolom',
        'select_header' => 'Pilih judul kolom',
        'no_columns' => 'Belum ada kolom. Klik "Tambah kolom" untuk memulai.',
        'no_rows' => 'Belum ada baris. Klik "Tambah baris" untuk menambahkan data.',
    ],

    'headers' => [
        'name' => 'Header panduan ukuran',
        'create' => 'Header baru',
        'edit' => 'Edit header',
        'category' => 'Kategori',
        'categories' => [
            'general' => 'Umum',
            'size' => 'Ukuran',
            'measurement' => 'Pengukuran',
            'unit' => 'Satuan',
        ],
    ],

    'settings' => [
        'title' => 'Pengaturan Panduan Ukuran Produk',
        'description' => 'Atur bagaimana panduan ukuran ditampilkan pada halaman produk',

        'display' => 'Pengaturan tampilan',
        'display_mode' => 'Mode tampilan',
        'display_mode_inline' => 'Inline',
        'display_mode_popup' => 'Popup (Modal)',
        'display_mode_conditional' => 'Kondisional',
        'display_mode_help' => 'Pilih bagaimana panduan ukuran muncul di halaman produk',

        'row_threshold' => 'Batas baris (untuk mode kondisional)',
        'row_threshold_help' => 'Tabel dengan jumlah baris melebihi nilai ini akan dibuka dalam popup',

        'button_text' => 'Teks tombol',
        'button_text_placeholder' => 'Panduan Ukuran',
        'button_text_help' => 'Teks yang ditampilkan pada tautan/tombol panduan ukuran',

        'inline_expanded' => 'Diperluas secara default (mode inline)',
        'inline_expanded_help' => 'Tampilkan panduan ukuran dalam mode inline secara default. Jika tidak dicentang, panduan akan dilipat dengan tombol toggle.',

        'modal_title' => 'Judul modal',
        'modal_title_placeholder' => 'Panduan Ukuran',
        'modal_title_help' => 'Judul yang ditampilkan pada popup modal',

        'appearance' => 'Pengaturan tampilan',
        'show_image' => 'Tampilkan gambar',
        'show_image_help' => 'Tampilkan gambar panduan ukuran di atas tabel',

        'link_color' => 'Warna tautan',
        'link_color_help' => 'Warna teks tautan panduan ukuran (mode inline)',
        'header_bg_color' => 'Warna latar header',
        'header_bg_color_help' => 'Warna latar untuk header tabel',
        'header_text_color' => 'Warna teks header',
        'header_text_color_help' => 'Warna teks untuk header tabel',
        'row_bg_color' => 'Warna latar baris',
        'row_bg_color_help' => 'Warna latar untuk baris tabel',
        'row_alt_bg_color' => 'Warna latar baris alternatif',
        'row_alt_bg_color_help' => 'Warna latar untuk baris selang-seling (bergaris)',
        'row_text_color' => 'Warna teks baris',
        'row_text_color_help' => 'Warna teks untuk baris tabel',
        'border_color' => 'Warna batas',
        'border_color_help' => 'Warna untuk batas tabel',
        'table_styles' => 'Gaya tabel',
        'table_styles_help' => 'Pilih kelas tabel Bootstrap yang akan diterapkan pada panduan ukuran.',
        'table_style_bordered' => 'Dengan garis tepi (table-bordered)',
        'table_style_striped' => 'Baris bergaris (table-striped)',
        'table_style_hover' => 'Efek hover (table-hover)',
        'table_style_small' => 'Tabel ringkas (table-sm)',
        'font_size' => 'Ukuran font (px)',
        'font_size_help' => 'Ukuran font teks tabel dalam piksel',
        'border_radius' => 'Radius sudut (px)',
        'border_radius_help' => 'Radius sudut tabel dalam piksel',
    ],

    'metabox' => [
        'title' => 'Panduan Ukuran Produk',
        'select_size_guide' => 'Pilih panduan ukuran',
        'select_size_guide_placeholder' => '-- Pilih panduan ukuran --',
        'no_size_guide' => 'Tidak ada panduan ukuran',
        'help_text' => 'Tetapkan panduan ukuran ke :type ini. Ini akan menimpa panduan yang diwarisi dari kategori atau merek.',
        'help_text_category' => 'Semua produk dalam kategori ini akan mewarisi panduan ini (kecuali ditimpa di level produk).',
        'help_text_brand' => 'Semua produk dari merek ini akan mewarisi panduan ini (kecuali ditimpa di level produk atau kategori).',
    ],

    'frontend' => [
        'view_size_guide' => 'Lihat panduan ukuran',
        'close' => 'Tutup',
    ],

    'messages' => [
        'created' => 'Panduan ukuran berhasil dibuat',
        'updated' => 'Panduan ukuran berhasil diperbarui',
        'deleted' => 'Panduan ukuran berhasil dihapus',
        'settings_saved' => 'Pengaturan berhasil disimpan',
    ],
];
