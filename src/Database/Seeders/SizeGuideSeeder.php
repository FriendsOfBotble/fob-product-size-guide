<?php

namespace FriendsOfBotble\ProductSizeGuide\Database\Seeders;

use Botble\Base\Enums\BaseStatusEnum;
use FriendsOfBotble\ProductSizeGuide\Models\SizeGuide;
use FriendsOfBotble\ProductSizeGuide\Models\SizeGuideHeader;
use Illuminate\Database\Seeder;

class SizeGuideSeeder extends Seeder
{
    public function run(): void
    {
        if (SizeGuide::query()->count() > 0) {
            $this->command->info('Sample size guides already exist. Skipping seeder.');

            return;
        }

        $headers = [
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

        $sizeGuides = [
            [
                'name' => 'Women\'s Shoe Size Guide',
                'description' => 'International women\'s shoe size conversion chart',
                'image' => null,
                'table_headers' => ['US Size', 'EU Size', 'UK Size', 'Foot Length (cm)'],
                'table_rows' => [
                    ['5', '35-36', '3', '22.0'],
                    ['5.5', '36', '3.5', '22.5'],
                    ['6', '36-37', '4', '23.0'],
                    ['6.5', '37', '4.5', '23.5'],
                    ['7', '37-38', '5', '24.0'],
                    ['7.5', '38', '5.5', '24.5'],
                    ['8', '38-39', '6', '25.0'],
                    ['8.5', '39', '6.5', '25.5'],
                    ['9', '39-40', '7', '26.0'],
                    ['9.5', '40', '7.5', '26.5'],
                    ['10', '40-41', '8', '27.0'],
                ],
                'status' => BaseStatusEnum::PUBLISHED,
                'order' => 1,
            ],
            [
                'name' => 'Men\'s Shoe Size Guide',
                'description' => 'International men\'s shoe size conversion chart',
                'image' => null,
                'table_headers' => ['US Size', 'EU Size', 'UK Size', 'Foot Length (cm)'],
                'table_rows' => [
                    ['6', '39', '5.5', '24.0'],
                    ['6.5', '39-40', '6', '24.5'],
                    ['7', '40', '6.5', '25.0'],
                    ['7.5', '40-41', '7', '25.5'],
                    ['8', '41', '7.5', '26.0'],
                    ['8.5', '41-42', '8', '26.5'],
                    ['9', '42', '8.5', '27.0'],
                    ['9.5', '42-43', '9', '27.5'],
                    ['10', '43', '9.5', '28.0'],
                    ['10.5', '43-44', '10', '28.5'],
                    ['11', '44', '10.5', '29.0'],
                    ['11.5', '44-45', '11', '29.5'],
                    ['12', '45', '11.5', '30.0'],
                ],
                'status' => BaseStatusEnum::PUBLISHED,
                'order' => 2,
            ],
            [
                'name' => 'Women\'s Clothing Size Guide',
                'description' => 'International women\'s clothing size chart',
                'image' => null,
                'table_headers' => ['US Size', 'EU Size', 'UK Size', 'Bust (cm)', 'Waist (cm)', 'Hip (cm)'],
                'table_rows' => [
                    ['XS', '32', '6', '78-82', '60-64', '86-90'],
                    ['S', '34-36', '8-10', '82-86', '64-68', '90-94'],
                    ['M', '38', '12', '86-90', '68-72', '94-98'],
                    ['L', '40-42', '14-16', '90-94', '72-76', '98-102'],
                    ['XL', '44', '18', '94-98', '76-80', '102-106'],
                    ['2XL', '46-48', '20-22', '98-104', '80-86', '106-112'],
                ],
                'status' => BaseStatusEnum::PUBLISHED,
                'order' => 3,
            ],
            [
                'name' => 'Men\'s Clothing Size Guide',
                'description' => 'International men\'s clothing size chart',
                'image' => null,
                'table_headers' => ['US Size', 'EU Size', 'UK Size', 'Chest (cm)', 'Waist (cm)', 'Hip (cm)'],
                'table_rows' => [
                    ['XS', '44', '34', '86-89', '71-76', '86-89'],
                    ['S', '46-48', '36-38', '89-94', '76-81', '89-94'],
                    ['M', '50', '40', '94-99', '81-86', '94-99'],
                    ['L', '52-54', '42-44', '99-104', '86-91', '99-104'],
                    ['XL', '56', '46', '104-109', '91-97', '104-109'],
                    ['2XL', '58-60', '48-50', '109-117', '97-104', '109-117'],
                ],
                'status' => BaseStatusEnum::PUBLISHED,
                'order' => 4,
            ],
            [
                'name' => 'Men\'s Shirt Size Guide',
                'description' => 'Men\'s dress shirt size conversion',
                'image' => null,
                'table_headers' => ['Size', 'Neck (cm)', 'Chest (cm)', 'Sleeve Length (cm)'],
                'table_rows' => [
                    ['S', '37-38', '92-97', '81-84'],
                    ['M', '39-40', '97-102', '84-87'],
                    ['L', '41-42', '102-107', '87-90'],
                    ['XL', '43-44', '107-112', '90-93'],
                    ['2XL', '45-46', '112-117', '93-96'],
                    ['3XL', '47-48', '117-122', '96-99'],
                ],
                'status' => BaseStatusEnum::PUBLISHED,
                'order' => 5,
            ],
            [
                'name' => 'Kids Clothing Size Guide',
                'description' => 'Children\'s clothing size chart by age',
                'image' => null,
                'table_headers' => ['Age', 'Height (cm)', 'Chest (cm)', 'Waist (cm)'],
                'table_rows' => [
                    ['2-3 years', '92-98', '52-54', '50-52'],
                    ['3-4 years', '98-104', '54-56', '52-53'],
                    ['4-5 years', '104-110', '56-58', '53-54'],
                    ['5-6 years', '110-116', '58-60', '54-55'],
                    ['6-7 years', '116-122', '60-63', '55-57'],
                    ['7-8 years', '122-128', '63-66', '57-58'],
                    ['8-9 years', '128-134', '66-69', '58-60'],
                    ['9-10 years', '134-140', '69-72', '60-62'],
                    ['10-11 years', '140-146', '72-76', '62-64'],
                    ['11-12 years', '146-152', '76-80', '64-66'],
                ],
                'status' => BaseStatusEnum::PUBLISHED,
                'order' => 6,
            ],
            [
                'name' => 'Ring Size Guide',
                'description' => 'International ring size conversion chart',
                'image' => null,
                'table_headers' => ['US Size', 'EU Size', 'UK Size', 'Diameter (mm)', 'Circumference (mm)'],
                'table_rows' => [
                    ['5', '49', 'J', '15.7', '49.3'],
                    ['5.5', '50.5', 'K', '16.1', '50.6'],
                    ['6', '51.5', 'L', '16.5', '51.9'],
                    ['6.5', '53', 'M', '16.9', '53.1'],
                    ['7', '54', 'N', '17.3', '54.4'],
                    ['7.5', '55.5', 'O', '17.7', '55.7'],
                    ['8', '56.5', 'P', '18.2', '57.0'],
                    ['8.5', '58', 'Q', '18.5', '58.3'],
                    ['9', '59', 'R', '19.0', '59.5'],
                    ['9.5', '60.5', 'S', '19.4', '60.8'],
                    ['10', '61.5', 'T', '19.8', '62.1'],
                ],
                'status' => BaseStatusEnum::PUBLISHED,
                'order' => 7,
            ],
            [
                'name' => 'Glove Size Guide',
                'description' => 'Glove size chart by hand circumference',
                'image' => null,
                'table_headers' => ['Size', 'Hand Circumference (cm)', 'Hand Length (cm)'],
                'table_rows' => [
                    ['XS', '15-17', '16-17'],
                    ['S', '17-19', '17-18'],
                    ['M', '19-21', '18-19'],
                    ['L', '21-23', '19-20'],
                    ['XL', '23-25', '20-21'],
                    ['2XL', '25-27', '21-22'],
                ],
                'status' => BaseStatusEnum::PUBLISHED,
                'order' => 8,
            ],
            [
                'name' => 'Hat Size Guide',
                'description' => 'Hat and cap size conversion',
                'image' => null,
                'table_headers' => ['Size', 'Head Circumference (cm)', 'Head Circumference (inches)'],
                'table_rows' => [
                    ['XS', '53-54', '20.9-21.3'],
                    ['S', '55-56', '21.7-22.0'],
                    ['M', '57-58', '22.4-22.8'],
                    ['L', '59-60', '23.2-23.6'],
                    ['XL', '61-62', '24.0-24.4'],
                    ['2XL', '63-64', '24.8-25.2'],
                ],
                'status' => BaseStatusEnum::PUBLISHED,
                'order' => 9,
            ],
            [
                'name' => 'Jeans Size Guide',
                'description' => 'Jeans size conversion for waist and length',
                'image' => null,
                'table_headers' => ['Size', 'Waist (inches)', 'Waist (cm)', 'Inseam (inches)', 'Inseam (cm)'],
                'table_rows' => [
                    ['28/30', '28', '71', '30', '76'],
                    ['29/30', '29', '74', '30', '76'],
                    ['30/32', '30', '76', '32', '81'],
                    ['31/32', '31', '79', '32', '81'],
                    ['32/32', '32', '81', '32', '81'],
                    ['33/32', '33', '84', '32', '81'],
                    ['34/32', '34', '86', '32', '81'],
                    ['34/34', '34', '86', '34', '86'],
                    ['36/32', '36', '91', '32', '81'],
                    ['36/34', '36', '91', '34', '86'],
                    ['38/32', '38', '97', '32', '81'],
                    ['40/32', '40', '102', '32', '81'],
                ],
                'status' => BaseStatusEnum::PUBLISHED,
                'order' => 10,
            ],
        ];

        foreach ($sizeGuides as $guide) {
            SizeGuide::query()->create($guide);
        }

        $this->command->info('Created ' . count($sizeGuides) . ' sample size guides.');
    }
}
