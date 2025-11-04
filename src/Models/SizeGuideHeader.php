<?php

namespace FriendsOfBotble\ProductSizeGuide\Models;

use Botble\Base\Casts\SafeContent;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Models\BaseModel;

class SizeGuideHeader extends BaseModel
{
    protected $table = 'fob_size_guide_headers';

    protected $fillable = [
        'name',
        'slug',
        'category',
        'order',
        'status',
    ];

    protected $casts = [
        'status' => BaseStatusEnum::class,
        'order' => 'integer',
        'name' => SafeContent::class,
    ];
}
