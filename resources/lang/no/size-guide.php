<?php

return [
    'name' => 'Størrelsesguider for produkter',
    'size_guide' => 'Størrelsesguide',
    'size_guides' => 'Størrelsesguider',
    'create' => 'Ny størrelsesguide',
    'edit' => 'Rediger størrelsesguide',
    'settings_menu' => 'Innstillinger',

    'form' => [
        'name' => 'Navn',
        'name_placeholder' => 'Skriv inn navn på størrelsesguiden',
        'description' => 'Beskrivelse',
        'description_placeholder' => 'Skriv inn beskrivelse (valgfritt)',
        'image' => 'Bilde',
        'image_helper' => 'Last opp et diagram eller referansebilde for størrelsesguiden',
        'table_builder' => 'Tabellbygger',
        'table_builder_helper' => 'Lag tabellen ved å legge til kolonner og rader',
        'status' => 'Status',
        'order' => 'Rekkefølge',
        'order_helper' => 'Lavere tall vises først',
    ],

    'table' => [
        'id' => 'ID',
        'name' => 'Navn',
        'image' => 'Bilde',
        'rows_count' => 'Rader',
        'status' => 'Status',
        'created_at' => 'Opprettet',
    ],

    'table_builder' => [
        'add_column' => 'Legg til kolonne',
        'add_row' => 'Legg til rad',
        'column_header' => 'Kolonneoverskrift',
        'select_header' => 'Velg kolonneoverskrift',
        'no_columns' => 'Ingen kolonner ennå. Klikk "Legg til kolonne" for å starte.',
        'no_rows' => 'Ingen rader ennå. Klikk "Legg til rad" for å legge til data.',
    ],

    'headers' => [
        'name' => 'Størrelsesguide-overskrifter',
        'create' => 'Ny overskrift',
        'edit' => 'Rediger overskrift',
        'category' => 'Kategori',
        'categories' => [
            'general' => 'Generelt',
            'size' => 'Størrelse',
            'measurement' => 'Mål',
            'unit' => 'Enhet',
        ],
    ],

    'settings' => [
        'title' => 'Innstillinger for produktets størrelsesguide',
        'description' => 'Konfigurer hvordan størrelsesguider vises på produktsider',

        'display' => 'Visningsinnstillinger',
        'display_mode' => 'Visningsmodus',
        'display_mode_inline' => 'Inline',
        'display_mode_popup' => 'Popup (modal)',
        'display_mode_conditional' => 'Betinget',
        'display_mode_help' => 'Velg hvordan størrelsesguiden skal vises på produktsidene',

        'row_threshold' => 'Radgrense (for betinget modus)',
        'row_threshold_help' => 'Tabeller med flere rader enn dette åpnes i et popup-vindu',

        'button_text' => 'Knappetekst',
        'button_text_placeholder' => 'Størrelsesguide',
        'button_text_help' => 'Teksten som vises på lenken/knappen til størrelsesguiden',

        'inline_expanded' => 'Utvidet som standard (inline-modus)',
        'inline_expanded_help' => 'Vis størrelsesguiden som standard utvidet i inline-modus. Hvis ikke valgt, vises den sammenfoldet med en bryterknapp.',

        'modal_title' => 'Modal-tittel',
        'modal_title_placeholder' => 'Størrelsesguide',
        'modal_title_help' => 'Tittelen som vises i popup-modal',

        'appearance' => 'Utseendeinnstillinger',
        'show_image' => 'Vis bilde',
        'show_image_help' => 'Vis bilde av størrelsesguiden over tabellen',

        'link_color' => 'Lenkefarge',
        'link_color_help' => 'Fargen på lenketeksten i størrelsesguiden (inline-modus)',
        'header_bg_color' => 'Bakgrunnsfarge på header',
        'header_bg_color_help' => 'Bakgrunnsfarge for tabellhodet',
        'header_text_color' => 'Tekstfarge på header',
        'header_text_color_help' => 'Tekstfarge for tabellhodet',
        'row_bg_color' => 'Bakgrunnsfarge på rader',
        'row_bg_color_help' => 'Bakgrunnsfarge for tabellrader',
        'row_alt_bg_color' => 'Alternativ radbakgrunn',
        'row_alt_bg_color_help' => 'Bakgrunnsfarge for annethver (stripete) rad',
        'row_text_color' => 'Tekstfarge på rader',
        'row_text_color_help' => 'Tekstfarge for tabellrader',
        'border_color' => 'Rammefarge',
        'border_color_help' => 'Farge på tabellens rammer',
        'table_styles' => 'Tabelstiler',
        'table_styles_help' => 'Velg Bootstrap-klasser som skal brukes på størrelsesguidens tabell.',
        'table_style_bordered' => 'Med ramme (table-bordered)',
        'table_style_striped' => 'Stripede rader (table-striped)',
        'table_style_hover' => 'Hover-effekt (table-hover)',
        'table_style_small' => 'Kompakt tabell (table-sm)',
        'font_size' => 'Skriftstørrelse (px)',
        'font_size_help' => 'Skriftstørrelse for tabelltekst i piksler',
        'border_radius' => 'Hjørneradius (px)',
        'border_radius_help' => 'Hjørneradius for tabellen i piksler',
    ],

    'metabox' => [
        'title' => 'Produktets størrelsesguide',
        'select_size_guide' => 'Velg størrelsesguide',
        'select_size_guide_placeholder' => '-- Velg en størrelsesguide --',
        'no_size_guide' => 'Ingen størrelsesguide',
        'help_text' => 'Tildel en størrelsesguide til denne :type. Dette overstyrer guider arvet fra kategori eller merke.',
        'help_text_category' => 'Alle produkter i denne kategorien arver denne guiden (med mindre den overstyres på produktnivå).',
        'help_text_brand' => 'Alle produkter fra dette merket arver denne guiden (med mindre den overstyres på produkt- eller kategorinivå).',
    ],

    'frontend' => [
        'view_size_guide' => 'Se størrelsesguide',
        'close' => 'Lukk',
    ],

    'messages' => [
        'created' => 'Størrelsesguide ble opprettet',
        'updated' => 'Størrelsesguide ble oppdatert',
        'deleted' => 'Størrelsesguide ble slettet',
        'settings_saved' => 'Innstillinger ble lagret',
    ],
];
