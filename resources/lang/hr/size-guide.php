<?php

return [
    'name' => 'Vodiči za veličine proizvoda',
    'size_guide' => 'Vodič za veličine',
    'size_guides' => 'Vodiči za veličine',
    'create' => 'Novi vodič za veličine',
    'edit' => 'Uredi vodič za veličine',
    'settings_menu' => 'Postavke',

    'form' => [
        'name' => 'Naziv',
        'name_placeholder' => 'Unesite naziv vodiča za veličine',
        'description' => 'Opis',
        'description_placeholder' => 'Unesite opis (opcionalno)',
        'image' => 'Slika',
        'image_helper' => 'Prenesite dijagram vodiča za veličine ili referentnu sliku',
        'table_builder' => 'Kreator tablica',
        'table_builder_helper' => 'Izradite tablicu vodiča za veličine dodavanjem stupaca i redaka',
        'status' => 'Status',
        'order' => 'Redoslijed',
        'order_helper' => 'Niži brojevi prikazuju se prvi',
    ],

    'table' => [
        'id' => 'ID',
        'name' => 'Naziv',
        'image' => 'Slika',
        'rows_count' => 'Redci',
        'status' => 'Status',
        'created_at' => 'Kreirano',
    ],

    'table_builder' => [
        'add_column' => 'Dodaj stupac',
        'add_row' => 'Dodaj redak',
        'column_header' => 'Zaglavlje stupca',
        'select_header' => 'Odaberite zaglavlje stupca',
        'no_columns' => 'Još nema stupaca. Kliknite "Dodaj stupac" za početak.',
        'no_rows' => 'Još nema redaka. Kliknite "Dodaj redak" za dodavanje podataka.',
    ],

    'headers' => [
        'name' => 'Zaglavlja vodiča za veličine',
        'create' => 'Novo zaglavlje',
        'edit' => 'Uredi zaglavlje',
        'category' => 'Kategorija',
        'categories' => [
            'general' => 'Opće',
            'size' => 'Veličina',
            'measurement' => 'Mjera',
            'unit' => 'Jedinica',
        ],
    ],

    'settings' => [
        'title' => 'Postavke vodiča za veličine proizvoda',
        'description' => 'Podesite kako se vodiči za veličine prikazuju na stranicama proizvoda',

        'display' => 'Postavke prikaza',
        'display_mode' => 'Način prikaza',
        'display_mode_inline' => 'U retku',
        'display_mode_popup' => 'Skočni prozor (modalni)',
        'display_mode_conditional' => 'Uvjetno',
        'display_mode_help' => 'Odaberite kako će se vodič za veličine pojaviti na stranicama proizvoda',

        'row_threshold' => 'Prag redaka (za uvjetni način)',
        'row_threshold_help' => 'Tablice s više redaka od ove vrijednosti otvorit će se u skočnom prozoru',

        'button_text' => 'Tekst gumba',
        'button_text_placeholder' => 'Vodič za veličine',
        'button_text_help' => 'Tekst prikazan na poveznici/gumbu vodiča za veličine',

        'inline_expanded' => 'Zadano prošireno (način u retku)',
        'inline_expanded_help' => 'Prikazujte vodič za veličine u načinu u retku zadano proširen. Ako nije označeno, bit će sažet s gumbom za prebacivanje.',

        'modal_title' => 'Naslov modalnog prozora',
        'modal_title_placeholder' => 'Vodič za veličine',
        'modal_title_help' => 'Naslov prikazan u modalnom prozoru',

        'appearance' => 'Postavke izgleda',
        'show_image' => 'Prikaži sliku',
        'show_image_help' => 'Prikažite sliku vodiča za veličine iznad tablice',

        'link_color' => 'Boja poveznice',
        'link_color_help' => 'Boja teksta poveznice vodiča za veličine (način u retku)',
        'header_bg_color' => 'Boja pozadine zaglavlja',
        'header_bg_color_help' => 'Boja pozadine zaglavlja tablice',
        'header_text_color' => 'Boja teksta zaglavlja',
        'header_text_color_help' => 'Boja teksta zaglavlja tablice',
        'row_bg_color' => 'Boja pozadine redaka',
        'row_bg_color_help' => 'Boja pozadine redaka tablice',
        'row_alt_bg_color' => 'Alternativna boja pozadine redaka',
        'row_alt_bg_color_help' => 'Boja pozadine za naizmjenične (prugaste) redke',
        'row_text_color' => 'Boja teksta redaka',
        'row_text_color_help' => 'Boja teksta redaka tablice',
        'border_color' => 'Boja obruba',
        'border_color_help' => 'Boja obruba tablice',
        'table_styles' => 'Stilovi tablice',
        'table_styles_help' => 'Odaberite Bootstrap klase koje će se primijeniti na tablicu vodiča za veličine.',
        'table_style_bordered' => 'S obrubom (table-bordered)',
        'table_style_striped' => 'Prugaste vrste (table-striped)',
        'table_style_hover' => 'Efekt pri prelasku mišem (table-hover)',
        'table_style_small' => 'Kompaktna tablica (table-sm)',
        'font_size' => 'Veličina fonta (px)',
        'font_size_help' => 'Veličina fonta teksta u tablici u pikselima',
        'border_radius' => 'Radijus zaobljenja (px)',
        'border_radius_help' => 'Radijus zaobljenja kutova tablice u pikselima',
    ],

    'metabox' => [
        'title' => 'Vodič za veličine proizvoda',
        'select_size_guide' => 'Odaberite vodič za veličine',
        'select_size_guide_placeholder' => '-- Odaberite vodič za veličine --',
        'no_size_guide' => 'Nema vodiča za veličine',
        'help_text' => 'Dodijelite vodič za veličine ovom :type. To će zamijeniti svaki vodič naslijeđen iz kategorije ili brenda.',
        'help_text_category' => 'Svi proizvodi u ovoj kategoriji naslijedit će ovaj vodič za veličine (osim ako nije zamijenjen na razini proizvoda).',
        'help_text_brand' => 'Svi proizvodi ovog brenda naslijedit će ovaj vodič za veličine (osim ako nije zamijenjen na razini proizvoda ili kategorije).',
    ],

    'frontend' => [
        'view_size_guide' => 'Prikaži vodič za veličine',
        'close' => 'Zatvori',
    ],

    'messages' => [
        'created' => 'Vodič za veličine je uspješno izrađen',
        'updated' => 'Vodič za veličine je uspješno ažuriran',
        'deleted' => 'Vodič za veličine je uspješno izbrisan',
        'settings_saved' => 'Postavke su uspješno spremljene',
    ],
];
