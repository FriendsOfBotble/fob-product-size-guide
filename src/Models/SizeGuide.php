<?php

namespace FriendsOfBotble\ProductSizeGuide\Models;

use Botble\Base\Casts\SafeContent;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SizeGuide extends BaseModel
{
    protected $table = 'fob_product_size_guides';

    protected $fillable = [
        'name',
        'description',
        'image',
        'table_headers',
        'table_rows',
        'status',
        'order',
    ];

    protected $casts = [
        'status' => BaseStatusEnum::class,
        'table_headers' => 'array',
        'table_rows' => 'array',
        'order' => 'integer',
        'name' => SafeContent::class,
    ];

    public function relations(): HasMany
    {
        return $this->hasMany(SizeGuideRelation::class, 'size_guide_id');
    }
}
