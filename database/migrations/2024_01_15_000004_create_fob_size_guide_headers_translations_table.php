<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        if (Schema::hasTable('fob_size_guide_headers_translations')) {
            return;
        }

        Schema::create('fob_size_guide_headers_translations', function (Blueprint $table): void {
            $table->string('lang_code', 20);
            $table->foreignId('fob_size_guide_headers_id');
            $table->string('name')->nullable();

            $table->primary(['lang_code', 'fob_size_guide_headers_id'], 'fob_size_guide_headers_translations_primary');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fob_size_guide_headers_translations');
    }
};
