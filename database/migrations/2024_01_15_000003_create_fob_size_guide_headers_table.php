<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        if (Schema::hasTable('fob_size_guide_headers')) {
            return;
        }

        Schema::create('fob_size_guide_headers', function (Blueprint $table): void {
            $table->id();
            $table->string('name'); // e.g., "Size", "US Size", "Chest"
            $table->string('slug')->unique(); // e.g., "size", "us_size", "chest"
            $table->string('category', 60)->default('general'); // general, size, measurement, unit
            $table->integer('order')->default(0);
            $table->string('status', 60)->default('published');
            $table->timestamps();

            $table->index('status', 'fob_psg_headers_status_idx');
            $table->index('category', 'fob_psg_headers_category_idx');
            $table->index('order', 'fob_psg_headers_order_idx');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fob_size_guide_headers');
    }
};
