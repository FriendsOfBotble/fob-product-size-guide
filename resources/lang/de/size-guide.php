<?php

return [
    'name' => 'Produktgrößenleitfäden',
    'size_guide' => 'Größentabelle',
    'size_guides' => 'Größentabellen',
    'create' => 'Neue Größentabelle',
    'edit' => 'Größentabelle bearbeiten',
    'settings_menu' => 'Einstellungen',

    'form' => [
        'name' => 'Name',
        'name_placeholder' => 'Name der Größentabelle eingeben',
        'description' => 'Beschreibung',
        'description_placeholder' => 'Beschreibung eingeben (optional)',
        'image' => 'Bild',
        'image_helper' => 'Laden Sie ein Diagramm der Größentabelle oder ein Referenzbild hoch',
        'table_builder' => 'Tabellenersteller',
        'table_builder_helper' => 'Erstellen Sie Ihre Größentabelle, indem Sie Spalten und Zeilen hinzufügen',
        'status' => 'Status',
        'order' => 'Reihenfolge',
        'order_helper' => 'Niedrigere Zahlen werden zuerst angezeigt',
    ],

    'table' => [
        'id' => 'ID',
        'name' => 'Name',
        'image' => 'Bild',
        'rows_count' => 'Zeilen',
        'status' => 'Status',
        'created_at' => 'Erstellt am',
    ],

    'table_builder' => [
        'add_column' => 'Spalte hinzufügen',
        'add_row' => 'Zeile hinzufügen',
        'column_header' => 'Spaltenüberschrift',
        'select_header' => 'Spaltenüberschrift auswählen',
        'no_columns' => 'Noch keine Spalten. Klicken Sie auf "Spalte hinzufügen", um zu starten.',
        'no_rows' => 'Noch keine Zeilen. Klicken Sie auf "Zeile hinzufügen", um Daten hinzuzufügen.',
    ],

    'headers' => [
        'name' => 'Größentabellen-Überschriften',
        'create' => 'Neue Überschrift',
        'edit' => 'Überschrift bearbeiten',
        'category' => 'Kategorie',
        'categories' => [
            'general' => 'Allgemein',
            'size' => 'Größe',
            'measurement' => 'Maß',
            'unit' => 'Einheit',
        ],
    ],

    'settings' => [
        'title' => 'Einstellungen für die Produktgrößentabelle',
        'description' => 'Konfigurieren Sie, wie Größentabellen auf Produktseiten angezeigt werden',

        'display' => 'Anzeigeeinstellungen',
        'display_mode' => 'Anzeigemodus',
        'display_mode_inline' => 'Inline',
        'display_mode_popup' => 'Popup (Modal)',
        'display_mode_conditional' => 'Bedingt',
        'display_mode_help' => 'Wählen Sie aus, wie die Größentabelle auf Produktseiten angezeigt wird',

        'row_threshold' => 'Zeilenschwelle (für den bedingten Modus)',
        'row_threshold_help' => 'Tabellen mit mehr Zeilen als diesem Wert werden in einem Popup geöffnet',

        'button_text' => 'Schaltflächentext',
        'button_text_placeholder' => 'Größentabelle',
        'button_text_help' => 'Text, der auf dem Link/der Schaltfläche der Größentabelle angezeigt wird',

        'inline_expanded' => 'Standardmäßig erweitert (Inline-Modus)',
        'inline_expanded_help' => 'Größentabelle im Inline-Modus standardmäßig erweitert anzeigen. Wenn deaktiviert, wird sie mit einer Umschaltschaltfläche eingeklappt.',

        'modal_title' => 'Modaltitel',
        'modal_title_placeholder' => 'Größentabelle',
        'modal_title_help' => 'Titel, der im Popup-Modal angezeigt wird',

        'appearance' => 'Darstellungseinstellungen',
        'show_image' => 'Bild anzeigen',
        'show_image_help' => 'Größentabellenbild oberhalb der Tabelle anzeigen',

        'link_color' => 'Linkfarbe',
        'link_color_help' => 'Farbe des Größentabellen-Linktexts (Inline-Modus)',
        'header_bg_color' => 'Hintergrundfarbe der Kopfzeile',
        'header_bg_color_help' => 'Hintergrundfarbe für den Tabellenkopf',
        'header_text_color' => 'Textfarbe der Kopfzeile',
        'header_text_color_help' => 'Textfarbe für den Tabellenkopf',
        'row_bg_color' => 'Hintergrundfarbe der Zeilen',
        'row_bg_color_help' => 'Hintergrundfarbe für Tabellenzeilen',
        'row_alt_bg_color' => 'Alternative Zeilenhintergrundfarbe',
        'row_alt_bg_color_help' => 'Hintergrundfarbe für abwechselnde (gestreifte) Zeilen',
        'row_text_color' => 'Textfarbe der Zeilen',
        'row_text_color_help' => 'Textfarbe für Tabellenzeilen',
        'border_color' => 'Rahmenfarbe',
        'border_color_help' => 'Farbe für Tabellenrahmen',
        'table_styles' => 'Tabellenstile',
        'table_styles_help' => 'Wählen Sie zusätzliche Bootstrap-Tabellenklassen für die Größentabelle aus.',
        'table_style_bordered' => 'Mit Rahmen (table-bordered)',
        'table_style_striped' => 'Gestreifte Zeilen (table-striped)',
        'table_style_hover' => 'Hover-Effekt (table-hover)',
        'table_style_small' => 'Kompakte Tabelle (table-sm)',
        'font_size' => 'Schriftgröße (px)',
        'font_size_help' => 'Schriftgröße des Tabellentextes in Pixel',
        'border_radius' => 'Eckenradius (px)',
        'border_radius_help' => 'Eckenradius der Tabelle in Pixel',
    ],

    'metabox' => [
        'title' => 'Produktgrößentabelle',
        'select_size_guide' => 'Größentabelle auswählen',
        'select_size_guide_placeholder' => '-- Größentabelle auswählen --',
        'no_size_guide' => 'Keine Größentabelle',
        'help_text' => 'Weisen Sie diesem :type eine Größentabelle zu. Dadurch werden geerbte Größentabellen von Kategorie oder Marke überschrieben.',
        'help_text_category' => 'Alle Produkte in dieser Kategorie übernehmen diese Größentabelle (sofern sie nicht auf Produktebene überschrieben wird).',
        'help_text_brand' => 'Alle Produkte dieser Marke übernehmen diese Größentabelle (sofern sie nicht auf Produkt- oder Kategorieebene überschrieben wird).',
    ],

    'frontend' => [
        'view_size_guide' => 'Größentabelle anzeigen',
        'close' => 'Schließen',
    ],

    'messages' => [
        'created' => 'Größentabelle erfolgreich erstellt',
        'updated' => 'Größentabelle erfolgreich aktualisiert',
        'deleted' => 'Größentabelle erfolgreich gelöscht',
        'settings_saved' => 'Einstellungen erfolgreich gespeichert',
    ],
];
