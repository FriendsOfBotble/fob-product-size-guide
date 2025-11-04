<?php

return [
    'name' => 'Vodniki po velikostih izdelkov',
    'size_guide' => 'Vodnik po velikostih',
    'size_guides' => 'Vodniki po velikostih',
    'create' => 'Nov vodnik po velikostih',
    'edit' => 'Uredi vodnik po velikostih',
    'settings_menu' => 'Nastavitve',

    'form' => [
        'name' => 'Ime',
        'name_placeholder' => 'Vnesite ime vodnika po velikostih',
        'description' => 'Opis',
        'description_placeholder' => 'Vnesite opis (neobvezno)',
        'image' => 'Slika',
        'image_helper' => 'Naložite diagram vodnika po velikostih ali referenčno sliko',
        'table_builder' => 'Urejevalnik tabel',
        'table_builder_helper' => 'Ustvarite tabelo vodnika po velikostih z dodajanjem stolpcev in vrstic',
        'status' => 'Status',
        'order' => 'Vrstni red',
        'order_helper' => 'Nižje številke se prikažejo najprej',
    ],

    'table' => [
        'id' => 'ID',
        'name' => 'Ime',
        'image' => 'Slika',
        'rows_count' => 'Vrstice',
        'status' => 'Status',
        'created_at' => 'Ustvarjeno',
    ],

    'table_builder' => [
        'add_column' => 'Dodaj stolpec',
        'add_row' => 'Dodaj vrstico',
        'column_header' => 'Glava stolpca',
        'select_header' => 'Izberite glavo stolpca',
        'no_columns' => 'Za zdaj ni stolpcev. Kliknite »Dodaj stolpec«, da začnete.',
        'no_rows' => 'Za zdaj ni vrstic. Kliknite »Dodaj vrstico«, da dodate podatke.',
    ],

    'headers' => [
        'name' => 'Glave vodnika po velikostih',
        'create' => 'Nova glava',
        'edit' => 'Uredi glavo',
        'category' => 'Kategorija',
        'categories' => [
            'general' => 'Splošno',
            'size' => 'Velikost',
            'measurement' => 'Meritev',
            'unit' => 'Enota',
        ],
    ],

    'settings' => [
        'title' => 'Nastavitve vodnika po velikostih izdelka',
        'description' => 'Nastavite, kako se vodniki po velikostih prikazujejo na straneh izdelkov',

        'display' => 'Nastavitve prikaza',
        'display_mode' => 'Način prikaza',
        'display_mode_inline' => 'V vrstici',
        'display_mode_popup' => 'Pojavno okno (modalno)',
        'display_mode_conditional' => 'Pogojno',
        'display_mode_help' => 'Izberite, kako naj se vodnik po velikostih prikazuje na straneh izdelkov',

        'row_threshold' => 'Prag vrstic (za pogojni način)',
        'row_threshold_help' => 'Tabele z več vrsticami od te vrednosti se odprejo v pojavnem oknu',

        'button_text' => 'Besedilo gumba',
        'button_text_placeholder' => 'Vodnik po velikostih',
        'button_text_help' => 'Besedilo, prikazano na povezavi/gumbu vodnika po velikostih',

        'inline_expanded' => 'Privzeto razširjeno (način v vrstici)',
        'inline_expanded_help' => 'Prikaži vodnik po velikostih v načinu v vrstici privzeto razširjen. Če ni označeno, bo strnjen z gumbom za preklop.',

        'modal_title' => 'Naslov modalnega okna',
        'modal_title_placeholder' => 'Vodnik po velikostih',
        'modal_title_help' => 'Naslov, prikazan v modalnem oknu',

        'appearance' => 'Nastavitve videza',
        'show_image' => 'Prikaži sliko',
        'show_image_help' => 'Prikaži sliko vodnika po velikostih nad tabelo',

        'link_color' => 'Barva povezave',
        'link_color_help' => 'Barva besedila povezave vodnika po velikostih (način v vrstici)',
        'header_bg_color' => 'Barva ozadja glave',
        'header_bg_color_help' => 'Barva ozadja glave tabele',
        'header_text_color' => 'Barva besedila glave',
        'header_text_color_help' => 'Barva besedila glave tabele',
        'row_bg_color' => 'Barva ozadja vrstic',
        'row_bg_color_help' => 'Barva ozadja vrstic tabele',
        'row_alt_bg_color' => 'Alternativna barva ozadja vrstic',
        'row_alt_bg_color_help' => 'Barva ozadja za izmenične (črtaste) vrstice',
        'row_text_color' => 'Barva besedila vrstic',
        'row_text_color_help' => 'Barva besedila vrstic tabele',
        'border_color' => 'Barva obrobe',
        'border_color_help' => 'Barva obrob tabele',
        'table_styles' => 'Stili tabel',
        'table_styles_help' => 'Izberite Bootstrap razrede, ki naj se uporabijo za tabelo vodnika po velikostih.',
        'table_style_bordered' => 'Z obrobo (table-bordered)',
        'table_style_striped' => 'Izmenične vrstice (table-striped)',
        'table_style_hover' => 'Učinek ob prehodu (table-hover)',
        'table_style_small' => 'Kompaktna tabela (table-sm)',
        'font_size' => 'Velikost pisave (px)',
        'font_size_help' => 'Velikost pisave besedila v tabeli v pikselih',
        'border_radius' => 'Polmer zaoblitve (px)',
        'border_radius_help' => 'Polmer zaoblitve robov tabele v pikselih',
    ],

    'metabox' => [
        'title' => 'Vodnik po velikostih izdelka',
        'select_size_guide' => 'Izberite vodnik po velikostih',
        'select_size_guide_placeholder' => '-- Izberite vodnik po velikostih --',
        'no_size_guide' => 'Ni vodnika po velikostih',
        'help_text' => 'Dodelite vodnik po velikostih temu :type. To bo prepisalo vsak vodnik, podedovan iz kategorije ali blagovne znamke.',
        'help_text_category' => 'Vsi izdelki v tej kategoriji bodo podedovali ta vodnik po velikostih (razen če je prepisan na ravni izdelka).',
        'help_text_brand' => 'Vsi izdelki te blagovne znamke bodo podedovali ta vodnik po velikostih (razen če je prepisan na ravni izdelka ali kategorije).',
    ],

    'frontend' => [
        'view_size_guide' => 'Prikaži vodnik po velikostih',
        'close' => 'Zapri',
    ],

    'messages' => [
        'created' => 'Vodnik po velikostih je bil uspešno ustvarjen',
        'updated' => 'Vodnik po velikostih je bil uspešno posodobljen',
        'deleted' => 'Vodnik po velikostih je bil uspešno izbrisan',
        'settings_saved' => 'Nastavitve so bile uspešno shranjene',
    ],
];
