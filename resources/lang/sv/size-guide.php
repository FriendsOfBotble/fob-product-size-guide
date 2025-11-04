<?php

return [
    'name' => 'Storleksguider för produkter',
    'size_guide' => 'Storleksguide',
    'size_guides' => 'Storleksguider',
    'create' => 'Ny storleksguide',
    'edit' => 'Redigera storleksguide',
    'settings_menu' => 'Inställningar',

    'form' => [
        'name' => 'Namn',
        'name_placeholder' => 'Ange namn på storleksguiden',
        'description' => 'Beskrivning',
        'description_placeholder' => 'Ange beskrivning (valfritt)',
        'image' => 'Bild',
        'image_helper' => 'Ladda upp ett diagram eller referensbild för storleksguiden',
        'table_builder' => 'Tabellbyggare',
        'table_builder_helper' => 'Skapa storlekstabellen genom att lägga till kolumner och rader',
        'status' => 'Status',
        'order' => 'Ordning',
        'order_helper' => 'Lägre nummer visas först',
    ],

    'table' => [
        'id' => 'ID',
        'name' => 'Namn',
        'image' => 'Bild',
        'rows_count' => 'Rader',
        'status' => 'Status',
        'created_at' => 'Skapad',
    ],

    'table_builder' => [
        'add_column' => 'Lägg till kolumn',
        'add_row' => 'Lägg till rad',
        'column_header' => 'Kolumnrubrik',
        'select_header' => 'Välj kolumnrubrik',
        'no_columns' => 'Inga kolumner ännu. Klicka på "Lägg till kolumn" för att börja.',
        'no_rows' => 'Inga rader ännu. Klicka på "Lägg till rad" för att lägga till data.',
    ],

    'headers' => [
        'name' => 'Storleksguidens rubriker',
        'create' => 'Ny rubrik',
        'edit' => 'Redigera rubrik',
        'category' => 'Kategori',
        'categories' => [
            'general' => 'Allmänt',
            'size' => 'Storlek',
            'measurement' => 'Mått',
            'unit' => 'Enhet',
        ],
    ],

    'settings' => [
        'title' => 'Inställningar för produktens storleksguide',
        'description' => 'Konfigurera hur storleksguider visas på produktsidor',

        'display' => 'Visningsinställningar',
        'display_mode' => 'Visningsläge',
        'display_mode_inline' => 'Inline',
        'display_mode_popup' => 'Popup (modal)',
        'display_mode_conditional' => 'Villkorad',
        'display_mode_help' => 'Välj hur storleksguiden ska visas på produktsidor',

        'row_threshold' => 'Radgräns (för villkorat läge)',
        'row_threshold_help' => 'Tabeller med fler rader än detta öppnas i en popup',

        'button_text' => 'Knapptext',
        'button_text_placeholder' => 'Storleksguide',
        'button_text_help' => 'Text som visas på storleksguidens länk/knapp',

        'inline_expanded' => 'Expandera som standard (inline-läge)',
        'inline_expanded_help' => 'Visa storleksguiden som standard expanderad i inline-läge. Om ej markerad visas den hopfälld med en växlingsknapp.',

        'modal_title' => 'Modalrubrik',
        'modal_title_placeholder' => 'Storleksguide',
        'modal_title_help' => 'Rubriken som visas i popup-modalen',

        'appearance' => 'Utseendeinställningar',
        'show_image' => 'Visa bild',
        'show_image_help' => 'Visa storleksguidens bild ovanför tabellen',

        'link_color' => 'Länkfärg',
        'link_color_help' => 'Färg på länktexten (inline-läge)',
        'header_bg_color' => 'Rubrikens bakgrundsfärg',
        'header_bg_color_help' => 'Bakgrundsfärg för tabellrubriken',
        'header_text_color' => 'Rubrikens textfärg',
        'header_text_color_help' => 'Textfärg för tabellrubriken',
        'row_bg_color' => 'Radens bakgrundsfärg',
        'row_bg_color_help' => 'Bakgrundsfärg för tabellraderna',
        'row_alt_bg_color' => 'Alternativ radbakgrund',
        'row_alt_bg_color_help' => 'Bakgrundsfärg för alternerande (randiga) rader',
        'row_text_color' => 'Radens textfärg',
        'row_text_color_help' => 'Textfärg för tabellraderna',
        'border_color' => 'Kantfärg',
        'border_color_help' => 'Färg på tabellens kanter',
        'table_styles' => 'Tabellstilar',
        'table_styles_help' => 'Välj vilka Bootstrap-tabellklasser som ska användas för storleksguidens tabell.',
        'table_style_bordered' => 'Med kantlinjer (table-bordered)',
        'table_style_striped' => 'Randiga rader (table-striped)',
        'table_style_hover' => 'Hover-effekt (table-hover)',
        'table_style_small' => 'Kompakt tabell (table-sm)',
        'font_size' => 'Teckenstorlek (px)',
        'font_size_help' => 'Teckenstorlek för tabelltext i pixlar',
        'border_radius' => 'Hörnradie (px)',
        'border_radius_help' => 'Tabellens hörnradie i pixlar',
    ],

    'metabox' => [
        'title' => 'Produktens storleksguide',
        'select_size_guide' => 'Välj storleksguide',
        'select_size_guide_placeholder' => '-- Välj en storleksguide --',
        'no_size_guide' => 'Ingen storleksguide',
        'help_text' => 'Tilldela en storleksguide till denna :type. Detta ersätter guider som ärvts från kategori eller varumärke.',
        'help_text_category' => 'Alla produkter i den här kategorin ärver den här guiden (såvida den inte ersätts på produktnivå).',
        'help_text_brand' => 'Alla produkter från detta varumärke ärver den här guiden (såvida den inte ersätts på produkt- eller kategorinivå).',
    ],

    'frontend' => [
        'view_size_guide' => 'Visa storleksguide',
        'close' => 'Stäng',
    ],

    'messages' => [
        'created' => 'Storleksguiden skapades',
        'updated' => 'Storleksguiden uppdaterades',
        'deleted' => 'Storleksguiden togs bort',
        'settings_saved' => 'Inställningarna har sparats',
    ],
];
