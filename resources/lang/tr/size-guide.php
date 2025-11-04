<?php

return [
    'name' => 'Ürün Beden Rehberleri',
    'size_guide' => 'Beden Rehberi',
    'size_guides' => 'Beden Rehberleri',
    'create' => 'Yeni beden rehberi',
    'edit' => 'Beden rehberini düzenle',
    'settings_menu' => 'Ayarlar',

    'form' => [
        'name' => 'Ad',
        'name_placeholder' => 'Beden rehberi adını girin',
        'description' => 'Açıklama',
        'description_placeholder' => 'Açıklama girin (isteğe bağlı)',
        'image' => 'Görsel',
        'image_helper' => 'Beden rehberi diyagramı veya referans görseli yükleyin',
        'table_builder' => 'Tablo oluşturucu',
        'table_builder_helper' => 'Sütun ve satır ekleyerek beden rehberi tablosu oluşturun',
        'status' => 'Durum',
        'order' => 'Sıra',
        'order_helper' => 'Küçük numaralar önce görüntülenir',
    ],

    'table' => [
        'id' => 'ID',
        'name' => 'Ad',
        'image' => 'Görsel',
        'rows_count' => 'Satır',
        'status' => 'Durum',
        'created_at' => 'Oluşturulma tarihi',
    ],

    'table_builder' => [
        'add_column' => 'Sütun ekle',
        'add_row' => 'Satır ekle',
        'column_header' => 'Sütun başlığı',
        'select_header' => 'Sütun başlığı seçin',
        'no_columns' => 'Henüz sütun yok. Başlamak için "Sütun ekle"ye tıklayın.',
        'no_rows' => 'Henüz satır yok. Veri eklemek için "Satır ekle"ye tıklayın.',
    ],

    'headers' => [
        'name' => 'Beden rehberi başlıkları',
        'create' => 'Yeni başlık',
        'edit' => 'Başlığı düzenle',
        'category' => 'Kategori',
        'categories' => [
            'general' => 'Genel',
            'size' => 'Beden',
            'measurement' => 'Ölçü',
            'unit' => 'Birim',
        ],
    ],

    'settings' => [
        'title' => 'Ürün beden rehberi ayarları',
        'description' => 'Beden rehberlerinin ürün sayfalarında nasıl gösterileceğini yapılandırın',

        'display' => 'Görüntüleme ayarları',
        'display_mode' => 'Görüntüleme modu',
        'display_mode_inline' => 'Satır içi',
        'display_mode_popup' => 'Açılır pencere (modal)',
        'display_mode_conditional' => 'Koşullu',
        'display_mode_help' => 'Beden rehberinin ürün sayfalarında nasıl görüneceğini seçin',

        'row_threshold' => 'Satır eşiği (koşullu mod)',
        'row_threshold_help' => 'Bu değerden fazla satırı olan tablolar açılır pencerede açılır',

        'button_text' => 'Buton metni',
        'button_text_placeholder' => 'Beden Rehberi',
        'button_text_help' => 'Beden rehberi bağlantısı/butonunda görüntülenen metin',

        'inline_expanded' => 'Varsayılan olarak genişletilmiş (satır içi mod)',
        'inline_expanded_help' => 'Satır içi modda beden rehberini varsayılan olarak genişletilmiş gösterin. Seçilmezse, bir geçiş butonuyla daraltılmış olur.',

        'modal_title' => 'Modal başlığı',
        'modal_title_placeholder' => 'Beden Rehberi',
        'modal_title_help' => 'Açılır modalda gösterilen başlık',

        'appearance' => 'Görünüm ayarları',
        'show_image' => 'Görsel göster',
        'show_image_help' => 'Tablonun üstünde beden rehberi görselini gösterin',

        'link_color' => 'Bağlantı rengi',
        'link_color_help' => 'Beden rehberi bağlantısının metin rengi (satır içi mod)',
        'header_bg_color' => 'Başlık arka plan rengi',
        'header_bg_color_help' => 'Tablo başlığı için arka plan rengi',
        'header_text_color' => 'Başlık metin rengi',
        'header_text_color_help' => 'Tablo başlığı metin rengi',
        'row_bg_color' => 'Satır arka plan rengi',
        'row_bg_color_help' => 'Tablo satırlarının arka plan rengi',
        'row_alt_bg_color' => 'Alternatif satır arka plan rengi',
        'row_alt_bg_color_help' => 'Sıralı (çizgili) satırlar için arka plan rengi',
        'row_text_color' => 'Satır metin rengi',
        'row_text_color_help' => 'Tablo satırlarının metin rengi',
        'border_color' => 'Kenarlık rengi',
        'border_color_help' => 'Tablo kenarlıklarının rengi',
        'table_styles' => 'Tablo stilleri',
        'table_styles_help' => 'Beden rehberi tablosuna uygulanacak Bootstrap tablo sınıflarını seçin.',
        'table_style_bordered' => 'Kenarlıklı (table-bordered)',
        'table_style_striped' => 'Şeritli satırlar (table-striped)',
        'table_style_hover' => 'Üzerine gelindiğinde efekt (table-hover)',
        'table_style_small' => 'Kompakt tablo (table-sm)',
        'font_size' => 'Yazı tipi boyutu (px)',
        'font_size_help' => 'Tablo metninin yazı tipi boyutu piksel cinsinden',
        'border_radius' => 'Kenarlık yarıçapı (px)',
        'border_radius_help' => 'Tablo köşelerinin yarıçapı piksel cinsinden',
    ],

    'metabox' => [
        'title' => 'Ürün beden rehberi',
        'select_size_guide' => 'Beden rehberi seçin',
        'select_size_guide_placeholder' => '-- Bir beden rehberi seçin --',
        'no_size_guide' => 'Beden rehberi yok',
        'help_text' => 'Bu :type için bir beden rehberi atayın. Bu, kategoriden veya markadan devralınan rehberin üzerine yazar.',
        'help_text_category' => 'Bu kategorideki tüm ürünler bu rehberi devralır (ürün düzeyinde üzerine yazılmadıkça).',
        'help_text_brand' => 'Bu markadaki tüm ürünler bu rehberi devralır (ürün veya kategori düzeyinde üzerine yazılmadıkça).',
    ],

    'frontend' => [
        'view_size_guide' => 'Beden rehberini görüntüle',
        'close' => 'Kapat',
    ],

    'messages' => [
        'created' => 'Beden rehberi başarıyla oluşturuldu',
        'updated' => 'Beden rehberi başarıyla güncellendi',
        'deleted' => 'Beden rehberi başarıyla silindi',
        'settings_saved' => 'Ayarlar başarıyla kaydedildi',
    ],
];
