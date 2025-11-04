<?php

return [
    'name' => '제품 사이즈 가이드',
    'size_guide' => '사이즈 가이드',
    'size_guides' => '사이즈 가이드',
    'create' => '새 사이즈 가이드',
    'edit' => '사이즈 가이드 수정',
    'settings_menu' => '설정',

    'form' => [
        'name' => '이름',
        'name_placeholder' => '사이즈 가이드 이름을 입력하세요',
        'description' => '설명',
        'description_placeholder' => '설명을 입력하세요 (선택 사항)',
        'image' => '이미지',
        'image_helper' => '사이즈 가이드 다이어그램 또는 참고 이미지를 업로드하세요',
        'table_builder' => '테이블 빌더',
        'table_builder_helper' => '열과 행을 추가하여 사이즈 가이드 테이블을 만드세요',
        'status' => '상태',
        'order' => '순서',
        'order_helper' => '숫자가 낮을수록 먼저 표시됩니다',
    ],

    'table' => [
        'id' => 'ID',
        'name' => '이름',
        'image' => '이미지',
        'rows_count' => '행',
        'status' => '상태',
        'created_at' => '생성일',
    ],

    'table_builder' => [
        'add_column' => '열 추가',
        'add_row' => '행 추가',
        'column_header' => '열 헤더',
        'select_header' => '열 헤더를 선택하세요',
        'no_columns' => '아직 열이 없습니다. "열 추가"를 클릭하여 시작하세요.',
        'no_rows' => '아직 행이 없습니다. "행 추가"를 클릭하여 데이터를 추가하세요.',
    ],

    'headers' => [
        'name' => '사이즈 가이드 헤더',
        'create' => '새 헤더',
        'edit' => '헤더 수정',
        'category' => '카테고리',
        'categories' => [
            'general' => '일반',
            'size' => '사이즈',
            'measurement' => '측정',
            'unit' => '단위',
        ],
    ],

    'settings' => [
        'title' => '제품 사이즈 가이드 설정',
        'description' => '제품 페이지에서 사이즈 가이드를 표시하는 방식을 구성합니다',

        'display' => '표시 설정',
        'display_mode' => '표시 모드',
        'display_mode_inline' => '인라인',
        'display_mode_popup' => '팝업(모달)',
        'display_mode_conditional' => '조건부',
        'display_mode_help' => '제품 페이지에서 사이즈 가이드가 어떻게 표시될지 선택하세요',

        'row_threshold' => '행 임계값 (조건부 모드)',
        'row_threshold_help' => '행 수가 이 값을 초과하면 테이블이 팝업으로 열립니다',

        'button_text' => '버튼 텍스트',
        'button_text_placeholder' => '사이즈 가이드',
        'button_text_help' => '사이즈 가이드 링크/버튼에 표시되는 텍스트',

        'inline_expanded' => '기본적으로 펼치기 (인라인 모드)',
        'inline_expanded_help' => '인라인 모드에서 사이즈 가이드를 기본적으로 펼쳐서 표시합니다. 선택 해제 시 토글 버튼으로 접힌 상태가 됩니다.',

        'modal_title' => '모달 제목',
        'modal_title_placeholder' => '사이즈 가이드',
        'modal_title_help' => '팝업 모달에 표시되는 제목',

        'appearance' => '디자인 설정',
        'show_image' => '이미지 표시',
        'show_image_help' => '테이블 위에 사이즈 가이드 이미지를 표시합니다',

        'link_color' => '링크 색상',
        'link_color_help' => '사이즈 가이드 링크 텍스트 색상 (인라인 모드)',
        'header_bg_color' => '헤더 배경색',
        'header_bg_color_help' => '테이블 헤더의 배경색',
        'header_text_color' => '헤더 텍스트 색상',
        'header_text_color_help' => '테이블 헤더의 텍스트 색상',
        'row_bg_color' => '행 배경색',
        'row_bg_color_help' => '테이블 행의 배경색',
        'row_alt_bg_color' => '대체 행 배경색',
        'row_alt_bg_color_help' => '교차(줄무늬) 행의 배경색',
        'row_text_color' => '행 텍스트 색상',
        'row_text_color_help' => '테이블 행의 텍스트 색상',
        'border_color' => '테두리 색상',
        'border_color_help' => '테이블 테두리 색상',
        'table_styles' => '테이블 스타일',
        'table_styles_help' => '사이즈 가이드 테이블에 적용할 Bootstrap 테이블 클래스를 선택하세요.',
        'table_style_bordered' => '테두리 표시 (table-bordered)',
        'table_style_striped' => '줄무늬 행 (table-striped)',
        'table_style_hover' => '호버 효과 (table-hover)',
        'table_style_small' => '컴팩트 테이블 (table-sm)',
        'font_size' => '글꼴 크기 (px)',
        'font_size_help' => '테이블 텍스트의 글꼴 크기 (픽셀)',
        'border_radius' => '모서리 반경 (px)',
        'border_radius_help' => '테이블 모서리의 반경 (픽셀)',
    ],

    'metabox' => [
        'title' => '제품 사이즈 가이드',
        'select_size_guide' => '사이즈 가이드 선택',
        'select_size_guide_placeholder' => '-- 사이즈 가이드를 선택하세요 --',
        'no_size_guide' => '사이즈 가이드 없음',
        'help_text' => '이 :type 에 사이즈 가이드를 지정하세요. 카테고리나 브랜드에서 상속된 가이드를 덮어씁니다.',
        'help_text_category' => '이 카테고리의 모든 제품은 이 가이드를 상속합니다 (제품 수준에서 덮어쓰지 않는 한).',
        'help_text_brand' => '이 브랜드의 모든 제품은 이 가이드를 상속합니다 (제품 또는 카테고리 수준에서 덮어쓰지 않는 한).',
    ],

    'frontend' => [
        'view_size_guide' => '사이즈 가이드 보기',
        'close' => '닫기',
    ],

    'messages' => [
        'created' => '사이즈 가이드가 성공적으로 생성되었습니다',
        'updated' => '사이즈 가이드가 성공적으로 업데이트되었습니다',
        'deleted' => '사이즈 가이드가 성공적으로 삭제되었습니다',
        'settings_saved' => '설정이 성공적으로 저장되었습니다',
    ],
];
