<?php

return [
    'name' => 'Guías de tallas de productos',
    'size_guide' => 'Guía de tallas',
    'size_guides' => 'Guías de tallas',
    'create' => 'Nueva guía de tallas',
    'edit' => 'Editar guía de tallas',
    'settings_menu' => 'Ajustes',

    'form' => [
        'name' => 'Nombre',
        'name_placeholder' => 'Introduce el nombre de la guía de tallas',
        'description' => 'Descripción',
        'description_placeholder' => 'Introduce una descripción (opcional)',
        'image' => 'Imagen',
        'image_helper' => 'Sube un diagrama de guía de tallas o una imagen de referencia',
        'table_builder' => 'Constructor de tablas',
        'table_builder_helper' => 'Crea tu tabla de guía de tallas añadiendo columnas y filas',
        'status' => 'Estado',
        'order' => 'Orden',
        'order_helper' => 'Los números más bajos aparecen primero',
    ],

    'table' => [
        'id' => 'ID',
        'name' => 'Nombre',
        'image' => 'Imagen',
        'rows_count' => 'Filas',
        'status' => 'Estado',
        'created_at' => 'Creado el',
    ],

    'table_builder' => [
        'add_column' => 'Añadir columna',
        'add_row' => 'Añadir fila',
        'column_header' => 'Encabezado de columna',
        'select_header' => 'Selecciona el encabezado de la columna',
        'no_columns' => 'Todavía no hay columnas. Haz clic en "Añadir columna" para empezar.',
        'no_rows' => 'Todavía no hay filas. Haz clic en "Añadir fila" para agregar datos.',
    ],

    'headers' => [
        'name' => 'Encabezados de la guía de tallas',
        'create' => 'Nuevo encabezado',
        'edit' => 'Editar encabezado',
        'category' => 'Categoría',
        'categories' => [
            'general' => 'General',
            'size' => 'Talla',
            'measurement' => 'Medida',
            'unit' => 'Unidad',
        ],
    ],

    'settings' => [
        'title' => 'Configuración de la guía de tallas del producto',
        'description' => 'Configura cómo se muestran las guías de tallas en las páginas de productos',

        'display' => 'Configuración de visualización',
        'display_mode' => 'Modo de visualización',
        'display_mode_inline' => 'En línea',
        'display_mode_popup' => 'Emergente (modal)',
        'display_mode_conditional' => 'Condicional',
        'display_mode_help' => 'Elige cómo aparece la guía de tallas en las páginas de productos',

        'row_threshold' => 'Umbral de filas (para modo condicional)',
        'row_threshold_help' => 'Las tablas con más filas que este valor se abrirán en una ventana emergente',

        'button_text' => 'Texto del botón',
        'button_text_placeholder' => 'Guía de tallas',
        'button_text_help' => 'Texto que se muestra en el enlace/botón de la guía de tallas',

        'inline_expanded' => 'Expandido por defecto (modo en línea)',
        'inline_expanded_help' => 'Mostrar la guía de tallas expandida por defecto en el modo en línea. Si no se marca, estará contraída con un botón de alternancia.',

        'modal_title' => 'Título del modal',
        'modal_title_placeholder' => 'Guía de tallas',
        'modal_title_help' => 'Título mostrado en el modal emergente',

        'appearance' => 'Configuración de apariencia',
        'show_image' => 'Mostrar imagen',
        'show_image_help' => 'Mostrar la imagen de la guía de tallas encima de la tabla',

        'link_color' => 'Color del enlace',
        'link_color_help' => 'Color del texto del enlace de la guía de tallas (modo en línea)',
        'header_bg_color' => 'Color de fondo del encabezado',
        'header_bg_color_help' => 'Color de fondo del encabezado de la tabla',
        'header_text_color' => 'Color del texto del encabezado',
        'header_text_color_help' => 'Color del texto del encabezado de la tabla',
        'row_bg_color' => 'Color de fondo de las filas',
        'row_bg_color_help' => 'Color de fondo de las filas de la tabla',
        'row_alt_bg_color' => 'Color de fondo alternativo de las filas',
        'row_alt_bg_color_help' => 'Color de fondo para filas alternas (a rayas)',
        'row_text_color' => 'Color del texto de las filas',
        'row_text_color_help' => 'Color del texto de las filas de la tabla',
        'border_color' => 'Color del borde',
        'border_color_help' => 'Color de los bordes de la tabla',
        'table_styles' => 'Estilos de la tabla',
        'table_styles_help' => 'Selecciona las clases de tabla de Bootstrap que se aplicarán a la guía de tallas.',
        'table_style_bordered' => 'Con bordes (table-bordered)',
        'table_style_striped' => 'Filas alternas (table-striped)',
        'table_style_hover' => 'Efecto hover (table-hover)',
        'table_style_small' => 'Tabla compacta (table-sm)',
        'font_size' => 'Tamaño de fuente (px)',
        'font_size_help' => 'Tamaño de fuente del texto de la tabla en píxeles',
        'border_radius' => 'Radio del borde (px)',
        'border_radius_help' => 'Radio del borde para las esquinas de la tabla en píxeles',
    ],

    'metabox' => [
        'title' => 'Guía de tallas del producto',
        'select_size_guide' => 'Seleccionar guía de tallas',
        'select_size_guide_placeholder' => '-- Selecciona una guía de tallas --',
        'no_size_guide' => 'Sin guía de tallas',
        'help_text' => 'Asigna una guía de tallas a este :type. Esto anulará cualquier guía de tallas heredada de una categoría o marca.',
        'help_text_category' => 'Todos los productos de esta categoría heredarán esta guía de tallas (a menos que se sobrescriba a nivel de producto).',
        'help_text_brand' => 'Todos los productos de esta marca heredarán esta guía de tallas (a menos que se sobrescriba a nivel de producto o categoría).',
    ],

    'frontend' => [
        'view_size_guide' => 'Ver guía de tallas',
        'close' => 'Cerrar',
    ],

    'messages' => [
        'created' => 'Guía de tallas creada correctamente',
        'updated' => 'Guía de tallas actualizada correctamente',
        'deleted' => 'Guía de tallas eliminada correctamente',
        'settings_saved' => 'Configuración guardada correctamente',
    ],
];
