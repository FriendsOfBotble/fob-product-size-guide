<?php

return [
    [
        'name' => 'Product Size Guides',
        'flag' => 'product-size-guide.index',
        'parent_flag' => 'plugins.ecommerce',
    ],
    [
        'name' => 'Create',
        'flag' => 'product-size-guide.create',
        'parent_flag' => 'product-size-guide.index',
    ],
    [
        'name' => 'Edit',
        'flag' => 'product-size-guide.edit',
        'parent_flag' => 'product-size-guide.index',
    ],
    [
        'name' => 'Delete',
        'flag' => 'product-size-guide.destroy',
        'parent_flag' => 'product-size-guide.index',
    ],
    [
        'name' => 'Size Guide Headers',
        'flag' => 'size-guide-headers.index',
        'parent_flag' => 'product-size-guide.index',
    ],
    [
        'name' => 'Create',
        'flag' => 'size-guide-headers.create',
        'parent_flag' => 'size-guide-headers.index',
    ],
    [
        'name' => 'Edit',
        'flag' => 'size-guide-headers.edit',
        'parent_flag' => 'size-guide-headers.index',
    ],
    [
        'name' => 'Delete',
        'flag' => 'size-guide-headers.destroy',
        'parent_flag' => 'size-guide-headers.index',
    ],
    [
        'name' => 'Settings',
        'flag' => 'product-size-guide.settings',
        'parent_flag' => 'product-size-guide.index',
    ],
];
