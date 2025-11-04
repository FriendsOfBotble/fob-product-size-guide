<?php

return [
    'name' => 'Przewodniki po rozmiarach produktów',
    'size_guide' => 'Przewodnik po rozmiarach',
    'size_guides' => 'Przewodniki po rozmiarach',
    'create' => 'Nowy przewodnik po rozmiarach',
    'edit' => 'Edytuj przewodnik po rozmiarach',
    'settings_menu' => 'Ustawienia',

    'form' => [
        'name' => 'Nazwa',
        'name_placeholder' => 'Wprowadź nazwę przewodnika po rozmiarach',
        'description' => 'Opis',
        'description_placeholder' => 'Wprowadź opis (opcjonalnie)',
        'image' => 'Obraz',
        'image_helper' => 'Prześlij schemat przewodnika po rozmiarach lub obraz referencyjny',
        'table_builder' => 'Kreator tabel',
        'table_builder_helper' => 'Utwórz tabelę przewodnika po rozmiarach, dodając kolumny i wiersze',
        'status' => 'Status',
        'order' => 'Kolejność',
        'order_helper' => 'Niższe numery pojawiają się jako pierwsze',
    ],

    'table' => [
        'id' => 'ID',
        'name' => 'Nazwa',
        'image' => 'Obraz',
        'rows_count' => 'Wiersze',
        'status' => 'Status',
        'created_at' => 'Utworzono',
    ],

    'table_builder' => [
        'add_column' => 'Dodaj kolumnę',
        'add_row' => 'Dodaj wiersz',
        'column_header' => 'Nagłówek kolumny',
        'select_header' => 'Wybierz nagłówek kolumny',
        'no_columns' => 'Brak kolumn. Kliknij „Dodaj kolumnę”, aby rozpocząć.',
        'no_rows' => 'Brak wierszy. Kliknij „Dodaj wiersz”, aby dodać dane.',
    ],

    'headers' => [
        'name' => 'Nagłówki przewodnika po rozmiarach',
        'create' => 'Nowy nagłówek',
        'edit' => 'Edytuj nagłówek',
        'category' => 'Kategoria',
        'categories' => [
            'general' => 'Ogólne',
            'size' => 'Rozmiar',
            'measurement' => 'Pomiary',
            'unit' => 'Jednostka',
        ],
    ],

    'settings' => [
        'title' => 'Ustawienia przewodnika po rozmiarach produktu',
        'description' => 'Skonfiguruj sposób wyświetlania przewodników po rozmiarach na stronach produktów',

        'display' => 'Ustawienia wyświetlania',
        'display_mode' => 'Tryb wyświetlania',
        'display_mode_inline' => 'W linii',
        'display_mode_popup' => 'Wyskakujące okno (modalne)',
        'display_mode_conditional' => 'Warunkowy',
        'display_mode_help' => 'Wybierz, jak przewodnik po rozmiarach ma się pojawiać na stronach produktów',

        'row_threshold' => 'Próg wierszy (dla trybu warunkowego)',
        'row_threshold_help' => 'Tabele z liczbą wierszy większą niż ta wartość zostaną otwarte w oknie pop-up',

        'button_text' => 'Tekst przycisku',
        'button_text_placeholder' => 'Przewodnik po rozmiarach',
        'button_text_help' => 'Tekst wyświetlany na linku/przycisku przewodnika po rozmiarach',

        'inline_expanded' => 'Domyślnie rozwinięty (tryb w linii)',
        'inline_expanded_help' => 'Wyświetlaj przewodnik po rozmiarach domyślnie rozwinięty w trybie w linii. Jeśli odznaczysz, będzie zwinięty i dostępny po kliknięciu przycisku.',

        'modal_title' => 'Tytuł okna modalnego',
        'modal_title_placeholder' => 'Przewodnik po rozmiarach',
        'modal_title_help' => 'Tytuł wyświetlany w oknie modalnym',

        'appearance' => 'Ustawienia wyglądu',
        'show_image' => 'Pokaż obraz',
        'show_image_help' => 'Wyświetl obraz przewodnika po rozmiarach nad tabelą',

        'link_color' => 'Kolor linku',
        'link_color_help' => 'Kolor tekstu linku przewodnika po rozmiarach (tryb w linii)',
        'header_bg_color' => 'Kolor tła nagłówka',
        'header_bg_color_help' => 'Kolor tła nagłówka tabeli',
        'header_text_color' => 'Kolor tekstu nagłówka',
        'header_text_color_help' => 'Kolor tekstu nagłówka tabeli',
        'row_bg_color' => 'Kolor tła wierszy',
        'row_bg_color_help' => 'Kolor tła wierszy tabeli',
        'row_alt_bg_color' => 'Alternatywny kolor tła wierszy',
        'row_alt_bg_color_help' => 'Kolor tła dla naprzemiennych (paskowanych) wierszy',
        'row_text_color' => 'Kolor tekstu wierszy',
        'row_text_color_help' => 'Kolor tekstu wierszy tabeli',
        'border_color' => 'Kolor obramowania',
        'border_color_help' => 'Kolor obramowań tabeli',
        'table_styles' => 'Style tabeli',
        'table_styles_help' => 'Wybierz klasy tabel Bootstrap, które mają zostać zastosowane do przewodnika po rozmiarach.',
        'table_style_bordered' => 'Z obramowaniem (table-bordered)',
        'table_style_striped' => 'Wiersze naprzemienne (table-striped)',
        'table_style_hover' => 'Efekt podświetlenia przy najechaniu (table-hover)',
        'table_style_small' => 'Kompaktowa tabela (table-sm)',
        'font_size' => 'Rozmiar czcionki (px)',
        'font_size_help' => 'Rozmiar czcionki tekstu w tabeli w pikselach',
        'border_radius' => 'Promień zaokrąglenia (px)',
        'border_radius_help' => 'Promień zaokrąglenia rogów tabeli w pikselach',
    ],

    'metabox' => [
        'title' => 'Przewodnik po rozmiarach produktu',
        'select_size_guide' => 'Wybierz przewodnik po rozmiarach',
        'select_size_guide_placeholder' => '-- Wybierz przewodnik po rozmiarach --',
        'no_size_guide' => 'Brak przewodnika po rozmiarach',
        'help_text' => 'Przypisz przewodnik po rozmiarach do tego :type. Zastąpi on każdy przewodnik odziedziczony z kategorii lub marki.',
        'help_text_category' => 'Wszystkie produkty w tej kategorii odziedziczą ten przewodnik po rozmiarach (chyba że zostanie zastąpiony na poziomie produktu).',
        'help_text_brand' => 'Wszystkie produkty tej marki odziedziczą ten przewodnik po rozmiarach (chyba że zostanie zastąpiony na poziomie produktu lub kategorii).',
    ],

    'frontend' => [
        'view_size_guide' => 'Zobacz przewodnik po rozmiarach',
        'close' => 'Zamknij',
    ],

    'messages' => [
        'created' => 'Przewodnik po rozmiarach utworzono pomyślnie',
        'updated' => 'Przewodnik po rozmiarach zaktualizowano pomyślnie',
        'deleted' => 'Przewodnik po rozmiarach usunięto pomyślnie',
        'settings_saved' => 'Ustawienia zapisano pomyślnie',
    ],
];
