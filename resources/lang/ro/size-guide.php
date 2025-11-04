<?php

return [
    'name' => 'Ghiduri de mărimi pentru produse',
    'size_guide' => 'Ghid de mărimi',
    'size_guides' => 'Ghiduri de mărimi',
    'create' => 'Ghid de mărimi nou',
    'edit' => 'Editează ghidul de mărimi',
    'settings_menu' => 'Setări',

    'form' => [
        'name' => 'Nume',
        'name_placeholder' => 'Introduceți numele ghidului de mărimi',
        'description' => 'Descriere',
        'description_placeholder' => 'Introduceți o descriere (opțional)',
        'image' => 'Imagine',
        'image_helper' => 'Încărcați un diagramă sau o imagine de referință pentru ghidul de mărimi',
        'table_builder' => 'Constructor de tabele',
        'table_builder_helper' => 'Creați tabelul ghidului de mărimi adăugând coloane și rânduri',
        'status' => 'Status',
        'order' => 'Ordine',
        'order_helper' => 'Numerele mai mici apar primele',
    ],

    'table' => [
        'id' => 'ID',
        'name' => 'Nume',
        'image' => 'Imagine',
        'rows_count' => 'Rânduri',
        'status' => 'Status',
        'created_at' => 'Creat la',
    ],

    'table_builder' => [
        'add_column' => 'Adaugă coloană',
        'add_row' => 'Adaugă rând',
        'column_header' => 'Antet coloană',
        'select_header' => 'Selectați antetul coloanei',
        'no_columns' => 'Nu există încă coloane. Faceți clic pe „Adaugă coloană” pentru a începe.',
        'no_rows' => 'Nu există încă rânduri. Faceți clic pe „Adaugă rând” pentru a adăuga date.',
    ],

    'headers' => [
        'name' => 'Antete ghid de mărimi',
        'create' => 'Antet nou',
        'edit' => 'Editează antetul',
        'category' => 'Categorie',
        'categories' => [
            'general' => 'General',
            'size' => 'Mărime',
            'measurement' => 'Măsurătoare',
            'unit' => 'Unitate',
        ],
    ],

    'settings' => [
        'title' => 'Setări pentru ghidul de mărimi al produsului',
        'description' => 'Configurați modul în care ghidurile de mărimi sunt afișate pe paginile de produs',

        'display' => 'Setări de afișare',
        'display_mode' => 'Mod de afișare',
        'display_mode_inline' => 'În pagină',
        'display_mode_popup' => 'Popup (modal)',
        'display_mode_conditional' => 'Condițional',
        'display_mode_help' => 'Alegeți modul de afișare a ghidului de mărimi pe paginile de produs',

        'row_threshold' => 'Prag de rânduri (pentru modul condițional)',
        'row_threshold_help' => 'Tabelele cu mai multe rânduri decât această valoare se vor deschide într-un popup',

        'button_text' => 'Text buton',
        'button_text_placeholder' => 'Ghid de mărimi',
        'button_text_help' => 'Textul afișat pe linkul/butonul ghidului de mărimi',

        'inline_expanded' => 'Extins implicit (mod în pagină)',
        'inline_expanded_help' => 'Afișați ghidul de mărimi extins implicit în modul în pagină. Dacă nu este bifat, va fi restrâns cu un buton de comutare.',

        'modal_title' => 'Titlu modal',
        'modal_title_placeholder' => 'Ghid de mărimi',
        'modal_title_help' => 'Titlul afișat în fereastra modală popup',

        'appearance' => 'Setări de aspect',
        'show_image' => 'Afișează imagine',
        'show_image_help' => 'Afișați imaginea ghidului de mărimi deasupra tabelului',

        'link_color' => 'Culoare link',
        'link_color_help' => 'Culoarea textului linkului ghidului de mărimi (mod în pagină)',
        'header_bg_color' => 'Culoare fundal antet',
        'header_bg_color_help' => 'Culoarea de fundal pentru antetul tabelului',
        'header_text_color' => 'Culoare text antet',
        'header_text_color_help' => 'Culoarea textului antetului tabelului',
        'row_bg_color' => 'Culoare fundal rânduri',
        'row_bg_color_help' => 'Culoarea de fundal pentru rândurile tabelului',
        'row_alt_bg_color' => 'Culoare alternativă rânduri',
        'row_alt_bg_color_help' => 'Culoarea de fundal pentru rândurile alternative (dungi)',
        'row_text_color' => 'Culoare text rânduri',
        'row_text_color_help' => 'Culoarea textului pentru rândurile tabelului',
        'border_color' => 'Culoare contur',
        'border_color_help' => 'Culoarea contururilor tabelului',
        'table_styles' => 'Stiluri ale tabelului',
        'table_styles_help' => 'Alegeți clasele de tabel Bootstrap care se aplică ghidului de mărimi.',
        'table_style_bordered' => 'Cu chenar (table-bordered)',
        'table_style_striped' => 'Rânduri alternante (table-striped)',
        'table_style_hover' => 'Efect la trecerea cursorului (table-hover)',
        'table_style_small' => 'Tabel compact (table-sm)',
        'font_size' => 'Mărime font (px)',
        'font_size_help' => 'Mărimea fontului textului din tabel în pixeli',
        'border_radius' => 'Rază colț (px)',
        'border_radius_help' => 'Raza colțurilor tabelului în pixeli',
    ],

    'metabox' => [
        'title' => 'Ghid de mărimi al produsului',
        'select_size_guide' => 'Selectați ghidul de mărimi',
        'select_size_guide_placeholder' => '-- Selectați un ghid de mărimi --',
        'no_size_guide' => 'Nu există ghid de mărimi',
        'help_text' => 'Alocați un ghid de mărimi pentru acest :type. Acesta va înlocui orice ghid moștenit din categorie sau brand.',
        'help_text_category' => 'Toate produsele din această categorie vor moșteni acest ghid (cu excepția cazului în care este suprascris la nivel de produs).',
        'help_text_brand' => 'Toate produsele acestui brand vor moșteni acest ghid (cu excepția cazului în care este suprascris la nivel de produs sau categorie).',
    ],

    'frontend' => [
        'view_size_guide' => 'Vezi ghidul de mărimi',
        'close' => 'Închide',
    ],

    'messages' => [
        'created' => 'Ghidul de mărimi a fost creat cu succes',
        'updated' => 'Ghidul de mărimi a fost actualizat cu succes',
        'deleted' => 'Ghidul de mărimi a fost șters cu succes',
        'settings_saved' => 'Setările au fost salvate cu succes',
    ],
];
