<?php

namespace FriendsOfBotble\ProductSizeGuide\Services;

use Botble\Ecommerce\Models\Product;
use FriendsOfBotble\ProductSizeGuide\Models\SizeGuide;
use FriendsOfBotble\ProductSizeGuide\Models\SizeGuideRelation;

class SizeGuideService
{
    public function getSizeGuideForProduct(Product $product): ?SizeGuide
    {
        $relation = SizeGuideRelation::query()
            ->where('reference_type', 'product')
            ->where('reference_id', $product->getKey())
            ->first();

        if ($relation) {
            return $relation->sizeGuide;
        }

        if ($product->categories->isNotEmpty()) {
            foreach ($product->categories as $category) {
                $relation = SizeGuideRelation::query()
                    ->where('reference_type', 'category')
                    ->where('reference_id', $category->getKey())
                    ->first();

                if ($relation) {
                    return $relation->sizeGuide;
                }
            }
        }

        if ($product->brand_id) {
            $relation = SizeGuideRelation::query()
                ->where('reference_type', 'brand')
                ->where('reference_id', $product->brand_id)
                ->first();

            if ($relation) {
                return $relation->sizeGuide;
            }
        }

        return null;
    }

    public function assignSizeGuide(int|string|null $sizeGuideId, int|string $referenceId, string $referenceType): void
    {
        SizeGuideRelation::query()
            ->where('reference_type', $referenceType)
            ->where('reference_id', $referenceId)
            ->delete();

        if ($sizeGuideId) {
            SizeGuideRelation::query()->create([
                'size_guide_id' => $sizeGuideId,
                'reference_id' => $referenceId,
                'reference_type' => $referenceType,
            ]);
        }
    }

    public function getAssignedSizeGuideId(int|string|null $referenceId, string $referenceType): int|string|null
    {
        if (! $referenceId) {
            return null;
        }

        $relation = SizeGuideRelation::query()
            ->where('reference_type', $referenceType)
            ->where('reference_id', $referenceId)
            ->first();

        return $relation?->size_guide_id;
    }

    public function getAllSizeGuides(): array
    {
        return SizeGuide::query()
            ->where('status', 'published')
            ->orderBy('order')
            ->orderBy('name')
            ->pluck('name', 'id')
            ->toArray();
    }
}
