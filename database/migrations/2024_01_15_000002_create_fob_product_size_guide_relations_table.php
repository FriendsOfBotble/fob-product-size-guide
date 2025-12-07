<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        if (Schema::hasTable('fob_product_size_guide_relations')) {
            return;
        }

        Schema::create('fob_product_size_guide_relations', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('size_guide_id')->constrained('fob_product_size_guides')->cascadeOnDelete();
            $table->foreignId('reference_id');
            $table->string('reference_type', 60); // 'product', 'category', 'brand'
            $table->timestamps();

            $table->index('size_guide_id', 'fob_psg_relations_size_guide_id_idx');
            $table->index(['reference_id', 'reference_type'], 'fob_psg_relations_ref_idx');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fob_product_size_guide_relations');
    }
};
