<?php

return [
    'name' => 'Toote suurusjuhendid',
    'size_guide' => 'Suurusjuhend',
    'size_guides' => 'Suurusjuhendid',
    'create' => 'Uus suurusjuhend',
    'edit' => 'Muuda suurusjuhendit',
    'settings_menu' => 'Seaded',

    'form' => [
        'name' => 'Nimi',
        'name_placeholder' => 'Sisesta suurusjuhendi nimi',
        'description' => 'Kirjeldus',
        'description_placeholder' => 'Sisesta kirjeldus (valikuline)',
        'image' => 'Pilt',
        'image_helper' => 'Laadi üles suurusjuhendi diagramm või näidispilt',
        'table_builder' => 'Tabeliehitaja',
        'table_builder_helper' => 'Loo oma suurusjuhendi tabel, lisades veerge ja ridu',
        'status' => 'Olek',
        'order' => 'Järjekord',
        'order_helper' => 'Väiksemad numbrid kuvatakse esimesena',
    ],

    'table' => [
        'id' => 'ID',
        'name' => 'Nimi',
        'image' => 'Pilt',
        'rows_count' => 'Read',
        'status' => 'Olek',
        'created_at' => 'Loodud',
    ],

    'table_builder' => [
        'add_column' => 'Lisa veerg',
        'add_row' => 'Lisa rida',
        'column_header' => 'Veeru pealkiri',
        'select_header' => 'Vali veeru pealkiri',
        'no_columns' => 'Veerge pole veel lisatud. Alustamiseks klõpsa "Lisa veerg".',
        'no_rows' => 'Ridu pole veel lisatud. Andmete lisamiseks klõpsa "Lisa rida".',
    ],

    'headers' => [
        'name' => 'Suurusjuhendi päised',
        'create' => 'Uus päis',
        'edit' => 'Muuda päist',
        'category' => 'Kategooria',
        'categories' => [
            'general' => 'Üldine',
            'size' => 'Suurus',
            'measurement' => 'Mõõt',
            'unit' => 'Ühik',
        ],
    ],

    'settings' => [
        'title' => 'Toote suurusjuhendi seaded',
        'description' => 'Seadista, kuidas suurusjuhendid tootelehtedel kuvatakse',

        'display' => 'Kuvatavad seaded',
        'display_mode' => 'Kuvamisrežiim',
        'display_mode_inline' => 'Reas',
        'display_mode_popup' => 'Hüpik (modal)',
        'display_mode_conditional' => 'Tingimuslik',
        'display_mode_help' => 'Vali, kuidas suurusjuhend tootelehel kuvatakse',

        'row_threshold' => 'Ridade piir (tingimusliku režiimi jaoks)',
        'row_threshold_help' => 'Tabelid, millel on rohkem ridu kui see arv, avatakse hüpikaknas',

        'button_text' => 'Nupu tekst',
        'button_text_placeholder' => 'Suurusjuhend',
        'button_text_help' => 'Tekst, mida kuvatakse suurusjuhendi lingil/nupil',

        'inline_expanded' => 'Vaikimisi laiendatud (rearežiim)',
        'inline_expanded_help' => 'Näita suurusjuhendit vaikimisi laiendatuna rearežiimis. Kui pole märgitud, kuvatakse see kokkupakituna koos lülitusnupuga.',

        'modal_title' => 'Modaalakna pealkiri',
        'modal_title_placeholder' => 'Suurusjuhend',
        'modal_title_help' => 'Pealkiri, mida kuvatakse hüpikmoodalis',

        'appearance' => 'Välimuse seaded',
        'show_image' => 'Näita pilti',
        'show_image_help' => 'Kuva suurusjuhendi pilt tabeli kohal',

        'link_color' => 'Lingi värv',
        'link_color_help' => 'Suurusjuhendi lingi teksti värv (rearežiim)',
        'header_bg_color' => 'Päise taustavärv',
        'header_bg_color_help' => 'Tabeli päise taustavärv',
        'header_text_color' => 'Päise tekstivärv',
        'header_text_color_help' => 'Tabeli päise tekstivärv',
        'row_bg_color' => 'Ridade taustavärv',
        'row_bg_color_help' => 'Tabeli ridade taustavärv',
        'row_alt_bg_color' => 'Alternatiivne ridade taustavärv',
        'row_alt_bg_color_help' => 'Taustavärv vahelduvatele (triibulistele) ridadele',
        'row_text_color' => 'Ridade tekstivärv',
        'row_text_color_help' => 'Tabeli ridade tekstivärv',
        'border_color' => 'Äärise värv',
        'border_color_help' => 'Tabeli ääriste värv',
        'table_styles' => 'Tabeli stiilid',
        'table_styles_help' => 'Vali Bootstrapi tabeliklassid suurusjuhendi tabelile.',
        'table_style_bordered' => 'Äärisega (table-bordered)',
        'table_style_striped' => 'Triibulised read (table-striped)',
        'table_style_hover' => 'Hover-efekt (table-hover)',
        'table_style_small' => 'Kompaktne tabel (table-sm)',
        'font_size' => 'Fondi suurus (px)',
        'font_size_help' => 'Tabeli teksti fondi suurus pikslites',
        'border_radius' => 'Nurga raadius (px)',
        'border_radius_help' => 'Tabeli nurkade raadius pikslites',
    ],

    'metabox' => [
        'title' => 'Toote suurusjuhend',
        'select_size_guide' => 'Vali suurusjuhend',
        'select_size_guide_placeholder' => '-- Vali suurusjuhend --',
        'no_size_guide' => 'Suurusjuhend puudub',
        'help_text' => 'Määra sellele :type-le suurusjuhend. See kirjutab üle kategooriast või brändist päritud juhendi.',
        'help_text_category' => 'Kõik selles kategoorias olevad tooted pärivad selle suurusjuhendi (kui seda ei muudeta toote tasemel).',
        'help_text_brand' => 'Kõik selle brändi tooted pärivad selle suurusjuhendi (kui seda ei muudeta toote või kategooria tasemel).',
    ],

    'frontend' => [
        'view_size_guide' => 'Vaata suurusjuhendit',
        'close' => 'Sulge',
    ],

    'messages' => [
        'created' => 'Suurusjuhend edukalt loodud',
        'updated' => 'Suurusjuhend edukalt uuendatud',
        'deleted' => 'Suurusjuhend edukalt kustutatud',
        'settings_saved' => 'Seaded on edukalt salvestatud',
    ],
];
