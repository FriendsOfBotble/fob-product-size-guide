<?php

return [
    'name' => 'Průvodce velikostmi produktů',
    'size_guide' => 'Průvodce velikostmi',
    'size_guides' => 'Průvodci velikostmi',
    'create' => 'Nový průvodce velikostmi',
    'edit' => 'Upravit průvodce velikostmi',
    'settings_menu' => 'Nastavení',

    'form' => [
        'name' => 'Název',
        'name_placeholder' => 'Zadejte název průvodce velikostmi',
        'description' => 'Popis',
        'description_placeholder' => 'Zadejte popis (volitelné)',
        'image' => 'Obrázek',
        'image_helper' => 'Nahrajte diagram průvodce velikostmi nebo referenční obrázek',
        'table_builder' => 'Tvůrce tabulek',
        'table_builder_helper' => 'Vytvořte tabulku průvodce velikostmi přidáním sloupců a řádků',
        'status' => 'Stav',
        'order' => 'Pořadí',
        'order_helper' => 'Nižší čísla se zobrazují jako první',
    ],

    'table' => [
        'id' => 'ID',
        'name' => 'Název',
        'image' => 'Obrázek',
        'rows_count' => 'Řádky',
        'status' => 'Stav',
        'created_at' => 'Vytvořeno',
    ],

    'table_builder' => [
        'add_column' => 'Přidat sloupec',
        'add_row' => 'Přidat řádek',
        'column_header' => 'Záhlaví sloupce',
        'select_header' => 'Vyberte záhlaví sloupce',
        'no_columns' => 'Zatím žádné sloupce. Klikněte na "Přidat sloupec" pro začátek.',
        'no_rows' => 'Zatím žádné řádky. Klikněte na "Přidat řádek" pro přidání dat.',
    ],

    'headers' => [
        'name' => 'Záhlaví průvodce velikostmi',
        'create' => 'Nové záhlaví',
        'edit' => 'Upravit záhlaví',
        'category' => 'Kategorie',
        'categories' => [
            'general' => 'Obecné',
            'size' => 'Velikost',
            'measurement' => 'Měření',
            'unit' => 'Jednotka',
        ],
    ],

    'settings' => [
        'title' => 'Nastavení průvodce velikostmi produktu',
        'description' => 'Nakonfigurujte, jak se průvodci velikostmi zobrazují na stránkách produktů',

        'display' => 'Nastavení zobrazení',
        'display_mode' => 'Režim zobrazení',
        'display_mode_inline' => 'Vložený',
        'display_mode_popup' => 'Vyskakovací (modální)',
        'display_mode_conditional' => 'Podmíněný',
        'display_mode_help' => 'Zvolte, jak se bude průvodce velikostmi zobrazovat na stránkách produktů',

        'row_threshold' => 'Limit řádků (pro podmíněný režim)',
        'row_threshold_help' => 'Tabulky s více řádky než tento počet se otevřou ve vyskakovacím okně',

        'button_text' => 'Text tlačítka',
        'button_text_placeholder' => 'Průvodce velikostmi',
        'button_text_help' => 'Text zobrazený na odkazu/tlačítku průvodce velikostmi',

        'inline_expanded' => 'Rozbaleno ve výchozím nastavení (vložený režim)',
        'inline_expanded_help' => 'Zobrazit průvodce velikostmi ve vloženém režimu rozbalený ve výchozím nastavení. Pokud není zaškrtnuto, bude sbalen s přepínačem.',

        'modal_title' => 'Název modálního okna',
        'modal_title_placeholder' => 'Průvodce velikostmi',
        'modal_title_help' => 'Název zobrazený v modálním okně',

        'appearance' => 'Nastavení vzhledu',
        'show_image' => 'Zobrazit obrázek',
        'show_image_help' => 'Zobrazit obrázek průvodce velikostmi nad tabulkou',

        'link_color' => 'Barva odkazu',
        'link_color_help' => 'Barva textu odkazu na průvodce velikostmi (vložený režim)',
        'header_bg_color' => 'Barva pozadí záhlaví',
        'header_bg_color_help' => 'Barva pozadí záhlaví tabulky',
        'header_text_color' => 'Barva textu záhlaví',
        'header_text_color_help' => 'Barva textu záhlaví tabulky',
        'row_bg_color' => 'Barva pozadí řádků',
        'row_bg_color_help' => 'Barva pozadí řádků tabulky',
        'row_alt_bg_color' => 'Alternativní barva pozadí řádků',
        'row_alt_bg_color_help' => 'Barva pozadí pro střídající se (pruhované) řádky',
        'row_text_color' => 'Barva textu řádků',
        'row_text_color_help' => 'Barva textu řádků tabulky',
        'border_color' => 'Barva rámečku',
        'border_color_help' => 'Barva rámečků tabulky',
        'table_styles' => 'Styly tabulky',
        'table_styles_help' => 'Vyberte Bootstrap třídy, které se mají použít pro tabulku průvodce velikostmi.',
        'table_style_bordered' => 'S ohraničením (table-bordered)',
        'table_style_striped' => 'Pruhované řádky (table-striped)',
        'table_style_hover' => 'Zvýraznění při najetí (table-hover)',
        'table_style_small' => 'Kompaktní tabulka (table-sm)',
        'font_size' => 'Velikost písma (px)',
        'font_size_help' => 'Velikost písma textu v tabulce v pixelech',
        'border_radius' => 'Poloměr zaoblení (px)',
        'border_radius_help' => 'Poloměr zaoblení rohů tabulky v pixelech',
    ],

    'metabox' => [
        'title' => 'Průvodce velikostmi produktu',
        'select_size_guide' => 'Vyberte průvodce velikostmi',
        'select_size_guide_placeholder' => '-- Vyberte průvodce velikostmi --',
        'no_size_guide' => 'Žádný průvodce velikostmi',
        'help_text' => 'Přiřaďte průvodce velikostmi k tomuto :type. Přepíše jakýkoli průvodce zděděný z kategorie nebo značky.',
        'help_text_category' => 'Všechny produkty v této kategorii zdědí tento průvodce velikostmi (pokud nebude přepsán na úrovni produktu).',
        'help_text_brand' => 'Všechny produkty této značky zdědí tento průvodce velikostmi (pokud nebude přepsán na úrovni produktu nebo kategorie).',
    ],

    'frontend' => [
        'view_size_guide' => 'Zobrazit průvodce velikostmi',
        'close' => 'Zavřít',
    ],

    'messages' => [
        'created' => 'Průvodce velikostmi byl úspěšně vytvořen',
        'updated' => 'Průvodce velikostmi byl úspěšně aktualizován',
        'deleted' => 'Průvodce velikostmi byl úspěšně odstraněn',
        'settings_saved' => 'Nastavení byla úspěšně uložena',
    ],
];
