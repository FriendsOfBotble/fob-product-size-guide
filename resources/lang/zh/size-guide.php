<?php

return [
    'name' => '产品尺码指南',
    'size_guide' => '尺码指南',
    'size_guides' => '尺码指南',
    'create' => '新增尺码指南',
    'edit' => '编辑尺码指南',
    'settings_menu' => '设置',

    'form' => [
        'name' => '名称',
        'name_placeholder' => '输入尺码指南名称',
        'description' => '描述',
        'description_placeholder' => '输入描述（可选）',
        'image' => '图片',
        'image_helper' => '上传尺码指南图或参考图片',
        'table_builder' => '表格构建器',
        'table_builder_helper' => '通过添加列和行创建尺码指南表格',
        'status' => '状态',
        'order' => '排序',
        'order_helper' => '数字越小越靠前显示',
    ],

    'table' => [
        'id' => 'ID',
        'name' => '名称',
        'image' => '图片',
        'rows_count' => '行数',
        'status' => '状态',
        'created_at' => '创建时间',
    ],

    'table_builder' => [
        'add_column' => '新增列',
        'add_row' => '新增行',
        'column_header' => '列表头',
        'select_header' => '选择列表头',
        'no_columns' => '暂时没有列。点击“新增列”开始。',
        'no_rows' => '暂时没有行。点击“新增行”添加数据。',
    ],

    'headers' => [
        'name' => '尺码指南表头',
        'create' => '新增表头',
        'edit' => '编辑表头',
        'category' => '分类',
        'categories' => [
            'general' => '通用',
            'size' => '尺码',
            'measurement' => '测量',
            'unit' => '单位',
        ],
    ],

    'settings' => [
        'title' => '产品尺码指南设置',
        'description' => '配置尺码指南在产品页面的显示方式',

        'display' => '显示设置',
        'display_mode' => '显示模式',
        'display_mode_inline' => '内联',
        'display_mode_popup' => '弹窗（模态）',
        'display_mode_conditional' => '条件显示',
        'display_mode_help' => '选择尺码指南在产品页面的呈现方式',

        'row_threshold' => '行阈值（用于条件模式）',
        'row_threshold_help' => '行数超过该值的表格将以弹窗形式打开',

        'button_text' => '按钮文本',
        'button_text_placeholder' => '尺码指南',
        'button_text_help' => '显示在尺码指南链接/按钮上的文字',

        'inline_expanded' => '默认展开（内联模式）',
        'inline_expanded_help' => '在内联模式下默认展开尺码指南。未勾选时将折叠并带有切换按钮。',

        'modal_title' => '模态标题',
        'modal_title_placeholder' => '尺码指南',
        'modal_title_help' => '弹窗模态中显示的标题',

        'appearance' => '外观设置',
        'show_image' => '显示图片',
        'show_image_help' => '在表格上方显示尺码指南图片',

        'link_color' => '链接颜色',
        'link_color_help' => '尺码指南链接文字颜色（内联模式）',
        'header_bg_color' => '表头背景色',
        'header_bg_color_help' => '表格表头的背景颜色',
        'header_text_color' => '表头文字颜色',
        'header_text_color_help' => '表格表头的文字颜色',
        'row_bg_color' => '行背景色',
        'row_bg_color_help' => '表格行的背景颜色',
        'row_alt_bg_color' => '交替行背景色',
        'row_alt_bg_color_help' => '交替（条纹）行的背景颜色',
        'row_text_color' => '行文字颜色',
        'row_text_color_help' => '表格行的文字颜色',
        'border_color' => '边框颜色',
        'border_color_help' => '表格边框的颜色',
        'table_styles' => '表格样式',
        'table_styles_help' => '选择要应用到尺码指南表格的 Bootstrap 表格类。',
        'table_style_bordered' => '带边框 (table-bordered)',
        'table_style_striped' => '条纹行 (table-striped)',
        'table_style_hover' => '悬停效果 (table-hover)',
        'table_style_small' => '紧凑表格 (table-sm)',
        'font_size' => '字体大小 (px)',
        'font_size_help' => '表格文字的像素大小',
        'border_radius' => '圆角 (px)',
        'border_radius_help' => '表格四角的圆角半径（像素）',
    ],

    'metabox' => [
        'title' => '产品尺码指南',
        'select_size_guide' => '选择尺码指南',
        'select_size_guide_placeholder' => '-- 选择尺码指南 --',
        'no_size_guide' => '暂无尺码指南',
        'help_text' => '为此 :type 分配尺码指南，将覆盖从分类或品牌继承的指南。',
        'help_text_category' => '该分类下的所有产品都会继承此尺码指南（除非在产品层级覆盖）。',
        'help_text_brand' => '该品牌的所有产品都会继承此尺码指南（除非在产品或分类层级覆盖）。',
    ],

    'frontend' => [
        'view_size_guide' => '查看尺码指南',
        'close' => '关闭',
    ],

    'messages' => [
        'created' => '尺码指南创建成功',
        'updated' => '尺码指南更新成功',
        'deleted' => '尺码指南删除成功',
        'settings_saved' => '设置保存成功',
    ],
];
