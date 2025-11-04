<?php

return [
    'name' => 'Guide alle taglie dei prodotti',
    'size_guide' => 'Guida alle taglie',
    'size_guides' => 'Guide alle taglie',
    'create' => 'Nuova guida alle taglie',
    'edit' => 'Modifica guida alle taglie',
    'settings_menu' => 'Impostazioni',

    'form' => [
        'name' => 'Nome',
        'name_placeholder' => 'Inserisci il nome della guida alle taglie',
        'description' => 'Descrizione',
        'description_placeholder' => 'Inserisci una descrizione (opzionale)',
        'image' => 'Immagine',
        'image_helper' => 'Carica un diagramma della guida alle taglie o un\'immagine di riferimento',
        'table_builder' => 'Generatore di tabelle',
        'table_builder_helper' => 'Crea la tua tabella della guida alle taglie aggiungendo colonne e righe',
        'status' => 'Stato',
        'order' => 'Ordine',
        'order_helper' => 'I numeri più bassi appaiono per primi',
    ],

    'table' => [
        'id' => 'ID',
        'name' => 'Nome',
        'image' => 'Immagine',
        'rows_count' => 'Righe',
        'status' => 'Stato',
        'created_at' => 'Creato il',
    ],

    'table_builder' => [
        'add_column' => 'Aggiungi colonna',
        'add_row' => 'Aggiungi riga',
        'column_header' => 'Intestazione della colonna',
        'select_header' => 'Seleziona l\'intestazione della colonna',
        'no_columns' => 'Non ci sono ancora colonne. Fai clic su "Aggiungi colonna" per iniziare.',
        'no_rows' => 'Non ci sono ancora righe. Fai clic su "Aggiungi riga" per aggiungere dati.',
    ],

    'headers' => [
        'name' => 'Intestazioni della guida alle taglie',
        'create' => 'Nuova intestazione',
        'edit' => 'Modifica intestazione',
        'category' => 'Categoria',
        'categories' => [
            'general' => 'Generale',
            'size' => 'Taglia',
            'measurement' => 'Misura',
            'unit' => 'Unità',
        ],
    ],

    'settings' => [
        'title' => 'Impostazioni della guida alle taglie del prodotto',
        'description' => 'Configura come vengono mostrate le guide alle taglie nelle pagine prodotto',

        'display' => 'Impostazioni di visualizzazione',
        'display_mode' => 'Modalità di visualizzazione',
        'display_mode_inline' => 'In linea',
        'display_mode_popup' => 'Popup (modale)',
        'display_mode_conditional' => 'Condizionale',
        'display_mode_help' => 'Scegli come deve apparire la guida alle taglie nelle pagine prodotto',

        'row_threshold' => 'Soglia di righe (per modalità condizionale)',
        'row_threshold_help' => 'Le tabelle con più righe di questo valore si apriranno in un popup',

        'button_text' => 'Testo del pulsante',
        'button_text_placeholder' => 'Guida alle taglie',
        'button_text_help' => 'Testo mostrato nel link/pulsante della guida alle taglie',

        'inline_expanded' => 'Espansa per impostazione predefinita (modalità in linea)',
        'inline_expanded_help' => 'Mostra la guida alle taglie espansa per impostazione predefinita in modalità in linea. Se non selezionata, verrà compressa con un pulsante di attivazione.',

        'modal_title' => 'Titolo della modale',
        'modal_title_placeholder' => 'Guida alle taglie',
        'modal_title_help' => 'Titolo mostrato nella finestra modale',

        'appearance' => 'Impostazioni di aspetto',
        'show_image' => 'Mostra immagine',
        'show_image_help' => 'Mostra l\'immagine della guida alle taglie sopra la tabella',

        'link_color' => 'Colore del link',
        'link_color_help' => 'Colore del testo del link della guida alle taglie (modalità in linea)',
        'header_bg_color' => 'Colore di sfondo dell\'intestazione',
        'header_bg_color_help' => 'Colore di sfondo per l\'intestazione della tabella',
        'header_text_color' => 'Colore del testo dell\'intestazione',
        'header_text_color_help' => 'Colore del testo per l\'intestazione della tabella',
        'row_bg_color' => 'Colore di sfondo delle righe',
        'row_bg_color_help' => 'Colore di sfondo per le righe della tabella',
        'row_alt_bg_color' => 'Colore alternativo di sfondo delle righe',
        'row_alt_bg_color_help' => 'Colore di sfondo per le righe alternate (a righe)',
        'row_text_color' => 'Colore del testo delle righe',
        'row_text_color_help' => 'Colore del testo per le righe della tabella',
        'border_color' => 'Colore del bordo',
        'border_color_help' => 'Colore dei bordi della tabella',
        'table_styles' => 'Stili della tabella',
        'table_styles_help' => 'Seleziona le classi Bootstrap da applicare alla tabella della guida alle taglie.',
        'table_style_bordered' => 'Con bordi (table-bordered)',
        'table_style_striped' => 'Righe alternate (table-striped)',
        'table_style_hover' => 'Effetto hover (table-hover)',
        'table_style_small' => 'Tabella compatta (table-sm)',
        'font_size' => 'Dimensione del carattere (px)',
        'font_size_help' => 'Dimensione del carattere del testo della tabella in pixel',
        'border_radius' => 'Raggio del bordo (px)',
        'border_radius_help' => 'Raggio del bordo per gli angoli della tabella in pixel',
    ],

    'metabox' => [
        'title' => 'Guida alle taglie del prodotto',
        'select_size_guide' => 'Seleziona guida alle taglie',
        'select_size_guide_placeholder' => '-- Seleziona una guida alle taglie --',
        'no_size_guide' => 'Nessuna guida alle taglie',
        'help_text' => 'Assegna una guida alle taglie a questo :type. Questo sovrascriverà qualsiasi guida alle taglie ereditata dalla categoria o dal marchio.',
        'help_text_category' => 'Tutti i prodotti in questa categoria erediteranno questa guida alle taglie (a meno che non venga sovrascritta a livello di prodotto).',
        'help_text_brand' => 'Tutti i prodotti di questo marchio erediteranno questa guida alle taglie (a meno che non venga sovrascritta a livello di prodotto o di categoria).',
    ],

    'frontend' => [
        'view_size_guide' => 'Visualizza la guida alle taglie',
        'close' => 'Chiudi',
    ],

    'messages' => [
        'created' => 'Guida alle taglie creata con successo',
        'updated' => 'Guida alle taglie aggiornata con successo',
        'deleted' => 'Guida alle taglie eliminata con successo',
        'settings_saved' => 'Impostazioni salvate con successo',
    ],
];
