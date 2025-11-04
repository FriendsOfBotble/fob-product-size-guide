<?php

return [
    'name' => 'أدلة مقاسات المنتجات',
    'size_guide' => 'دليل المقاسات',
    'size_guides' => 'أدلة المقاسات',
    'create' => 'دليل مقاسات جديد',
    'edit' => 'تعديل دليل المقاسات',
    'settings_menu' => 'الإعدادات',

    'form' => [
        'name' => 'الاسم',
        'name_placeholder' => 'أدخل اسم دليل المقاسات',
        'description' => 'الوصف',
        'description_placeholder' => 'أدخل الوصف (اختياري)',
        'image' => 'الصورة',
        'image_helper' => 'حمّل مخطط دليل المقاسات أو صورة مرجعية',
        'table_builder' => 'منشئ الجداول',
        'table_builder_helper' => 'أنشئ جدول دليل المقاسات بإضافة الأعمدة والصفوف',
        'status' => 'الحالة',
        'order' => 'الترتيب',
        'order_helper' => 'تظهر الأرقام الأصغر أولاً',
    ],

    'table' => [
        'id' => 'المعرف',
        'name' => 'الاسم',
        'image' => 'الصورة',
        'rows_count' => 'الصفوف',
        'status' => 'الحالة',
        'created_at' => 'تاريخ الإنشاء',
    ],

    'table_builder' => [
        'add_column' => 'إضافة عمود',
        'add_row' => 'إضافة صف',
        'column_header' => 'عنوان العمود',
        'select_header' => 'اختر عنوان العمود',
        'no_columns' => 'لا توجد أعمدة بعد. انقر على "إضافة عمود" للبدء.',
        'no_rows' => 'لا توجد صفوف بعد. انقر على "إضافة صف" لإضافة بيانات.',
    ],

    'headers' => [
        'name' => 'عناوين دليل المقاسات',
        'create' => 'عنوان جديد',
        'edit' => 'تعديل العنوان',
        'category' => 'التصنيف',
        'categories' => [
            'general' => 'عام',
            'size' => 'المقاس',
            'measurement' => 'القياس',
            'unit' => 'الوحدة',
        ],
    ],

    'settings' => [
        'title' => 'إعدادات دليل مقاسات المنتج',
        'description' => 'اضبط كيفية عرض أدلة المقاسات في صفحات المنتج',

        'display' => 'إعدادات العرض',
        'display_mode' => 'وضع العرض',
        'display_mode_inline' => 'مضمن',
        'display_mode_popup' => 'منبثق (نافذة)',
        'display_mode_conditional' => 'مشروط',
        'display_mode_help' => 'اختر كيفية ظهور دليل المقاسات في صفحات المنتج',

        'row_threshold' => 'حد الصفوف (للوضع المشروط)',
        'row_threshold_help' => 'الجداول التي تحتوي على أكثر من هذا العدد من الصفوف ستفتح في نافذة منبثقة',

        'button_text' => 'نص الزر',
        'button_text_placeholder' => 'دليل المقاسات',
        'button_text_help' => 'النص المعروض على رابط/زر دليل المقاسات',

        'inline_expanded' => 'موسع افتراضيًا (الوضع المضمن)',
        'inline_expanded_help' => 'اعرض دليل المقاسات موسعًا بشكل افتراضي في الوضع المضمن. إذا لم يتم تفعيله، سيظهر مطويًا مع زر تبديل.',

        'modal_title' => 'عنوان النافذة',
        'modal_title_placeholder' => 'دليل المقاسات',
        'modal_title_help' => 'العنوان المعروض في النافذة المنبثقة',

        'appearance' => 'إعدادات المظهر',
        'show_image' => 'عرض الصورة',
        'show_image_help' => 'اعرض صورة دليل المقاسات فوق الجدول',

        'link_color' => 'لون الرابط',
        'link_color_help' => 'لون نص رابط دليل المقاسات (الوضع المضمن)',
        'header_bg_color' => 'لون خلفية العنوان',
        'header_bg_color_help' => 'لون خلفية رأس الجدول',
        'header_text_color' => 'لون نص العنوان',
        'header_text_color_help' => 'لون نص رأس الجدول',
        'row_bg_color' => 'لون خلفية الصف',
        'row_bg_color_help' => 'لون خلفية صفوف الجدول',
        'row_alt_bg_color' => 'لون خلفية الصف البديل',
        'row_alt_bg_color_help' => 'لون الخلفية للصفوف البديلة (المخططة)',
        'row_text_color' => 'لون نص الصف',
        'row_text_color_help' => 'لون نص صفوف الجدول',
        'border_color' => 'لون الحدود',
        'border_color_help' => 'لون حدود الجدول',
        'table_styles' => 'أنماط الجدول',
        'table_styles_help' => 'اختر أصناف Bootstrap الجاهزة لتنسيق جدول دليل المقاسات.',
        'table_style_bordered' => 'حدود للخلايا (table-bordered)',
        'table_style_striped' => 'صفوف مخططة (table-striped)',
        'table_style_hover' => 'تأثير التمرير (table-hover)',
        'table_style_small' => 'جدول مدمج (table-sm)',
        'font_size' => 'حجم الخط (بكسل)',
        'font_size_help' => 'حجم خط نص الجدول بالبكسل',
        'border_radius' => 'نصف قطر الحافة (بكسل)',
        'border_radius_help' => 'نصف قطر الحافة لزوايا الجدول بالبكسل',
    ],

    'metabox' => [
        'title' => 'دليل مقاسات المنتج',
        'select_size_guide' => 'اختر دليل المقاسات',
        'select_size_guide_placeholder' => '-- اختر دليل مقاسات --',
        'no_size_guide' => 'لا يوجد دليل مقاسات',
        'help_text' => 'قم بتعيين دليل مقاسات لهذا :type. سيؤدي ذلك إلى تجاوز أي دليل مقاسات موروث من التصنيف أو العلامة التجارية.',
        'help_text_category' => 'ستَرِث جميع المنتجات في هذا التصنيف دليل المقاسات هذا (ما لم يتم تجاوزه على مستوى المنتج).',
        'help_text_brand' => 'ستَرِث جميع منتجات هذه العلامة التجارية دليل المقاسات هذا (ما لم يتم تجاوزه على مستوى المنتج أو التصنيف).',
    ],

    'frontend' => [
        'view_size_guide' => 'عرض دليل المقاسات',
        'close' => 'إغلاق',
    ],

    'messages' => [
        'created' => 'تم إنشاء دليل المقاسات بنجاح',
        'updated' => 'تم تحديث دليل المقاسات بنجاح',
        'deleted' => 'تم حذف دليل المقاسات بنجاح',
        'settings_saved' => 'تم حفظ الإعدادات بنجاح',
    ],
];
