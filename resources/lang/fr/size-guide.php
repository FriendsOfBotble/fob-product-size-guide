<?php

return [
    'name' => 'Guides des tailles de produits',
    'size_guide' => 'Guide des tailles',
    'size_guides' => 'Guides des tailles',
    'create' => 'Nouveau guide des tailles',
    'edit' => 'Modifier le guide des tailles',
    'settings_menu' => 'Paramètres',

    'form' => [
        'name' => 'Nom',
        'name_placeholder' => 'Saisissez le nom du guide des tailles',
        'description' => 'Description',
        'description_placeholder' => 'Saisissez une description (facultatif)',
        'image' => 'Image',
        'image_helper' => 'Téléchargez un schéma de guide des tailles ou une image de référence',
        'table_builder' => 'Générateur de tableaux',
        'table_builder_helper' => 'Créez votre tableau de guide des tailles en ajoutant des colonnes et des lignes',
        'status' => 'Statut',
        'order' => 'Ordre',
        'order_helper' => 'Les nombres les plus bas apparaissent en premier',
    ],

    'table' => [
        'id' => 'ID',
        'name' => 'Nom',
        'image' => 'Image',
        'rows_count' => 'Lignes',
        'status' => 'Statut',
        'created_at' => 'Créé le',
    ],

    'table_builder' => [
        'add_column' => 'Ajouter une colonne',
        'add_row' => 'Ajouter une ligne',
        'column_header' => 'En-tête de colonne',
        'select_header' => 'Sélectionnez l\'en-tête de colonne',
        'no_columns' => 'Aucune colonne pour le moment. Cliquez sur "Ajouter une colonne" pour commencer.',
        'no_rows' => 'Aucune ligne pour le moment. Cliquez sur "Ajouter une ligne" pour ajouter des données.',
    ],

    'headers' => [
        'name' => 'En-têtes du guide des tailles',
        'create' => 'Nouvel en-tête',
        'edit' => 'Modifier l\'en-tête',
        'category' => 'Catégorie',
        'categories' => [
            'general' => 'Général',
            'size' => 'Taille',
            'measurement' => 'Mesure',
            'unit' => 'Unité',
        ],
    ],

    'settings' => [
        'title' => 'Paramètres du guide des tailles produit',
        'description' => 'Configurez l\'affichage des guides des tailles sur les pages produit',

        'display' => 'Paramètres d\'affichage',
        'display_mode' => 'Mode d\'affichage',
        'display_mode_inline' => 'Intégré',
        'display_mode_popup' => 'Fenêtre contextuelle (modal)',
        'display_mode_conditional' => 'Conditionnel',
        'display_mode_help' => 'Choisissez comment le guide des tailles apparaît sur les pages produit',

        'row_threshold' => 'Seuil de lignes (pour le mode conditionnel)',
        'row_threshold_help' => 'Les tableaux comptant plus de ce nombre de lignes s\'ouvriront dans une fenêtre contextuelle',

        'button_text' => 'Texte du bouton',
        'button_text_placeholder' => 'Guide des tailles',
        'button_text_help' => 'Texte affiché sur le lien/bouton du guide des tailles',

        'inline_expanded' => 'Développé par défaut (mode intégré)',
        'inline_expanded_help' => 'Afficher le guide des tailles développé par défaut en mode intégré. Si décoché, il sera replié avec un bouton de bascule.',

        'modal_title' => 'Titre du modal',
        'modal_title_placeholder' => 'Guide des tailles',
        'modal_title_help' => 'Titre affiché dans la fenêtre modale',

        'appearance' => 'Paramètres d\'apparence',
        'show_image' => 'Afficher l\'image',
        'show_image_help' => 'Afficher l\'image du guide des tailles au-dessus du tableau',

        'link_color' => 'Couleur du lien',
        'link_color_help' => 'Couleur du texte du lien du guide des tailles (mode intégré)',
        'header_bg_color' => 'Couleur du fond de l\'en-tête',
        'header_bg_color_help' => 'Couleur de fond pour l\'en-tête du tableau',
        'header_text_color' => 'Couleur du texte de l\'en-tête',
        'header_text_color_help' => 'Couleur du texte pour l\'en-tête du tableau',
        'row_bg_color' => 'Couleur de fond des lignes',
        'row_bg_color_help' => 'Couleur de fond pour les lignes du tableau',
        'row_alt_bg_color' => 'Couleur de fond alternée des lignes',
        'row_alt_bg_color_help' => 'Couleur de fond pour les lignes alternées (zébrées)',
        'row_text_color' => 'Couleur du texte des lignes',
        'row_text_color_help' => 'Couleur du texte pour les lignes du tableau',
        'border_color' => 'Couleur de la bordure',
        'border_color_help' => 'Couleur des bordures du tableau',
        'table_styles' => 'Styles de tableau',
        'table_styles_help' => 'Choisissez les classes de tableau Bootstrap à appliquer au guide des tailles.',
        'table_style_bordered' => 'Avec bordures (table-bordered)',
        'table_style_striped' => 'Lignes alternées (table-striped)',
        'table_style_hover' => 'Effet au survol (table-hover)',
        'table_style_small' => 'Table compacte (table-sm)',
        'font_size' => 'Taille de la police (px)',
        'font_size_help' => 'Taille de police du texte du tableau en pixels',
        'border_radius' => 'Rayon de bordure (px)',
        'border_radius_help' => 'Rayon de bordure des angles du tableau en pixels',
    ],

    'metabox' => [
        'title' => 'Guide des tailles produit',
        'select_size_guide' => 'Sélectionner un guide des tailles',
        'select_size_guide_placeholder' => '-- Sélectionnez un guide des tailles --',
        'no_size_guide' => 'Aucun guide des tailles',
        'help_text' => 'Attribuez un guide des tailles à ce :type. Cela remplacera tout guide des tailles hérité d\'une catégorie ou d\'une marque.',
        'help_text_category' => 'Tous les produits de cette catégorie hériteront de ce guide des tailles (sauf s\'il est remplacé au niveau du produit).',
        'help_text_brand' => 'Tous les produits de cette marque hériteront de ce guide des tailles (sauf s\'il est remplacé au niveau du produit ou de la catégorie).',
    ],

    'frontend' => [
        'view_size_guide' => 'Voir le guide des tailles',
        'close' => 'Fermer',
    ],

    'messages' => [
        'created' => 'Guide des tailles créé avec succès',
        'updated' => 'Guide des tailles mis à jour avec succès',
        'deleted' => 'Guide des tailles supprimé avec succès',
        'settings_saved' => 'Paramètres enregistrés avec succès',
    ],
];
