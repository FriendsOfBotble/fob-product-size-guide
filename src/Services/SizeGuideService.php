<?php

namespace FriendsOfBotble\ProductSizeGuide\Services;

use Botble\Ecommerce\Models\Brand;
use Botble\Ecommerce\Models\Product;
use FriendsOfBotble\ProductSizeGuide\Models\SizeGuide;
use FriendsOfBotble\ProductSizeGuide\Models\SizeGuideRelation;

class SizeGuideService
{
    public function getSizeGuideForProduct(Product $product): ?SizeGuide
    {
        // Priority 1: Check product-level assignment
        $relation = SizeGuideRelation::query()
            ->where('reference_type', 'product')
            ->where('reference_id', $product->getKey())
            ->first();

        if ($relation) {
            return $relation->sizeGuide;
        }

        // Priority 2: Check category-level assignment
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

        // Priority 3: Check brand-level assignment
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

    public function assignSizeGuide(?int $sizeGuideId, int $referenceId, string $referenceType): void
    {
        // Remove existing assignment
        SizeGuideRelation::query()
            ->where('reference_type', $referenceType)
            ->where('reference_id', $referenceId)
            ->delete();

        // Create new assignment if size guide is selected
        if ($sizeGuideId) {
            SizeGuideRelation::query()->create([
                'size_guide_id' => $sizeGuideId,
                'reference_id' => $referenceId,
                'reference_type' => $referenceType,
            ]);
        }
    }

    public function getAssignedSizeGuideId(int $referenceId, string $referenceType): ?int
    {
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
