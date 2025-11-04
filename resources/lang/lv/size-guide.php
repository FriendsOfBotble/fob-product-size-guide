<?php

return [
    'name' => 'Produktu izmēru ceļveži',
    'size_guide' => 'Izmēru ceļvedis',
    'size_guides' => 'Izmēru ceļveži',
    'create' => 'Jauns izmēru ceļvedis',
    'edit' => 'Rediģēt izmēru ceļvedi',
    'settings_menu' => 'Iestatījumi',

    'form' => [
        'name' => 'Nosaukums',
        'name_placeholder' => 'Ievadiet izmēru ceļveža nosaukumu',
        'description' => 'Apraksts',
        'description_placeholder' => 'Ievadiet aprakstu (pēc izvēles)',
        'image' => 'Attēls',
        'image_helper' => 'Augšupielādējiet izmēru ceļveža diagrammu vai atsauces attēlu',
        'table_builder' => 'Tabulas veidotājs',
        'table_builder_helper' => 'Izveidojiet izmēru tabulu, pievienojot kolonnas un rindas',
        'status' => 'Statuss',
        'order' => 'Secība',
        'order_helper' => 'Mazāki skaitļi tiek parādīti vispirms',
    ],

    'table' => [
        'id' => 'ID',
        'name' => 'Nosaukums',
        'image' => 'Attēls',
        'rows_count' => 'Rindas',
        'status' => 'Statuss',
        'created_at' => 'Izveidots',
    ],

    'table_builder' => [
        'add_column' => 'Pievienot kolonnu',
        'add_row' => 'Pievienot rindu',
        'column_header' => 'Kolonnas virsraksts',
        'select_header' => 'Izvēlieties kolonnas virsrakstu',
        'no_columns' => 'Vēl nav kolonnu. Noklikšķiniet uz "Pievienot kolonnu", lai sāktu.',
        'no_rows' => 'Vēl nav rindu. Noklikšķiniet uz "Pievienot rindu", lai pievienotu datus.',
    ],

    'headers' => [
        'name' => 'Izmēru ceļveža galvenes',
        'create' => 'Jauna galvene',
        'edit' => 'Rediģēt galveni',
        'category' => 'Kategorija',
        'categories' => [
            'general' => 'Vispārīgi',
            'size' => 'Izmērs',
            'measurement' => 'Mērījums',
            'unit' => 'Vienība',
        ],
    ],

    'settings' => [
        'title' => 'Produkta izmēru ceļveža iestatījumi',
        'description' => 'Konfigurējiet, kā izmēru ceļveži tiek rādīti produktu lapās',

        'display' => 'Attēlošanas iestatījumi',
        'display_mode' => 'Attēlošanas režīms',
        'display_mode_inline' => 'Iekļauts tekstā',
        'display_mode_popup' => 'Uznirstošais logs (modalais)',
        'display_mode_conditional' => 'Nosacīts',
        'display_mode_help' => 'Izvēlieties, kā izmēru ceļvedis tiks parādīts produktu lapās',

        'row_threshold' => 'Rindu slieksnis (nosacītajam režīmam)',
        'row_threshold_help' => 'Tabulas ar vairāk rindām par šo daudzumu tiks atvērtas uznirstošajā logā',

        'button_text' => 'Pogas teksts',
        'button_text_placeholder' => 'Izmēru ceļvedis',
        'button_text_help' => 'Teksts, kas redzams izmēru ceļveža saitei/pogai',

        'inline_expanded' => 'Pēc noklusējuma izvērsts (iekļautais režīms)',
        'inline_expanded_help' => 'Rādīt izmēru ceļvedi pēc noklusējuma izvērstu iekļautajā režīmā. Ja nav atzīmēts, tas būs sakļauts ar pārslēgšanas pogu.',

        'modal_title' => 'Modālā loga nosaukums',
        'modal_title_placeholder' => 'Izmēru ceļvedis',
        'modal_title_help' => 'Nosaukums, kas redzams uznirstošajā logā',

        'appearance' => 'Izskata iestatījumi',
        'show_image' => 'Rādīt attēlu',
        'show_image_help' => 'Rādiet izmēru ceļveža attēlu virs tabulas',

        'link_color' => 'Saites krāsa',
        'link_color_help' => 'Izmēru ceļveža saites teksta krāsa (iekļautais režīms)',
        'header_bg_color' => 'Galvenes fona krāsa',
        'header_bg_color_help' => 'Tabulas galvenes fona krāsa',
        'header_text_color' => 'Galvenes teksta krāsa',
        'header_text_color_help' => 'Tabulas galvenes teksta krāsa',
        'row_bg_color' => 'Rindu fona krāsa',
        'row_bg_color_help' => 'Tabulas rindu fona krāsa',
        'row_alt_bg_color' => 'Alternatīvā rindu fona krāsa',
        'row_alt_bg_color_help' => 'Alternējošo (svītraino) rindu fona krāsa',
        'row_text_color' => 'Rindu teksta krāsa',
        'row_text_color_help' => 'Tabulas rindu teksta krāsa',
        'border_color' => 'Rāmja krāsa',
        'border_color_help' => 'Tabulas rāmju krāsa',
        'table_styles' => 'Tabulas stili',
        'table_styles_help' => 'Izvēlieties Bootstrap tabulas klases, ko piemērot izmēru ceļveža tabulai.',
        'table_style_bordered' => 'Ar kontūrām (table-bordered)',
        'table_style_striped' => 'Svītrainas rindas (table-striped)',
        'table_style_hover' => 'Efekts pie kursoru pārvietošanas (table-hover)',
        'table_style_small' => 'Kompakta tabula (table-sm)',
        'font_size' => 'Fonta lielums (px)',
        'font_size_help' => 'Tabulas teksta fonta lielums pikseļos',
        'border_radius' => 'Stūru noapaļojums (px)',
        'border_radius_help' => 'Tabulas stūru noapaļojuma rādiuss pikseļos',
    ],

    'metabox' => [
        'title' => 'Produkta izmēru ceļvedis',
        'select_size_guide' => 'Izvēlieties izmēru ceļvedi',
        'select_size_guide_placeholder' => '-- Izvēlieties izmēru ceļvedi --',
        'no_size_guide' => 'Nav izmēru ceļveža',
        'help_text' => 'Piešķiriet šo :type izmēru ceļvedi. Tas aizstās jebkuru no kategorijas vai zīmola pārmantoto ceļvedi.',
        'help_text_category' => 'Visi šīs kategorijas produkti mantos šo ceļvedi (ja vien tas netiek pārrakstīts produkta līmenī).',
        'help_text_brand' => 'Visi šī zīmola produkti mantos šo ceļvedi (ja vien tas netiek pārrakstīts produkta vai kategorijas līmenī).',
    ],

    'frontend' => [
        'view_size_guide' => 'Skatīt izmēru ceļvedi',
        'close' => 'Aizvērt',
    ],

    'messages' => [
        'created' => 'Izmēru ceļvedis veiksmīgi izveidots',
        'updated' => 'Izmēru ceļvedis veiksmīgi atjaunināts',
        'deleted' => 'Izmēru ceļvedis veiksmīgi dzēsts',
        'settings_saved' => 'Iestatījumi veiksmīgi saglabāti',
    ],
];
