<?php

return [
    'name' => 'Tuotteiden kokotaulukot',
    'size_guide' => 'Kokotaulukko',
    'size_guides' => 'Kokotaulukot',
    'create' => 'Uusi kokotaulukko',
    'edit' => 'Muokkaa kokotaulukkoa',
    'settings_menu' => 'Asetukset',

    'form' => [
        'name' => 'Nimi',
        'name_placeholder' => 'Syötä kokotaulukon nimi',
        'description' => 'Kuvaus',
        'description_placeholder' => 'Syötä kuvaus (valinnainen)',
        'image' => 'Kuva',
        'image_helper' => 'Lataa kokotaulukon kaavio tai esittelykuva',
        'table_builder' => 'Taulukon rakennin',
        'table_builder_helper' => 'Luo kokotaulukko lisäämällä sarakkeita ja rivejä',
        'status' => 'Tila',
        'order' => 'Järjestys',
        'order_helper' => 'Pienemmät numerot näkyvät ensin',
    ],

    'table' => [
        'id' => 'ID',
        'name' => 'Nimi',
        'image' => 'Kuva',
        'rows_count' => 'Rivit',
        'status' => 'Tila',
        'created_at' => 'Luotu',
    ],

    'table_builder' => [
        'add_column' => 'Lisää sarake',
        'add_row' => 'Lisää rivi',
        'column_header' => 'Sarakkeen otsikko',
        'select_header' => 'Valitse sarakkeen otsikko',
        'no_columns' => 'Sarakkeita ei vielä ole. Aloita painamalla "Lisää sarake".',
        'no_rows' => 'Rivejä ei vielä ole. Lisää rivejä painamalla "Lisää rivi".',
    ],

    'headers' => [
        'name' => 'Kokotaulukon otsikot',
        'create' => 'Uusi otsikko',
        'edit' => 'Muokkaa otsikkoa',
        'category' => 'Kategoria',
        'categories' => [
            'general' => 'Yleinen',
            'size' => 'Koko',
            'measurement' => 'Mitta',
            'unit' => 'Yksikkö',
        ],
    ],

    'settings' => [
        'title' => 'Tuotteen kokotaulukon asetukset',
        'description' => 'Määritä, miten kokotaulukot näytetään tuotesivuilla',

        'display' => 'Näyttöasetukset',
        'display_mode' => 'Näyttötila',
        'display_mode_inline' => 'Upotettu',
        'display_mode_popup' => 'Ponnahdusikkuna (modal)',
        'display_mode_conditional' => 'Ehdollinen',
        'display_mode_help' => 'Valitse, miten kokotaulukko näytetään tuotesivuilla',

        'row_threshold' => 'Rivien raja (ehdollista tilaa varten)',
        'row_threshold_help' => 'Taulukot, joissa on enemmän rivejä kuin tämä arvo, avataan ponnahdusikkunassa',

        'button_text' => 'Painikkeen teksti',
        'button_text_placeholder' => 'Kokotaulukko',
        'button_text_help' => 'Teksti, joka näkyy kokotaulukon linkissä/painikkeessa',

        'inline_expanded' => 'Laajennettu oletuksena (upotettu tila)',
        'inline_expanded_help' => 'Näytä kokotaulukko oletuksena laajennettuna upotetussa tilassa. Jos valintaa ei ole, taulukko on supistettuna vaihtopainikkeella.',

        'modal_title' => 'Modalin otsikko',
        'modal_title_placeholder' => 'Kokotaulukko',
        'modal_title_help' => 'Otsikko, joka näkyy ponnahdusmodalissa',

        'appearance' => 'Ulkoasuasetukset',
        'show_image' => 'Näytä kuva',
        'show_image_help' => 'Näytä kokotaulukon kuva taulukon yläpuolella',

        'link_color' => 'Linkin väri',
        'link_color_help' => 'Kokotaulukon linkkitekstin väri (upotettu tila)',
        'header_bg_color' => 'Otsikon taustaväri',
        'header_bg_color_help' => 'Taulukon otsikon taustaväri',
        'header_text_color' => 'Otsikon tekstin väri',
        'header_text_color_help' => 'Taulukon otsikon tekstin väri',
        'row_bg_color' => 'Rivien taustaväri',
        'row_bg_color_help' => 'Taulukon rivien taustaväri',
        'row_alt_bg_color' => 'Vaihtoehtoinen rivien taustaväri',
        'row_alt_bg_color_help' => 'Raitojen rivien taustaväri',
        'row_text_color' => 'Rivien tekstin väri',
        'row_text_color_help' => 'Taulukon rivien tekstin väri',
        'border_color' => 'Reunuksen väri',
        'border_color_help' => 'Taulukon reunojen väri',
        'table_styles' => 'Taulukon tyylit',
        'table_styles_help' => 'Valitse Bootstrapin taulukkoluokat kokotaulukon muotoiluun.',
        'table_style_bordered' => 'Reunuksellinen (table-bordered)',
        'table_style_striped' => 'Raidalliset rivit (table-striped)',
        'table_style_hover' => 'Hover-efekti (table-hover)',
        'table_style_small' => 'Kompakti taulukko (table-sm)',
        'font_size' => 'Fonttikoko (px)',
        'font_size_help' => 'Taulukon tekstin fonttikoko pikseleinä',
        'border_radius' => 'Reunuksen pyöristys (px)',
        'border_radius_help' => 'Taulukon kulmien pyöristys pikseleinä',
    ],

    'metabox' => [
        'title' => 'Tuotteen kokotaulukko',
        'select_size_guide' => 'Valitse kokotaulukko',
        'select_size_guide_placeholder' => '-- Valitse kokotaulukko --',
        'no_size_guide' => 'Ei kokotaulukkoa',
        'help_text' => 'Liitä kokotaulukko tähän :type:iin. Tämä korvaa mahdollisen kategoriasta tai brändistä perityn taulukon.',
        'help_text_category' => 'Kaikki tämän kategorian tuotteet perivät tämän kokotaulukon (ellei sitä korvata tuotetasolla).',
        'help_text_brand' => 'Kaikki tämän brändin tuotteet perivät tämän kokotaulukon (ellei sitä korvata tuote- tai kategoriatasolla).',
    ],

    'frontend' => [
        'view_size_guide' => 'Näytä kokotaulukko',
        'close' => 'Sulje',
    ],

    'messages' => [
        'created' => 'Kokotaulukko luotu onnistuneesti',
        'updated' => 'Kokotaulukko päivitetty onnistuneesti',
        'deleted' => 'Kokotaulukko poistettu onnistuneesti',
        'settings_saved' => 'Asetukset tallennettu onnistuneesti',
    ],
];
