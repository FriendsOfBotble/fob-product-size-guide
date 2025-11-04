<?php

namespace FriendsOfBotble\ProductSizeGuide\Models;

use Botble\Base\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class SizeGuideRelation extends BaseModel
{
    protected $table = 'fob_product_size_guide_relations';

    protected $fillable = [
        'size_guide_id',
        'reference_id',
        'reference_type',
    ];

    protected $casts = [
        'size_guide_id' => 'integer',
        'reference_id' => 'integer',
    ];

    public function sizeGuide(): BelongsTo
    {
        return $this->belongsTo(SizeGuide::class, 'size_guide_id');
    }

    public function reference(): MorphTo
    {
        return $this->morphTo('reference', 'reference_type', 'reference_id');
    }
}
