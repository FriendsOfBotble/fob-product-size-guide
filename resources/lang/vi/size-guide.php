<?php

return [
    'name' => 'Hướng dẫn kích thước sản phẩm',
    'size_guide' => 'Hướng dẫn kích thước',
    'size_guides' => 'Hướng dẫn kích thước',
    'create' => 'Hướng dẫn kích thước mới',
    'edit' => 'Chỉnh sửa hướng dẫn kích thước',
    'settings_menu' => 'Cài đặt',

    'form' => [
        'name' => 'Tên',
        'name_placeholder' => 'Nhập tên hướng dẫn kích thước',
        'description' => 'Mô tả',
        'description_placeholder' => 'Nhập mô tả (tuỳ chọn)',
        'image' => 'Hình ảnh',
        'image_helper' => 'Tải lên sơ đồ hoặc hình ảnh tham khảo cho hướng dẫn kích thước',
        'table_builder' => 'Trình tạo bảng',
        'table_builder_helper' => 'Tạo bảng hướng dẫn kích thước bằng cách thêm cột và hàng',
        'status' => 'Trạng thái',
        'order' => 'Thứ tự',
        'order_helper' => 'Số nhỏ hơn sẽ hiển thị trước',
    ],

    'table' => [
        'id' => 'ID',
        'name' => 'Tên',
        'image' => 'Hình ảnh',
        'rows_count' => 'Số hàng',
        'status' => 'Trạng thái',
        'created_at' => 'Ngày tạo',
    ],

    'table_builder' => [
        'add_column' => 'Thêm cột',
        'add_row' => 'Thêm hàng',
        'column_header' => 'Tiêu đề cột',
        'select_header' => 'Chọn tiêu đề cột',
        'no_columns' => 'Chưa có cột nào. Nhấn "Thêm cột" để bắt đầu.',
        'no_rows' => 'Chưa có hàng nào. Nhấn "Thêm hàng" để thêm dữ liệu.',
    ],

    'headers' => [
        'name' => 'Tiêu đề hướng dẫn kích thước',
        'create' => 'Tiêu đề mới',
        'edit' => 'Chỉnh sửa tiêu đề',
        'category' => 'Danh mục',
        'categories' => [
            'general' => 'Chung',
            'size' => 'Kích thước',
            'measurement' => 'Số đo',
            'unit' => 'Đơn vị',
        ],
    ],

    'settings' => [
        'title' => 'Cài đặt hướng dẫn kích thước sản phẩm',
        'description' => 'Cấu hình cách hiển thị hướng dẫn kích thước trên trang sản phẩm',

        'display' => 'Cài đặt hiển thị',
        'display_mode' => 'Chế độ hiển thị',
        'display_mode_inline' => 'Trong trang',
        'display_mode_popup' => 'Popup (Modal)',
        'display_mode_conditional' => 'Có điều kiện',
        'display_mode_help' => 'Chọn cách hướng dẫn kích thước xuất hiện trên trang sản phẩm',

        'row_threshold' => 'Ngưỡng số hàng (cho chế độ có điều kiện)',
        'row_threshold_help' => 'Bảng có số hàng vượt quá giá trị này sẽ mở trong cửa sổ popup',

        'button_text' => 'Chữ trên nút',
        'button_text_placeholder' => 'Hướng dẫn kích thước',
        'button_text_help' => 'Chữ hiển thị trên liên kết/nút hướng dẫn kích thước',

        'inline_expanded' => 'Mở rộng theo mặc định (chế độ trong trang)',
        'inline_expanded_help' => 'Hiển thị hướng dẫn kích thước được mở rộng theo mặc định trong chế độ trong trang. Nếu bỏ chọn, bảng sẽ được thu gọn và có nút bật/tắt.',

        'modal_title' => 'Tiêu đề modal',
        'modal_title_placeholder' => 'Hướng dẫn kích thước',
        'modal_title_help' => 'Tiêu đề hiển thị trong cửa sổ modal popup',

        'appearance' => 'Cài đặt giao diện',
        'show_image' => 'Hiển thị hình ảnh',
        'show_image_help' => 'Hiển thị hình ảnh hướng dẫn kích thước phía trên bảng',

        'link_color' => 'Màu liên kết',
        'link_color_help' => 'Màu chữ của liên kết hướng dẫn kích thước (chế độ trong trang)',
        'header_bg_color' => 'Màu nền tiêu đề',
        'header_bg_color_help' => 'Màu nền của tiêu đề bảng',
        'header_text_color' => 'Màu chữ tiêu đề',
        'header_text_color_help' => 'Màu chữ cho tiêu đề bảng',
        'row_bg_color' => 'Màu nền hàng',
        'row_bg_color_help' => 'Màu nền cho các hàng của bảng',
        'row_alt_bg_color' => 'Màu nền hàng xen kẽ',
        'row_alt_bg_color_help' => 'Màu nền cho các hàng xen kẽ (kẻ sọc)',
        'row_text_color' => 'Màu chữ hàng',
        'row_text_color_help' => 'Màu chữ cho các hàng của bảng',
        'border_color' => 'Màu viền',
        'border_color_help' => 'Màu cho viền của bảng',
        'table_styles' => 'Kiểu bảng',
        'table_styles_help' => 'Chọn các lớp bảng Bootstrap áp dụng cho bảng hướng dẫn kích thước.',
        'table_style_bordered' => 'Có viền (table-bordered)',
        'table_style_striped' => 'Các hàng xen kẽ (table-striped)',
        'table_style_hover' => 'Hiệu ứng khi rê chuột (table-hover)',
        'table_style_small' => 'Bảng gọn nhẹ (table-sm)',
        'font_size' => 'Cỡ chữ (px)',
        'font_size_help' => 'Cỡ chữ của văn bản trong bảng tính bằng pixel',
        'border_radius' => 'Bán kính bo góc (px)',
        'border_radius_help' => 'Bán kính bo góc của bảng tính bằng pixel',
    ],

    'metabox' => [
        'title' => 'Hướng dẫn kích thước sản phẩm',
        'select_size_guide' => 'Chọn hướng dẫn kích thước',
        'select_size_guide_placeholder' => '-- Chọn hướng dẫn kích thước --',
        'no_size_guide' => 'Không có hướng dẫn kích thước',
        'help_text' => 'Gán hướng dẫn kích thước cho :type này. Việc này sẽ ghi đè hướng dẫn kế thừa từ danh mục hoặc thương hiệu.',
        'help_text_category' => 'Tất cả sản phẩm trong danh mục này sẽ kế thừa hướng dẫn này (trừ khi bị ghi đè ở cấp sản phẩm).',
        'help_text_brand' => 'Tất cả sản phẩm của thương hiệu này sẽ kế thừa hướng dẫn này (trừ khi bị ghi đè ở cấp sản phẩm hoặc danh mục).',
    ],

    'frontend' => [
        'view_size_guide' => 'Xem hướng dẫn kích thước',
        'close' => 'Đóng',
    ],

    'messages' => [
        'created' => 'Tạo hướng dẫn kích thước thành công',
        'updated' => 'Cập nhật hướng dẫn kích thước thành công',
        'deleted' => 'Xóa hướng dẫn kích thước thành công',
        'settings_saved' => 'Lưu cài đặt thành công',
    ],
];
