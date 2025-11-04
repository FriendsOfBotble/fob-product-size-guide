<?php

return [
    'name' => 'Sprievodcovia veľkosťami produktov',
    'size_guide' => 'Sprievodca veľkosťami',
    'size_guides' => 'Sprievodcovia veľkosťami',
    'create' => 'Nový sprievodca veľkosťami',
    'edit' => 'Upraviť sprievodcu veľkosťami',
    'settings_menu' => 'Nastavenia',

    'form' => [
        'name' => 'Názov',
        'name_placeholder' => 'Zadajte názov sprievodcu veľkosťami',
        'description' => 'Popis',
        'description_placeholder' => 'Zadajte popis (voliteľné)',
        'image' => 'Obrázok',
        'image_helper' => 'Nahrajte diagram sprievodcu veľkosťami alebo referenčný obrázok',
        'table_builder' => 'Tvorca tabuliek',
        'table_builder_helper' => 'Vytvorte tabuľku sprievodcu veľkosťami pridaním stĺpcov a riadkov',
        'status' => 'Stav',
        'order' => 'Poradie',
        'order_helper' => 'Nižšie čísla sa zobrazia ako prvé',
    ],

    'table' => [
        'id' => 'ID',
        'name' => 'Názov',
        'image' => 'Obrázok',
        'rows_count' => 'Riadky',
        'status' => 'Stav',
        'created_at' => 'Vytvorené',
    ],

    'table_builder' => [
        'add_column' => 'Pridať stĺpec',
        'add_row' => 'Pridať riadok',
        'column_header' => 'Záhlavie stĺpca',
        'select_header' => 'Vyberte záhlavie stĺpca',
        'no_columns' => 'Zatiaľ žiadne stĺpce. Kliknite na "Pridať stĺpec" pre začatie.',
        'no_rows' => 'Zatiaľ žiadne riadky. Kliknite na "Pridať riadok" pre pridanie údajov.',
    ],

    'headers' => [
        'name' => 'Záhlavia sprievodcu veľkosťami',
        'create' => 'Nové záhlavie',
        'edit' => 'Upraviť záhlavie',
        'category' => 'Kategória',
        'categories' => [
            'general' => 'Všeobecné',
            'size' => 'Veľkosť',
            'measurement' => 'Meranie',
            'unit' => 'Jednotka',
        ],
    ],

    'settings' => [
        'title' => 'Nastavenia sprievodcu veľkosťami produktu',
        'description' => 'Nakonfigurujte, ako sa sprievodcovia veľkosťami zobrazia na stránkach produktov',

        'display' => 'Nastavenia zobrazenia',
        'display_mode' => 'Režim zobrazenia',
        'display_mode_inline' => 'Vo vložení',
        'display_mode_popup' => 'Kontextové okno (modálne)',
        'display_mode_conditional' => 'Podmienený',
        'display_mode_help' => 'Vyberte, ako sa bude sprievodca veľkosťami zobrazovať na stránkach produktov',

        'row_threshold' => 'Limit riadkov (pre podmienený režim)',
        'row_threshold_help' => 'Tabuľky s viac riadkami ako táto hodnota sa otvoria v kontextovom okne',

        'button_text' => 'Text tlačidla',
        'button_text_placeholder' => 'Sprievodca veľkosťami',
        'button_text_help' => 'Text zobrazený na odkaze/tlačidle sprievodcu veľkosťami',

        'inline_expanded' => 'Rozbalené v predvolenom nastavení (vložený režim)',
        'inline_expanded_help' => 'Zobrazujte sprievodcu veľkosťami vo vloženom režime predvolene rozbalený. Ak nie je zaškrtnuté, bude zbalený a zobrazí sa s tlačidlom prepínača.',

        'modal_title' => 'Názov modálneho okna',
        'modal_title_placeholder' => 'Sprievodca veľkosťami',
        'modal_title_help' => 'Názov zobrazený v modálnom okne',

        'appearance' => 'Nastavenia vzhľadu',
        'show_image' => 'Zobraziť obrázok',
        'show_image_help' => 'Zobrazte obrázok sprievodcu veľkosťami nad tabuľkou',

        'link_color' => 'Farba odkazu',
        'link_color_help' => 'Farba textu odkazu sprievodcu veľkosťami (vložený režim)',
        'header_bg_color' => 'Farba pozadia záhlavia',
        'header_bg_color_help' => 'Farba pozadia záhlavia tabuľky',
        'header_text_color' => 'Farba textu záhlavia',
        'header_text_color_help' => 'Farba textu záhlavia tabuľky',
        'row_bg_color' => 'Farba pozadia riadkov',
        'row_bg_color_help' => 'Farba pozadia riadkov tabuľky',
        'row_alt_bg_color' => 'Alternatívna farba pozadia riadkov',
        'row_alt_bg_color_help' => 'Farba pozadia pre striedavé (pruhované) riadky',
        'row_text_color' => 'Farba textu riadkov',
        'row_text_color_help' => 'Farba textu riadkov tabuľky',
        'border_color' => 'Farba rámu',
        'border_color_help' => 'Farba rámov tabuľky',
        'table_styles' => 'Štýly tabuľky',
        'table_styles_help' => 'Vyberte triedy Bootstrap, ktoré sa majú použiť na tabuľku sprievodcu veľkosťami.',
        'table_style_bordered' => 'S rámčekom (table-bordered)',
        'table_style_striped' => 'Pruhované riadky (table-striped)',
        'table_style_hover' => 'Efekt pri nabehnutí (table-hover)',
        'table_style_small' => 'Kompaktná tabuľka (table-sm)',
        'font_size' => 'Veľkosť písma (px)',
        'font_size_help' => 'Veľkosť písma textu v tabuľke v pixeloch',
        'border_radius' => 'Polomer zaoblenia (px)',
        'border_radius_help' => 'Polomer zaoblenia rohov tabuľky v pixeloch',
    ],

    'metabox' => [
        'title' => 'Sprievodca veľkosťami produktu',
        'select_size_guide' => 'Vyberte sprievodcu veľkosťami',
        'select_size_guide_placeholder' => '-- Vyberte sprievodcu veľkosťami --',
        'no_size_guide' => 'Žiadny sprievodca veľkosťami',
        'help_text' => 'Priraďte sprievodcu veľkosťami k tomuto :type. Prepíše akýkoľvek sprievodca zdedený z kategórie alebo značky.',
        'help_text_category' => 'Všetky produkty v tejto kategórii zdedia tento sprievodca veľkosťami (ak nebude prepísaný na úrovni produktu).',
        'help_text_brand' => 'Všetky produkty tejto značky zdedia tento sprievodca veľkosťami (ak nebude prepísaný na úrovni produktu alebo kategórie).',
    ],

    'frontend' => [
        'view_size_guide' => 'Zobraziť sprievodcu veľkosťami',
        'close' => 'Zavrieť',
    ],

    'messages' => [
        'created' => 'Sprievodca veľkosťami bol úspešne vytvorený',
        'updated' => 'Sprievodca veľkosťami bol úspešne aktualizovaný',
        'deleted' => 'Sprievodca veľkosťami bol úspešne odstránený',
        'settings_saved' => 'Nastavenia boli úspešne uložené',
    ],
];
