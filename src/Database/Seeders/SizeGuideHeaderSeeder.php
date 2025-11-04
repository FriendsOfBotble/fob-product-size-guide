<?php

namespace FriendsOfBotble\ProductSizeGuide\Database\Seeders;

use Botble\Base\Enums\BaseStatusEnum;
use FriendsOfBotble\ProductSizeGuide\Models\SizeGuideHeader;
use Illuminate\Database\Seeder;

class SizeGuideHeaderSeeder extends Seeder
{
    public function run(): void
    {
        if (SizeGuideHeader::query()->count() > 0) {
            $this->command->info('Size guide headers already exist. Skipping seeder.');

            return;
        }

        $headers = [
            // Size variations
            ['name' => 'Size', 'slug' => 'size', 'category' => 'size', 'order' => 1],
            ['name' => 'US Size', 'slug' => 'us_size', 'category' => 'size', 'order' => 2],
            ['name' => 'UK Size', 'slug' => 'uk_size', 'category' => 'size', 'order' => 3],
            ['name' => 'EU Size', 'slug' => 'eu_size', 'category' => 'size', 'order' => 4],
            ['name' => 'JP Size', 'slug' => 'jp_size', 'category' => 'size', 'order' => 5],
            ['name' => 'XS', 'slug' => 'xs', 'category' => 'size', 'order' => 6],
            ['name' => 'S', 'slug' => 's', 'category' => 'size', 'order' => 7],
            ['name' => 'M', 'slug' => 'm', 'category' => 'size', 'order' => 8],
            ['name' => 'L', 'slug' => 'l', 'category' => 'size', 'order' => 9],
            ['name' => 'XL', 'slug' => 'xl', 'category' => 'size', 'order' => 10],
            ['name' => 'XXL', 'slug' => 'xxl', 'category' => 'size', 'order' => 11],

            // Body measurements
            ['name' => 'Chest', 'slug' => 'chest', 'category' => 'measurement', 'order' => 12],
            ['name' => 'Waist', 'slug' => 'waist', 'category' => 'measurement', 'order' => 13],
            ['name' => 'Hips', 'slug' => 'hips', 'category' => 'measurement', 'order' => 14],
            ['name' => 'Length', 'slug' => 'length', 'category' => 'measurement', 'order' => 15],
            ['name' => 'Width', 'slug' => 'width', 'category' => 'measurement', 'order' => 16],
            ['name' => 'Height', 'slug' => 'height', 'category' => 'measurement', 'order' => 17],
            ['name' => 'Shoulder', 'slug' => 'shoulder', 'category' => 'measurement', 'order' => 18],
            ['name' => 'Sleeve', 'slug' => 'sleeve', 'category' => 'measurement', 'order' => 19],
            ['name' => 'Inseam', 'slug' => 'inseam', 'category' => 'measurement', 'order' => 20],
            ['name' => 'Neck', 'slug' => 'neck', 'category' => 'measurement', 'order' => 21],
            ['name' => 'Bust', 'slug' => 'bust', 'category' => 'measurement', 'order' => 22],

            // Other measurements
            ['name' => 'Weight', 'slug' => 'weight', 'category' => 'general', 'order' => 23],
            ['name' => 'Age', 'slug' => 'age', 'category' => 'general', 'order' => 24],

            // Units
            ['name' => 'CM', 'slug' => 'cm', 'category' => 'unit', 'order' => 25],
            ['name' => 'Inches', 'slug' => 'inches', 'category' => 'unit', 'order' => 26],
            ['name' => 'KG', 'slug' => 'kg', 'category' => 'unit', 'order' => 27],
            ['name' => 'LBS', 'slug' => 'lbs', 'category' => 'unit', 'order' => 28],
        ];

        foreach ($headers as $header) {
            SizeGuideHeader::query()->create([
                'name' => $header['name'],
                'slug' => $header['slug'],
                'category' => $header['category'],
                'order' => $header['order'],
                'status' => BaseStatusEnum::PUBLISHED,
            ]);
        }

        $this->command->info('Created ' . count($headers) . ' size guide headers.');
    }
}
