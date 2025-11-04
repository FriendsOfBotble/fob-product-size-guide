<?php

return [
    'name' => 'Produktų dydžių vadovai',
    'size_guide' => 'Dydžių vadovas',
    'size_guides' => 'Dydžių vadovai',
    'create' => 'Naujas dydžių vadovas',
    'edit' => 'Redaguoti dydžių vadovą',
    'settings_menu' => 'Nustatymai',

    'form' => [
        'name' => 'Pavadinimas',
        'name_placeholder' => 'Įveskite dydžių vadovo pavadinimą',
        'description' => 'Aprašymas',
        'description_placeholder' => 'Įveskite aprašymą (pasirinktinai)',
        'image' => 'Atvaizdas',
        'image_helper' => 'Įkelkite dydžių vadovo diagramą arba pavyzdinį vaizdą',
        'table_builder' => 'Lentelės kūrėjas',
        'table_builder_helper' => 'Sukurkite dydžių lentelę pridėdami stulpelius ir eilutes',
        'status' => 'Būsena',
        'order' => 'Tvarka',
        'order_helper' => 'Mažesni numeriai rodomi pirmiausia',
    ],

    'table' => [
        'id' => 'ID',
        'name' => 'Pavadinimas',
        'image' => 'Atvaizdas',
        'rows_count' => 'Eilutės',
        'status' => 'Būsena',
        'created_at' => 'Sukurta',
    ],

    'table_builder' => [
        'add_column' => 'Pridėti stulpelį',
        'add_row' => 'Pridėti eilutę',
        'column_header' => 'Stulpelio antraštė',
        'select_header' => 'Pasirinkite stulpelio antraštę',
        'no_columns' => 'Kol kas nėra stulpelių. Spustelėkite „Pridėti stulpelį“, kad pradėtumėte.',
        'no_rows' => 'Kol kas nėra eilučių. Spustelėkite „Pridėti eilutę“, kad pridėtumėte duomenų.',
    ],

    'headers' => [
        'name' => 'Dydžių vadovo antraštės',
        'create' => 'Nauja antraštė',
        'edit' => 'Redaguoti antraštę',
        'category' => 'Kategorija',
        'categories' => [
            'general' => 'Bendra',
            'size' => 'Dydis',
            'measurement' => 'Matavimas',
            'unit' => 'Vienetas',
        ],
    ],

    'settings' => [
        'title' => 'Produkto dydžių vadovo nustatymai',
        'description' => 'Nustatykite, kaip dydžių vadovai rodomi produktų puslapiuose',

        'display' => 'Rodymo nustatymai',
        'display_mode' => 'Rodymo režimas',
        'display_mode_inline' => 'Įterptas',
        'display_mode_popup' => 'Iškylantis (modalinis)',
        'display_mode_conditional' => 'Sąlyginis',
        'display_mode_help' => 'Pasirinkite, kaip dydžių vadovas bus rodomas produktų puslapiuose',

        'row_threshold' => 'Eilučių riba (sąlyginiam režimui)',
        'row_threshold_help' => 'Lentelės, turinčios daugiau eilučių nei ši riba, bus atidarytos iškylančiame lange',

        'button_text' => 'Mygtuko tekstas',
        'button_text_placeholder' => 'Dydžių vadovas',
        'button_text_help' => 'Tekstas, rodomas dydžių vadovo nuorodoje/mygtuke',

        'inline_expanded' => 'Pagal numatymą išskleistas (įterptas režimas)',
        'inline_expanded_help' => 'Rodykite dydžių vadovą pagal numatymą išskleistą įterptame režime. Jei nepažymėta, jis bus suskleistas ir turės jungiklį.',

        'modal_title' => 'Modalinio lango pavadinimas',
        'modal_title_placeholder' => 'Dydžių vadovas',
        'modal_title_help' => 'Pavadinimas, rodomas iškylančiame modaliniame lange',

        'appearance' => 'Išvaizdos nustatymai',
        'show_image' => 'Rodyti atvaizdą',
        'show_image_help' => 'Rodykite dydžių vadovo atvaizdą virš lentelės',

        'link_color' => 'Nuorodos spalva',
        'link_color_help' => 'Dydžių vadovo nuorodos teksto spalva (įterptas režimas)',
        'header_bg_color' => 'Antraštės fono spalva',
        'header_bg_color_help' => 'Lentelės antraštės fono spalva',
        'header_text_color' => 'Antraštės teksto spalva',
        'header_text_color_help' => 'Lentelės antraštės teksto spalva',
        'row_bg_color' => 'Eilučių fono spalva',
        'row_bg_color_help' => 'Lentelės eilučių fono spalva',
        'row_alt_bg_color' => 'Alternatyvi eilučių fono spalva',
        'row_alt_bg_color_help' => 'Alternuojančių (dryžuotų) eilučių fono spalva',
        'row_text_color' => 'Eilučių teksto spalva',
        'row_text_color_help' => 'Lentelės eilučių teksto spalva',
        'border_color' => 'Rėmelio spalva',
        'border_color_help' => 'Lentelės rėmelių spalva',
        'table_styles' => 'Lentelės stiliai',
        'table_styles_help' => 'Pasirinkite Bootstrap lentelės klases dydžių vadovo lentelei.',
        'table_style_bordered' => 'Su rėmeliu (table-bordered)',
        'table_style_striped' => 'Dryžuotos eilutės (table-striped)',
        'table_style_hover' => 'Efektas užvedus (table-hover)',
        'table_style_small' => 'Kompaktiška lentelė (table-sm)',
        'font_size' => 'Šrifto dydis (px)',
        'font_size_help' => 'Lentelės teksto šrifto dydis pikseliais',
        'border_radius' => 'Kampų spindulys (px)',
        'border_radius_help' => 'Lentelės kampų suapvalinimas pikseliais',
    ],

    'metabox' => [
        'title' => 'Produkto dydžių vadovas',
        'select_size_guide' => 'Pasirinkite dydžių vadovą',
        'select_size_guide_placeholder' => '-- Pasirinkite dydžių vadovą --',
        'no_size_guide' => 'Nėra dydžių vadovo',
        'help_text' => 'Priskirkite šiam :type dydžių vadovą. Tai pakeis iš kategorijos ar prekės ženklo paveldėtą vadovą.',
        'help_text_category' => 'Visi šios kategorijos produktai paveldės šį vadovą (jei jis nebus pakeistas produkto lygiu).',
        'help_text_brand' => 'Visi šio prekės ženklo produktai paveldės šį vadovą (jei jis nebus pakeistas produkto ar kategorijos lygiu).',
    ],

    'frontend' => [
        'view_size_guide' => 'Peržiūrėti dydžių vadovą',
        'close' => 'Uždaryti',
    ],

    'messages' => [
        'created' => 'Dydžių vadovas sėkmingai sukurtas',
        'updated' => 'Dydžių vadovas sėkmingai atnaujintas',
        'deleted' => 'Dydžių vadovas sėkmingai ištrintas',
        'settings_saved' => 'Nustatymai sėkmingai išsaugoti',
    ],
];
