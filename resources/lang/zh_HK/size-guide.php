<?php

return [
    'name' => '產品尺寸指南',
    'size_guide' => '尺寸指南',
    'size_guides' => '尺寸指南',
    'create' => '新增尺寸指南',
    'edit' => '編輯尺寸指南',
    'settings_menu' => '設定',

    'form' => [
        'name' => '名稱',
        'name_placeholder' => '輸入尺寸指南名稱',
        'description' => '描述',
        'description_placeholder' => '輸入描述（可選）',
        'image' => '圖片',
        'image_helper' => '上載尺寸指南圖或參考圖片',
        'table_builder' => '表格建立器',
        'table_builder_helper' => '透過新增欄及列建立尺寸指南表格',
        'status' => '狀態',
        'order' => '排序',
        'order_helper' => '數字越小越先顯示',
    ],

    'table' => [
        'id' => 'ID',
        'name' => '名稱',
        'image' => '圖片',
        'rows_count' => '列數',
        'status' => '狀態',
        'created_at' => '建立時間',
    ],

    'table_builder' => [
        'add_column' => '新增欄',
        'add_row' => '新增列',
        'column_header' => '欄標題',
        'select_header' => '選擇欄標題',
        'no_columns' => '暫時沒有欄位。按「新增欄」開始。',
        'no_rows' => '暫時沒有列。按「新增列」以加入資料。',
    ],

    'headers' => [
        'name' => '尺寸指南標題',
        'create' => '新增標題',
        'edit' => '編輯標題',
        'category' => '分類',
        'categories' => [
            'general' => '一般',
            'size' => '尺寸',
            'measurement' => '量度',
            'unit' => '單位',
        ],
    ],

    'settings' => [
        'title' => '產品尺寸指南設定',
        'description' => '設定尺寸指南在產品頁面的顯示方式',

        'display' => '顯示設定',
        'display_mode' => '顯示模式',
        'display_mode_inline' => '內嵌',
        'display_mode_popup' => '彈出視窗（模態）',
        'display_mode_conditional' => '條件顯示',
        'display_mode_help' => '選擇尺寸指南在產品頁面中如何顯示',

        'row_threshold' => '列數門檻（用於條件模式）',
        'row_threshold_help' => '列數超過此數值的表格會以彈出視窗開啟',

        'button_text' => '按鈕文字',
        'button_text_placeholder' => '尺寸指南',
        'button_text_help' => '顯示在尺寸指南連結／按鈕上的文字',

        'inline_expanded' => '預設展開（內嵌模式）',
        'inline_expanded_help' => '在內嵌模式下預設展開尺寸指南。如未勾選，將以切換按鈕顯示收合狀態。',

        'modal_title' => '模態標題',
        'modal_title_placeholder' => '尺寸指南',
        'modal_title_help' => '彈出模態視窗中顯示的標題',

        'appearance' => '外觀設定',
        'show_image' => '顯示圖片',
        'show_image_help' => '在表格上方顯示尺寸指南圖片',

        'link_color' => '連結顏色',
        'link_color_help' => '尺寸指南連結文字顏色（內嵌模式）',
        'header_bg_color' => '標題背景顏色',
        'header_bg_color_help' => '表格標題的背景顏色',
        'header_text_color' => '標題文字顏色',
        'header_text_color_help' => '表格標題的文字顏色',
        'row_bg_color' => '列背景顏色',
        'row_bg_color_help' => '表格列的背景顏色',
        'row_alt_bg_color' => '交替列背景顏色',
        'row_alt_bg_color_help' => '交替（間條）列的背景顏色',
        'row_text_color' => '列文字顏色',
        'row_text_color_help' => '表格列的文字顏色',
        'border_color' => '邊框顏色',
        'border_color_help' => '表格邊框的顏色',
        'table_styles' => '表格樣式',
        'table_styles_help' => '選擇要套用到尺寸指南表格的 Bootstrap 表格類別。',
        'table_style_bordered' => '有邊框 (table-bordered)',
        'table_style_striped' => '間條列 (table-striped)',
        'table_style_hover' => '滑鼠懸停效果 (table-hover)',
        'table_style_small' => '精簡表格 (table-sm)',
        'font_size' => '字型大小 (px)',
        'font_size_help' => '表格文字的像素大小',
        'border_radius' => '圓角 (px)',
        'border_radius_help' => '表格四角的圓角半徑（像素）',
    ],

    'metabox' => [
        'title' => '產品尺寸指南',
        'select_size_guide' => '選擇尺寸指南',
        'select_size_guide_placeholder' => '-- 選擇尺寸指南 --',
        'no_size_guide' => '沒有尺寸指南',
        'help_text' => '為此 :type 指派尺寸指南，會覆寫從分類或品牌繼承的指南。',
        'help_text_category' => '此分類的所有產品都會繼承此指南（除非在產品層級覆寫）。',
        'help_text_brand' => '此品牌的所有產品都會繼承此指南（除非在產品或分類層級覆寫）。',
    ],

    'frontend' => [
        'view_size_guide' => '查看尺寸指南',
        'close' => '關閉',
    ],

    'messages' => [
        'created' => '成功建立尺寸指南',
        'updated' => '成功更新尺寸指南',
        'deleted' => '成功刪除尺寸指南',
        'settings_saved' => '設定已成功儲存',
    ],
];
