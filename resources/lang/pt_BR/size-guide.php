<?php

return [
    'name' => 'Guias de tamanho de produtos',
    'size_guide' => 'Guia de tamanhos',
    'size_guides' => 'Guias de tamanhos',
    'create' => 'Novo guia de tamanhos',
    'edit' => 'Editar guia de tamanhos',
    'settings_menu' => 'Configurações',

    'form' => [
        'name' => 'Nome',
        'name_placeholder' => 'Insira o nome do guia de tamanhos',
        'description' => 'Descrição',
        'description_placeholder' => 'Insira uma descrição (opcional)',
        'image' => 'Imagem',
        'image_helper' => 'Envie um diagrama do guia de tamanhos ou uma imagem de referência',
        'table_builder' => 'Construtor de tabelas',
        'table_builder_helper' => 'Crie sua tabela de guia de tamanhos adicionando colunas e linhas',
        'status' => 'Status',
        'order' => 'Ordem',
        'order_helper' => 'Números menores aparecem primeiro',
    ],

    'table' => [
        'id' => 'ID',
        'name' => 'Nome',
        'image' => 'Imagem',
        'rows_count' => 'Linhas',
        'status' => 'Status',
        'created_at' => 'Criado em',
    ],

    'table_builder' => [
        'add_column' => 'Adicionar coluna',
        'add_row' => 'Adicionar linha',
        'column_header' => 'Cabeçalho da coluna',
        'select_header' => 'Selecione o cabeçalho da coluna',
        'no_columns' => 'Ainda não há colunas. Clique em "Adicionar coluna" para começar.',
        'no_rows' => 'Ainda não há linhas. Clique em "Adicionar linha" para adicionar dados.',
    ],

    'headers' => [
        'name' => 'Cabeçalhos do guia de tamanhos',
        'create' => 'Novo cabeçalho',
        'edit' => 'Editar cabeçalho',
        'category' => 'Categoria',
        'categories' => [
            'general' => 'Geral',
            'size' => 'Tamanho',
            'measurement' => 'Medida',
            'unit' => 'Unidade',
        ],
    ],

    'settings' => [
        'title' => 'Configurações do guia de tamanhos do produto',
        'description' => 'Configure como os guias de tamanhos são exibidos nas páginas de produtos',

        'display' => 'Configurações de exibição',
        'display_mode' => 'Modo de exibição',
        'display_mode_inline' => 'Em linha',
        'display_mode_popup' => 'Popup (modal)',
        'display_mode_conditional' => 'Condicional',
        'display_mode_help' => 'Escolha como o guia de tamanhos aparece nas páginas de produtos',

        'row_threshold' => 'Limite de linhas (para modo condicional)',
        'row_threshold_help' => 'Tabelas com mais linhas que esse valor serão abertas em um popup',

        'button_text' => 'Texto do botão',
        'button_text_placeholder' => 'Guia de tamanhos',
        'button_text_help' => 'Texto exibido no link/botão do guia de tamanhos',

        'inline_expanded' => 'Expandido por padrão (modo em linha)',
        'inline_expanded_help' => 'Mostrar o guia de tamanhos expandido por padrão no modo em linha. Se desmarcado, ficará recolhido com um botão de alternância.',

        'modal_title' => 'Título da modal',
        'modal_title_placeholder' => 'Guia de tamanhos',
        'modal_title_help' => 'Título exibido na janela modal',

        'appearance' => 'Configurações de aparência',
        'show_image' => 'Mostrar imagem',
        'show_image_help' => 'Exibir a imagem do guia de tamanhos acima da tabela',

        'link_color' => 'Cor do link',
        'link_color_help' => 'Cor do texto do link do guia de tamanhos (modo em linha)',
        'header_bg_color' => 'Cor de fundo do cabeçalho',
        'header_bg_color_help' => 'Cor de fundo para o cabeçalho da tabela',
        'header_text_color' => 'Cor do texto do cabeçalho',
        'header_text_color_help' => 'Cor do texto para o cabeçalho da tabela',
        'row_bg_color' => 'Cor de fundo das linhas',
        'row_bg_color_help' => 'Cor de fundo das linhas da tabela',
        'row_alt_bg_color' => 'Cor de fundo alternada das linhas',
        'row_alt_bg_color_help' => 'Cor de fundo para linhas alternadas (listradas)',
        'row_text_color' => 'Cor do texto das linhas',
        'row_text_color_help' => 'Cor do texto das linhas da tabela',
        'border_color' => 'Cor da borda',
        'border_color_help' => 'Cor das bordas da tabela',
        'table_styles' => 'Estilos da tabela',
        'table_styles_help' => 'Escolha as classes de tabela do Bootstrap aplicadas à guia de tamanhos.',
        'table_style_bordered' => 'Com bordas (table-bordered)',
        'table_style_striped' => 'Linhas alternadas (table-striped)',
        'table_style_hover' => 'Efeito ao passar o mouse (table-hover)',
        'table_style_small' => 'Tabela compacta (table-sm)',
        'font_size' => 'Tamanho da fonte (px)',
        'font_size_help' => 'Tamanho da fonte do texto da tabela em pixels',
        'border_radius' => 'Raio da borda (px)',
        'border_radius_help' => 'Raio da borda para os cantos da tabela em pixels',
    ],

    'metabox' => [
        'title' => 'Guia de tamanhos do produto',
        'select_size_guide' => 'Selecionar guia de tamanhos',
        'select_size_guide_placeholder' => '-- Selecione um guia de tamanhos --',
        'no_size_guide' => 'Sem guia de tamanhos',
        'help_text' => 'Atribua um guia de tamanhos a este :type. Isso substituirá qualquer guia herdado da categoria ou da marca.',
        'help_text_category' => 'Todos os produtos desta categoria herdarão este guia de tamanhos (a menos que seja substituído no nível do produto).',
        'help_text_brand' => 'Todos os produtos desta marca herdarão este guia de tamanhos (a menos que seja substituído no nível do produto ou da categoria).',
    ],

    'frontend' => [
        'view_size_guide' => 'Ver guia de tamanhos',
        'close' => 'Fechar',
    ],

    'messages' => [
        'created' => 'Guia de tamanhos criado com sucesso',
        'updated' => 'Guia de tamanhos atualizado com sucesso',
        'deleted' => 'Guia de tamanhos excluído com sucesso',
        'settings_saved' => 'Configurações salvas com sucesso',
    ],
];
