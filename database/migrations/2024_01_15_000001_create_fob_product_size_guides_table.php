<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        if (Schema::hasTable('fob_product_size_guides')) {
            return;
        }

        Schema::create('fob_product_size_guides', function (Blueprint $table): void {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->json('table_headers')->nullable();
            $table->json('table_rows')->nullable();
            $table->string('status', 60)->default('published');
            $table->integer('order')->default(0);
            $table->timestamps();

            $table->index('status', 'fob_psg_status_idx');
            $table->index('order', 'fob_psg_order_idx');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fob_product_size_guides');
    }
};
