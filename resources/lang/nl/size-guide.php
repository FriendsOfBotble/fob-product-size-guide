<?php

return [
    'name' => 'Productmaattabellen',
    'size_guide' => 'Maattabel',
    'size_guides' => 'Maattabellen',
    'create' => 'Nieuwe maattabel',
    'edit' => 'Maattabel bewerken',
    'settings_menu' => 'Instellingen',

    'form' => [
        'name' => 'Naam',
        'name_placeholder' => 'Voer de naam van de maattabel in',
        'description' => 'Beschrijving',
        'description_placeholder' => 'Voer een beschrijving in (optioneel)',
        'image' => 'Afbeelding',
        'image_helper' => 'Upload een diagram of referentieafbeelding van de maattabel',
        'table_builder' => 'Tabelbouwer',
        'table_builder_helper' => 'Maak de maattabel door kolommen en rijen toe te voegen',
        'status' => 'Status',
        'order' => 'Volgorde',
        'order_helper' => 'Lagere nummers worden eerst weergegeven',
    ],

    'table' => [
        'id' => 'ID',
        'name' => 'Naam',
        'image' => 'Afbeelding',
        'rows_count' => 'Rijen',
        'status' => 'Status',
        'created_at' => 'Aangemaakt op',
    ],

    'table_builder' => [
        'add_column' => 'Kolom toevoegen',
        'add_row' => 'Rij toevoegen',
        'column_header' => 'Kolomkop',
        'select_header' => 'Selecteer kolomkop',
        'no_columns' => 'Nog geen kolommen. Klik op "Kolom toevoegen" om te starten.',
        'no_rows' => 'Nog geen rijen. Klik op "Rij toevoegen" om gegevens toe te voegen.',
    ],

    'headers' => [
        'name' => 'Maattabel-koppen',
        'create' => 'Nieuwe kop',
        'edit' => 'Kop bewerken',
        'category' => 'Categorie',
        'categories' => [
            'general' => 'Algemeen',
            'size' => 'Maat',
            'measurement' => 'Meting',
            'unit' => 'Eenheid',
        ],
    ],

    'settings' => [
        'title' => 'Instellingen van de productmaattabel',
        'description' => 'Bepaal hoe maattabellen op productpagina’s worden weergegeven',

        'display' => 'Weergave-instellingen',
        'display_mode' => 'Weergavemodus',
        'display_mode_inline' => 'Inline',
        'display_mode_popup' => 'Popup (modal)',
        'display_mode_conditional' => 'Conditioneel',
        'display_mode_help' => 'Kies hoe de maattabel op productpagina’s verschijnt',

        'row_threshold' => 'Rij-drempel (voor conditionele modus)',
        'row_threshold_help' => 'Tabellen met meer rijen dan dit openen in een popup',

        'button_text' => 'Knoptekst',
        'button_text_placeholder' => 'Maattabel',
        'button_text_help' => 'Tekst die wordt weergegeven op de maattabel-link/knop',

        'inline_expanded' => 'Standaard uitgevouwen (inline modus)',
        'inline_expanded_help' => 'Toon de maattabel standaard uitgevouwen in inline modus. Als dit niet is aangevinkt, wordt de tabel samengevouwen met een schakelknop.',

        'modal_title' => 'Titel van modal',
        'modal_title_placeholder' => 'Maattabel',
        'modal_title_help' => 'Titel die wordt getoond in de popup-modal',

        'appearance' => 'Weergave-instellingen',
        'show_image' => 'Afbeelding tonen',
        'show_image_help' => 'Toon de afbeelding van de maattabel boven de tabel',

        'link_color' => 'Linkkleur',
        'link_color_help' => 'Kleur van de maattabellink in inline modus',
        'header_bg_color' => 'Achtergrondkleur van kop',
        'header_bg_color_help' => 'Achtergrondkleur van de tabelkop',
        'header_text_color' => 'Tekstkleur van kop',
        'header_text_color_help' => 'Tekstkleur voor de tabelkop',
        'row_bg_color' => 'Achtergrondkleur van rijen',
        'row_bg_color_help' => 'Achtergrondkleur voor tabelrijen',
        'row_alt_bg_color' => 'Alternatieve rij-achtergrondkleur',
        'row_alt_bg_color_help' => 'Achtergrondkleur voor afwisselende (gestreepte) rijen',
        'row_text_color' => 'Tekstkleur van rijen',
        'row_text_color_help' => 'Tekstkleur voor tabelrijen',
        'border_color' => 'Randkleur',
        'border_color_help' => 'Kleur van de tabelranden',
        'table_styles' => 'Tabelstijlen',
        'table_styles_help' => 'Selecteer de Bootstrap-tabelklassen die op de maattabel moeten worden toegepast.',
        'table_style_bordered' => 'Met randen (table-bordered)',
        'table_style_striped' => 'Gestreepte rijen (table-striped)',
        'table_style_hover' => 'Hover-effect (table-hover)',
        'table_style_small' => 'Compacte tabel (table-sm)',
        'font_size' => 'Lettergrootte (px)',
        'font_size_help' => 'Lettergrootte van de tabeltekst in pixels',
        'border_radius' => 'Hoekradius (px)',
        'border_radius_help' => 'Hoekradius van de tabel in pixels',
    ],

    'metabox' => [
        'title' => 'Productmaattabel',
        'select_size_guide' => 'Selecteer maattabel',
        'select_size_guide_placeholder' => '-- Selecteer een maattabel --',
        'no_size_guide' => 'Geen maattabel',
        'help_text' => 'Koppel een maattabel aan dit :type. Hiermee wordt een tabel uit de categorie of het merk overschreven.',
        'help_text_category' => 'Alle producten in deze categorie erven deze maattabel (tenzij overschreven op productniveau).',
        'help_text_brand' => 'Alle producten van dit merk erven deze maattabel (tenzij overschreven op product- of categorieniveau).',
    ],

    'frontend' => [
        'view_size_guide' => 'Bekijk maattabel',
        'close' => 'Sluiten',
    ],

    'messages' => [
        'created' => 'Maattabel succesvol aangemaakt',
        'updated' => 'Maattabel succesvol bijgewerkt',
        'deleted' => 'Maattabel succesvol verwijderd',
        'settings_saved' => 'Instellingen succesvol opgeslagen',
    ],
];
