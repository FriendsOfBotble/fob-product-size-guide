<?php

return [
    'name' => '商品サイズガイド',
    'size_guide' => 'サイズガイド',
    'size_guides' => 'サイズガイド',
    'create' => '新しいサイズガイド',
    'edit' => 'サイズガイドを編集',
    'settings_menu' => '設定',

    'form' => [
        'name' => '名前',
        'name_placeholder' => 'サイズガイド名を入力してください',
        'description' => '説明',
        'description_placeholder' => '説明を入力してください（任意）',
        'image' => '画像',
        'image_helper' => 'サイズガイドの図や参考画像をアップロードしてください',
        'table_builder' => 'テーブルビルダー',
        'table_builder_helper' => '列と行を追加してサイズガイドのテーブルを作成します',
        'status' => 'ステータス',
        'order' => '順序',
        'order_helper' => '数値が小さいほど先に表示されます',
    ],

    'table' => [
        'id' => 'ID',
        'name' => '名前',
        'image' => '画像',
        'rows_count' => '行',
        'status' => 'ステータス',
        'created_at' => '作成日',
    ],

    'table_builder' => [
        'add_column' => '列を追加',
        'add_row' => '行を追加',
        'column_header' => '列ヘッダー',
        'select_header' => '列ヘッダーを選択してください',
        'no_columns' => 'まだ列がありません。「列を追加」をクリックして開始してください。',
        'no_rows' => 'まだ行がありません。「行を追加」をクリックしてデータを追加してください。',
    ],

    'headers' => [
        'name' => 'サイズガイドのヘッダー',
        'create' => '新しいヘッダー',
        'edit' => 'ヘッダーを編集',
        'category' => 'カテゴリ',
        'categories' => [
            'general' => '一般',
            'size' => 'サイズ',
            'measurement' => '寸法',
            'unit' => '単位',
        ],
    ],

    'settings' => [
        'title' => '商品サイズガイド設定',
        'description' => '商品ページでサイズガイドをどのように表示するかを設定します',

        'display' => '表示設定',
        'display_mode' => '表示モード',
        'display_mode_inline' => 'インライン',
        'display_mode_popup' => 'ポップアップ（モーダル）',
        'display_mode_conditional' => '条件付き',
        'display_mode_help' => '商品ページでサイズガイドをどのように表示するか選択してください',

        'row_threshold' => '行の閾値（条件付きモード）',
        'row_threshold_help' => 'この行数を超えるテーブルはポップアップで開きます',

        'button_text' => 'ボタンのテキスト',
        'button_text_placeholder' => 'サイズガイド',
        'button_text_help' => 'サイズガイドのリンク/ボタンに表示されるテキスト',

        'inline_expanded' => 'デフォルトで展開（インラインモード）',
        'inline_expanded_help' => 'インラインモードでサイズガイドをデフォルトで展開して表示します。未選択の場合、トグルボタンで折りたたまれた状態になります。',

        'modal_title' => 'モーダルタイトル',
        'modal_title_placeholder' => 'サイズガイド',
        'modal_title_help' => 'ポップアップモーダルに表示されるタイトル',

        'appearance' => '外観設定',
        'show_image' => '画像を表示',
        'show_image_help' => 'テーブルの上にサイズガイドの画像を表示します',

        'link_color' => 'リンクカラー',
        'link_color_help' => 'サイズガイドリンクの文字色（インラインモード）',
        'header_bg_color' => 'ヘッダー背景色',
        'header_bg_color_help' => 'テーブルヘッダーの背景色',
        'header_text_color' => 'ヘッダー文字色',
        'header_text_color_help' => 'テーブルヘッダーの文字色',
        'row_bg_color' => '行の背景色',
        'row_bg_color_help' => 'テーブル行の背景色',
        'row_alt_bg_color' => '交互行の背景色',
        'row_alt_bg_color_help' => '交互（ストライプ）行の背景色',
        'row_text_color' => '行の文字色',
        'row_text_color_help' => 'テーブル行の文字色',
        'border_color' => '枠線の色',
        'border_color_help' => 'テーブル枠線の色',
        'table_styles' => 'テーブルのスタイル',
        'table_styles_help' => 'サイズガイドのテーブルに適用する Bootstrap のテーブルクラスを選択してください。',
        'table_style_bordered' => '枠線あり (table-bordered)',
        'table_style_striped' => '縞模様の行 (table-striped)',
        'table_style_hover' => 'ホバー時の強調 (table-hover)',
        'table_style_small' => 'コンパクト表示 (table-sm)',
        'font_size' => 'フォントサイズ (px)',
        'font_size_help' => 'テーブル文字のフォントサイズ（ピクセル）',
        'border_radius' => '角丸 (px)',
        'border_radius_help' => 'テーブルの角丸半径（ピクセル）',
    ],

    'metabox' => [
        'title' => '商品サイズガイド',
        'select_size_guide' => 'サイズガイドを選択',
        'select_size_guide_placeholder' => '-- サイズガイドを選択してください --',
        'no_size_guide' => 'サイズガイドはありません',
        'help_text' => 'この:type にサイズガイドを割り当てます。カテゴリやブランドから継承したガイドを上書きします。',
        'help_text_category' => 'このカテゴリ内のすべての商品は、このサイズガイドを継承します（商品レベルで上書きしない限り）。',
        'help_text_brand' => 'このブランドのすべての商品は、このサイズガイドを継承します（商品またはカテゴリレベルで上書きしない限り）。',
    ],

    'frontend' => [
        'view_size_guide' => 'サイズガイドを見る',
        'close' => '閉じる',
    ],

    'messages' => [
        'created' => 'サイズガイドを作成しました',
        'updated' => 'サイズガイドを更新しました',
        'deleted' => 'サイズガイドを削除しました',
        'settings_saved' => '設定を保存しました',
    ],
];
