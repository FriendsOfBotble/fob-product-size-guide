<?php

return [
    'name' => 'Produktstørrelsesguider',
    'size_guide' => 'Størrelsesguide',
    'size_guides' => 'Størrelsesguider',
    'create' => 'Ny størrelsesguide',
    'edit' => 'Rediger størrelsesguide',
    'settings_menu' => 'Indstillinger',

    'form' => [
        'name' => 'Navn',
        'name_placeholder' => 'Angiv navn på størrelsesguiden',
        'description' => 'Beskrivelse',
        'description_placeholder' => 'Angiv beskrivelse (valgfrit)',
        'image' => 'Billede',
        'image_helper' => 'Upload et diagram eller referencebillede til størrelsesguiden',
        'table_builder' => 'Tabelbygger',
        'table_builder_helper' => 'Opret din størrelsesguide ved at tilføje kolonner og rækker',
        'status' => 'Status',
        'order' => 'Rækkefølge',
        'order_helper' => 'Lavere tal vises først',
    ],

    'table' => [
        'id' => 'ID',
        'name' => 'Navn',
        'image' => 'Billede',
        'rows_count' => 'Rækker',
        'status' => 'Status',
        'created_at' => 'Oprettet den',
    ],

    'table_builder' => [
        'add_column' => 'Tilføj kolonne',
        'add_row' => 'Tilføj række',
        'column_header' => 'Kolonneoverskrift',
        'select_header' => 'Vælg kolonneoverskrift',
        'no_columns' => 'Ingen kolonner endnu. Klik "Tilføj kolonne" for at starte.',
        'no_rows' => 'Ingen rækker endnu. Klik "Tilføj række" for at tilføje data.',
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
            'unit' => 'Enhed',
        ],
    ],

    'settings' => [
        'title' => 'Indstillinger for produktets størrelsesguide',
        'description' => 'Konfigurer hvordan størrelsesguider vises på produktsider',

        'display' => 'Visningsindstillinger',
        'display_mode' => 'Visningstilstand',
        'display_mode_inline' => 'Inline',
        'display_mode_popup' => 'Popup (modal)',
        'display_mode_conditional' => 'Betinget',
        'display_mode_help' => 'Vælg hvordan størrelsesguiden skal vises på produktsider',

        'row_threshold' => 'Rækkegrænse (for betinget tilstand)',
        'row_threshold_help' => 'Tabeller med flere rækker end dette åbnes i en popup',

        'button_text' => 'Knaptekst',
        'button_text_placeholder' => 'Størrelsesguide',
        'button_text_help' => 'Tekst vist på linket/knappen til størrelsesguiden',

        'inline_expanded' => 'Udvidet som standard (inline-tilstand)',
        'inline_expanded_help' => 'Vis størrelsesguiden udvidet som standard i inline-tilstand. Hvis ikke markeret, vises den foldet med en knap.',

        'modal_title' => 'Modaltitel',
        'modal_title_placeholder' => 'Størrelsesguide',
        'modal_title_help' => 'Titel vist i popup-modal',

        'appearance' => 'Udseendeindstillinger',
        'show_image' => 'Vis billede',
        'show_image_help' => 'Vis størrelsesguidebilledet over tabellen',

        'link_color' => 'Linkfarve',
        'link_color_help' => 'Farve på linkteksten til størrelsesguiden (inline-tilstand)',
        'header_bg_color' => 'Baggrundsfarve for header',
        'header_bg_color_help' => 'Baggrundsfarve for tabeloverskrift',
        'header_text_color' => 'Tekstfarve for header',
        'header_text_color_help' => 'Tekstfarve for tabeloverskrift',
        'row_bg_color' => 'Baggrundsfarve for rækker',
        'row_bg_color_help' => 'Baggrundsfarve for tabelrækker',
        'row_alt_bg_color' => 'Alternativ række-baggrundsfarve',
        'row_alt_bg_color_help' => 'Baggrundsfarve for skiftevis (stribede) rækker',
        'row_text_color' => 'Tekstfarve for rækker',
        'row_text_color_help' => 'Tekstfarve for tabelrækker',
        'border_color' => 'Rammefarve',
        'border_color_help' => 'Farve på tabelrammer',
        'table_styles' => 'Tabelstile',
        'table_styles_help' => 'Vælg de Bootstrap-klasser, der skal bruges til størrelsesguidens tabel.',
        'table_style_bordered' => 'Med kant (table-bordered)',
        'table_style_striped' => 'Stribede rækker (table-striped)',
        'table_style_hover' => 'Hover-effekt (table-hover)',
        'table_style_small' => 'Kompakt tabel (table-sm)',
        'font_size' => 'Skrifttype (px)',
        'font_size_help' => 'Skriftstørrelse for tabeltekst i pixel',
        'border_radius' => 'Hjørneradius (px)',
        'border_radius_help' => 'Hjørneradius for tabellen i pixel',
    ],

    'metabox' => [
        'title' => 'Produktets størrelsesguide',
        'select_size_guide' => 'Vælg størrelsesguide',
        'select_size_guide_placeholder' => '-- Vælg en størrelsesguide --',
        'no_size_guide' => 'Ingen størrelsesguide',
        'help_text' => 'Tildel en størrelsesguide til denne :type. Det tilsidesætter enhver guide arvet fra kategori eller brand.',
        'help_text_category' => 'Alle produkter i denne kategori arver denne guide (medmindre den tilsidesættes på produktsiden).',
        'help_text_brand' => 'Alle produkter fra dette brand arver denne guide (medmindre den tilsidesættes på produkt- eller kategoriniveau).',
    ],

    'frontend' => [
        'view_size_guide' => 'Se størrelsesguide',
        'close' => 'Luk',
    ],

    'messages' => [
        'created' => 'Størrelsesguide oprettet',
        'updated' => 'Størrelsesguide opdateret',
        'deleted' => 'Størrelsesguide slettet',
        'settings_saved' => 'Indstillinger gemt',
    ],
];
