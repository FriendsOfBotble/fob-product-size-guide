<?php

return [
    'name' => 'Termékméret-útmutatók',
    'size_guide' => 'Méretútmutató',
    'size_guides' => 'Méretútmutatók',
    'create' => 'Új méretútmutató',
    'edit' => 'Méretútmutató szerkesztése',
    'settings_menu' => 'Beállítások',

    'form' => [
        'name' => 'Név',
        'name_placeholder' => 'Adja meg a méretútmutató nevét',
        'description' => 'Leírás',
        'description_placeholder' => 'Adjon meg leírást (opcionális)',
        'image' => 'Kép',
        'image_helper' => 'Töltsön fel méretútmutató diagramot vagy referencia képet',
        'table_builder' => 'Táblázat készítő',
        'table_builder_helper' => 'Hozza létre a táblázatot oszlopok és sorok hozzáadásával',
        'status' => 'Állapot',
        'order' => 'Sorrend',
        'order_helper' => 'A kisebb számok jelennek meg először',
    ],

    'table' => [
        'id' => 'ID',
        'name' => 'Név',
        'image' => 'Kép',
        'rows_count' => 'Sorok',
        'status' => 'Állapot',
        'created_at' => 'Létrehozva',
    ],

    'table_builder' => [
        'add_column' => 'Oszlop hozzáadása',
        'add_row' => 'Sor hozzáadása',
        'column_header' => 'Oszlopfejléc',
        'select_header' => 'Válasszon oszlopfejlécet',
        'no_columns' => 'Még nincs oszlop. Kezdéshez kattintson az "Oszlop hozzáadása" gombra.',
        'no_rows' => 'Még nincs sor. Adatok felvételéhez kattintson a "Sor hozzáadása" gombra.',
    ],

    'headers' => [
        'name' => 'Méretútmutató fejlécek',
        'create' => 'Új fejléc',
        'edit' => 'Fejléc szerkesztése',
        'category' => 'Kategória',
        'categories' => [
            'general' => 'Általános',
            'size' => 'Méret',
            'measurement' => 'Mérés',
            'unit' => 'Mértékegység',
        ],
    ],

    'settings' => [
        'title' => 'Termékméret-útmutató beállításai',
        'description' => 'Állítsa be, hogyan jelenjenek meg a méretútmutatók a termékoldalakon',

        'display' => 'Megjelenítési beállítások',
        'display_mode' => 'Megjelenítési mód',
        'display_mode_inline' => 'Beágyazott',
        'display_mode_popup' => 'Felugró (modal)',
        'display_mode_conditional' => 'Feltételes',
        'display_mode_help' => 'Válassza ki, hogyan jelenjen meg a méretútmutató a termékoldalakon',

        'row_threshold' => 'Sorküszöb (feltételes módhoz)',
        'row_threshold_help' => 'Az ennél több sorral rendelkező táblázatok felugró ablakban nyílnak meg',

        'button_text' => 'Gomb szövege',
        'button_text_placeholder' => 'Méretútmutató',
        'button_text_help' => 'A méretútmutató hivatkozásán/gombján megjelenő szöveg',

        'inline_expanded' => 'Alapértelmezés szerint kibontva (beágyazott mód)',
        'inline_expanded_help' => 'Mutassa a méretútmutatót alapértelmezés szerint kibontva beágyazott módban. Ha nincs bejelölve, összecsukva jelenik meg egy váltógombbal.',

        'modal_title' => 'Modal címe',
        'modal_title_placeholder' => 'Méretútmutató',
        'modal_title_help' => 'A felugró modalban megjelenő cím',

        'appearance' => 'Megjelenés beállításai',
        'show_image' => 'Kép megjelenítése',
        'show_image_help' => 'Mutassa a méretútmutató képét a táblázat felett',

        'link_color' => 'Link színe',
        'link_color_help' => 'A méretútmutató link szövegének színe (beágyazott mód)',
        'header_bg_color' => 'Fejléc háttérszíne',
        'header_bg_color_help' => 'A táblázat fejlécének háttérszíne',
        'header_text_color' => 'Fejléc szövegszíne',
        'header_text_color_help' => 'A táblázat fejlécének szövegszíne',
        'row_bg_color' => 'Sorok háttérszíne',
        'row_bg_color_help' => 'A táblázat sorainak háttérszíne',
        'row_alt_bg_color' => 'Váltakozó sorok háttérszíne',
        'row_alt_bg_color_help' => 'A váltakozó (csíkos) sorok háttérszíne',
        'row_text_color' => 'Sorok szövegszíne',
        'row_text_color_help' => 'A táblázat sorainak szövegszíne',
        'border_color' => 'Szegély színe',
        'border_color_help' => 'A táblázat szegélyeinek színe',
        'table_styles' => 'Táblázat stílusai',
        'table_styles_help' => 'Válassza ki, mely Bootstrap táblázatosztályok legyenek alkalmazva a méretútmutató táblázatára.',
        'table_style_bordered' => 'Keretes (table-bordered)',
        'table_style_striped' => 'Csíkozott sorok (table-striped)',
        'table_style_hover' => 'Kiemelés egér fölé húzáskor (table-hover)',
        'table_style_small' => 'Kompakt táblázat (table-sm)',
        'font_size' => 'Betűméret (px)',
        'font_size_help' => 'A táblázat szövegének betűmérete pixelben',
        'border_radius' => 'Szegély lekerekítése (px)',
        'border_radius_help' => 'A táblázat sarkainak lekerekítése pixelben',
    ],

    'metabox' => [
        'title' => 'Termékméret-útmutató',
        'select_size_guide' => 'Válasszon méretútmutatót',
        'select_size_guide_placeholder' => '-- Válasszon egy méretútmutatót --',
        'no_size_guide' => 'Nincs méretútmutató',
        'help_text' => 'Rendeljen egy méretútmutatót ehhez a(z) :type-hoz. Ez felülír minden kategóriából vagy márkából örökölt útmutatót.',
        'help_text_category' => 'A kategória összes terméke ezt az útmutatót örökli (hacsak termékszinten nem kerül felülírásra).',
        'help_text_brand' => 'A márka összes terméke ezt az útmutatót örökli (hacsak termék- vagy kategóriaszinten nem kerül felülírásra).',
    ],

    'frontend' => [
        'view_size_guide' => 'Méretútmutató megtekintése',
        'close' => 'Bezárás',
    ],

    'messages' => [
        'created' => 'A méretútmutató sikeresen létrehozva',
        'updated' => 'A méretútmutató sikeresen frissítve',
        'deleted' => 'A méretútmutató sikeresen törölve',
        'settings_saved' => 'A beállítások sikeresen elmentve',
    ],
];
