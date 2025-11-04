<?php

return [
    'name' => 'คู่มือขนาดสินค้า',
    'size_guide' => 'คู่มือขนาด',
    'size_guides' => 'คู่มือขนาด',
    'create' => 'สร้างคู่มือขนาดใหม่',
    'edit' => 'แก้ไขคู่มือขนาด',
    'settings_menu' => 'การตั้งค่า',

    'form' => [
        'name' => 'ชื่อ',
        'name_placeholder' => 'กรอกชื่อคู่มือขนาด',
        'description' => 'คำอธิบาย',
        'description_placeholder' => 'กรอกคำอธิบาย (ไม่บังคับ)',
        'image' => 'รูปภาพ',
        'image_helper' => 'อัปโหลดไดอะแกรมหรือรูปอ้างอิงของคู่มือขนาด',
        'table_builder' => 'ตัวสร้างตาราง',
        'table_builder_helper' => 'สร้างตารางคู่มือขนาดโดยการเพิ่มคอลัมน์และแถว',
        'status' => 'สถานะ',
        'order' => 'ลำดับ',
        'order_helper' => 'หมายเลขที่น้อยกว่าจะถูกแสดงก่อน',
    ],

    'table' => [
        'id' => 'ไอดี',
        'name' => 'ชื่อ',
        'image' => 'รูปภาพ',
        'rows_count' => 'แถว',
        'status' => 'สถานะ',
        'created_at' => 'วันที่สร้าง',
    ],

    'table_builder' => [
        'add_column' => 'เพิ่มคอลัมน์',
        'add_row' => 'เพิ่มแถว',
        'column_header' => 'หัวคอลัมน์',
        'select_header' => 'เลือกหัวคอลัมน์',
        'no_columns' => 'ยังไม่มีคอลัมน์ คลิก "เพิ่มคอลัมน์" เพื่อเริ่มต้น',
        'no_rows' => 'ยังไม่มีแถว คลิก "เพิ่มแถว" เพื่อเพิ่มข้อมูล',
    ],

    'headers' => [
        'name' => 'หัวข้อคู่มือขนาด',
        'create' => 'สร้างหัวข้อใหม่',
        'edit' => 'แก้ไขหัวข้อ',
        'category' => 'หมวดหมู่',
        'categories' => [
            'general' => 'ทั่วไป',
            'size' => 'ขนาด',
            'measurement' => 'การวัด',
            'unit' => 'หน่วย',
        ],
    ],

    'settings' => [
        'title' => 'การตั้งค่าคู่มือขนาดสินค้า',
        'description' => 'กำหนดวิธีการแสดงคู่มือขนาดในหน้าสินค้า',

        'display' => 'การตั้งค่าการแสดงผล',
        'display_mode' => 'โหมดการแสดงผล',
        'display_mode_inline' => 'อินไลน์',
        'display_mode_popup' => 'ป๊อปอัป (โมดอล)',
        'display_mode_conditional' => 'ตามเงื่อนไข',
        'display_mode_help' => 'เลือกวิธีการแสดงคู่มือขนาดในหน้าสินค้า',

        'row_threshold' => 'เกณฑ์จำนวนแถว (สำหรับโหมดตามเงื่อนไข)',
        'row_threshold_help' => 'ตารางที่มีแถวเกินจำนวนนี้จะเปิดในป๊อปอัป',

        'button_text' => 'ข้อความบนปุ่ม',
        'button_text_placeholder' => 'คู่มือขนาด',
        'button_text_help' => 'ข้อความที่แสดงบนลิงก์/ปุ่มคู่มือขนาด',

        'inline_expanded' => 'ขยายโดยค่าเริ่มต้น (โหมดอินไลน์)',
        'inline_expanded_help' => 'แสดงคู่มือขนาดแบบขยายโดยค่าเริ่มต้นในโหมดอินไลน์ หากไม่เลือกจะแสดงเป็นแบบย่อพร้อมปุ่มสลับ',

        'modal_title' => 'ชื่อโมดอล',
        'modal_title_placeholder' => 'คู่มือขนาด',
        'modal_title_help' => 'ชื่อที่แสดงในหน้าต่างป๊อปอัป',

        'appearance' => 'การตั้งค่ารูปลักษณ์',
        'show_image' => 'แสดงรูปภาพ',
        'show_image_help' => 'แสดงรูปภาพคู่มือขนาดเหนือหัวตาราง',

        'link_color' => 'สีลิงก์',
        'link_color_help' => 'สีของข้อความลิงก์คู่มือขนาด (โหมดอินไลน์)',
        'header_bg_color' => 'สีพื้นหลังหัวตาราง',
        'header_bg_color_help' => 'สีพื้นหลังสำหรับหัวตาราง',
        'header_text_color' => 'สีข้อความหัวตาราง',
        'header_text_color_help' => 'สีข้อความสำหรับหัวตาราง',
        'row_bg_color' => 'สีพื้นหลังแถว',
        'row_bg_color_help' => 'สีพื้นหลังสำหรับแถวในตาราง',
        'row_alt_bg_color' => 'สีพื้นหลังแถวสลับ',
        'row_alt_bg_color_help' => 'สีพื้นหลังสำหรับแถวสลับ (แถวลาย)',
        'row_text_color' => 'สีข้อความแถว',
        'row_text_color_help' => 'สีข้อความสำหรับแถวในตาราง',
        'border_color' => 'สีเส้นขอบ',
        'border_color_help' => 'สีของเส้นขอบตาราง',
        'table_styles' => 'สไตล์ของตาราง',
        'table_styles_help' => 'เลือกคลาสตารางของ Bootstrap ที่ต้องการใช้กับคู่มือขนาด',
        'table_style_bordered' => 'มีเส้นขอบ (table-bordered)',
        'table_style_striped' => 'แถวสลับสี (table-striped)',
        'table_style_hover' => 'เอฟเฟ็กต์เมื่อชี้ (table-hover)',
        'table_style_small' => 'ตารางแบบกระทัดรัด (table-sm)',
        'font_size' => 'ขนาดตัวอักษร (px)',
        'font_size_help' => 'ขนาดตัวอักษรของข้อความในตารางเป็นพิกเซล',
        'border_radius' => 'รัศมีมุม (px)',
        'border_radius_help' => 'รัศมีมุมของตารางเป็นพิกเซล',
    ],

    'metabox' => [
        'title' => 'คู่มือขนาดสินค้า',
        'select_size_guide' => 'เลือกคู่มือขนาด',
        'select_size_guide_placeholder' => '-- เลือกคู่มือขนาด --',
        'no_size_guide' => 'ไม่มีคู่มือขนาด',
        'help_text' => 'กำหนดคู่มือขนาดให้กับ :type นี้ เพื่อแทนที่คู่มือจากหมวดหมู่หรือแบรนด์',
        'help_text_category' => 'สินค้าทั้งหมดในหมวดหมู่นี้จะใช้คู่มือขนาดนี้ (ยกเว้นมีการตั้งค่าใหม่ในระดับสินค้า)',
        'help_text_brand' => 'สินค้าทั้งหมดของแบรนด์นี้จะใช้คู่มือขนาดนี้ (ยกเว้นมีการตั้งค่าใหม่ในระดับสินค้า หรือหมวดหมู่)',
    ],

    'frontend' => [
        'view_size_guide' => 'ดูคู่มือขนาด',
        'close' => 'ปิด',
    ],

    'messages' => [
        'created' => 'สร้างคู่มือขนาดเรียบร้อยแล้ว',
        'updated' => 'อัปเดตคู่มือขนาดเรียบร้อยแล้ว',
        'deleted' => 'ลบคู่มือขนาดเรียบร้อยแล้ว',
        'settings_saved' => 'บันทึกการตั้งค่าเรียบร้อยแล้ว',
    ],
];
