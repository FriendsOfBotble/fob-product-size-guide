<?php

return [
    'name' => 'מדריכי מידות למוצרים',
    'size_guide' => 'מדריך מידות',
    'size_guides' => 'מדריכי מידות',
    'create' => 'מדריך מידות חדש',
    'edit' => 'עריכת מדריך המידות',
    'settings_menu' => 'הגדרות',

    'form' => [
        'name' => 'שם',
        'name_placeholder' => 'הזן שם למדריך המידות',
        'description' => 'תיאור',
        'description_placeholder' => 'הזן תיאור (אופציונלי)',
        'image' => 'תמונה',
        'image_helper' => 'העלה תרשים מדריך מידות או תמונת ייחוס',
        'table_builder' => 'בונה טבלאות',
        'table_builder_helper' => 'צור את טבלת מדריך המידות על ידי הוספת עמודות ושורות',
        'status' => 'סטטוס',
        'order' => 'סדר',
        'order_helper' => 'מספרים קטנים יותר מוצגים ראשונים',
    ],

    'table' => [
        'id' => 'מזהה',
        'name' => 'שם',
        'image' => 'תמונה',
        'rows_count' => 'שורות',
        'status' => 'סטטוס',
        'created_at' => 'נוצר ב-',
    ],

    'table_builder' => [
        'add_column' => 'הוסף עמודה',
        'add_row' => 'הוסף שורה',
        'column_header' => 'כותרת עמודה',
        'select_header' => 'בחר כותרת עמודה',
        'no_columns' => 'אין עמודות עדיין. לחץ על "הוסף עמודה" כדי להתחיל.',
        'no_rows' => 'אין שורות עדיין. לחץ על "הוסף שורה" כדי להוסיף נתונים.',
    ],

    'headers' => [
        'name' => 'כותרות מדריך המידות',
        'create' => 'כותרת חדשה',
        'edit' => 'ערוך כותרת',
        'category' => 'קטגוריה',
        'categories' => [
            'general' => 'כללי',
            'size' => 'מידה',
            'measurement' => 'מדידה',
            'unit' => 'יחידה',
        ],
    ],

    'settings' => [
        'title' => 'הגדרות מדריך המידות למוצר',
        'description' => 'הגדר כיצד מדריכי מידות מוצגים בדפי מוצר',

        'display' => 'הגדרות תצוגה',
        'display_mode' => 'מצב תצוגה',
        'display_mode_inline' => 'בתוך הדף',
        'display_mode_popup' => 'חלון קופץ (מודאלי)',
        'display_mode_conditional' => 'מותנה',
        'display_mode_help' => 'בחר כיצד מופיע מדריך המידות בדפי מוצר',

        'row_threshold' => 'סף שורות (למצב מותנה)',
        'row_threshold_help' => 'טבלאות עם יותר שורות מהכמות הזו ייפתחו בחלון קופץ',

        'button_text' => 'טקסט הכפתור',
        'button_text_placeholder' => 'מדריך מידות',
        'button_text_help' => 'הטקסט שמוצג בקישור/כפתור של מדריך המידות',

        'inline_expanded' => 'מורחב כברירת מחדל (מצב בתוך הדף)',
        'inline_expanded_help' => 'הצג את מדריך המידות מורחב כברירת מחדל במצב בתוך הדף. אם לא מסומן, הוא יוצג מכווץ עם כפתור החלפה.',

        'modal_title' => 'כותרת מודאל',
        'modal_title_placeholder' => 'מדריך מידות',
        'modal_title_help' => 'הכותרת שמוצגת בחלון המודאלי',

        'appearance' => 'הגדרות מראה',
        'show_image' => 'הצג תמונה',
        'show_image_help' => 'הצג את תמונת מדריך המידות מעל הטבלה',

        'link_color' => 'צבע הקישור',
        'link_color_help' => 'צבע טקסט הקישור של מדריך המידות (מצב בתוך הדף)',
        'header_bg_color' => 'צבע רקע הכותרת',
        'header_bg_color_help' => 'צבע הרקע לכותרת הטבלה',
        'header_text_color' => 'צבע טקסט הכותרת',
        'header_text_color_help' => 'צבע הטקסט לכותרת הטבלה',
        'row_bg_color' => 'צבע רקע השורה',
        'row_bg_color_help' => 'צבע הרקע לשורות הטבלה',
        'row_alt_bg_color' => 'צבע רקע חלופי לשורות',
        'row_alt_bg_color_help' => 'צבע רקע לשורות חלופיות (מפוספסות)',
        'row_text_color' => 'צבע טקסט השורה',
        'row_text_color_help' => 'צבע הטקסט לשורות הטבלה',
        'border_color' => 'צבע המסגרת',
        'border_color_help' => 'הצבע למסגרות הטבלה',
        'table_styles' => 'סגנונות טבלה',
        'table_styles_help' => 'בחר חוגות Bootstrap שיוחלו על טבלת מדריך המידות.',
        'table_style_bordered' => 'עם מסגרת (table-bordered)',
        'table_style_striped' => 'שורות מפוספסות (table-striped)',
        'table_style_hover' => 'אפקט ריחוף (table-hover)',
        'table_style_small' => 'טבלה קומפקטית (table-sm)',
        'font_size' => 'גודל גופן (פיקסלים)',
        'font_size_help' => 'גודל הגופן לטקסט הטבלה בפיקסלים',
        'border_radius' => 'רדיוס הפינות (פיקסלים)',
        'border_radius_help' => 'רדיוס הפינות של הטבלה בפיקסלים',
    ],

    'metabox' => [
        'title' => 'מדריך המידות של המוצר',
        'select_size_guide' => 'בחר מדריך מידות',
        'select_size_guide_placeholder' => '-- בחר מדריך מידות --',
        'no_size_guide' => 'אין מדריך מידות',
        'help_text' => 'שייך מדריך מידות ל:type זה. פעולה זו תחליף כל מדריך מידות שעובר בירושה מקטגוריה או ממותג.',
        'help_text_category' => 'כל המוצרים בקטגוריה זו יירשו את מדריך המידות הזה (אלא אם הוחלף ברמת המוצר).',
        'help_text_brand' => 'כל המוצרים של מותג זה יירשו את מדריך המידות הזה (אלא אם הוחלף ברמת המוצר או הקטגוריה).',
    ],

    'frontend' => [
        'view_size_guide' => 'צפה במדריך המידות',
        'close' => 'סגור',
    ],

    'messages' => [
        'created' => 'מדריך המידות נוצר בהצלחה',
        'updated' => 'מדריך המידות עודכן בהצלחה',
        'deleted' => 'מדריך המידות נמחק בהצלחה',
        'settings_saved' => 'ההגדרות נשמרו בהצלחה',
    ],
];
