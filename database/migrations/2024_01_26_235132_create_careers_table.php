<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('careers', function (Blueprint $table) {
            
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('we_offer');
            $table->text('requirements');
            $table->string('age_range');
            $table->string('salary_range');
            $table->foreignId('store_id')
                ->nullable()
                ->constrained('stores');

            $table->boolean('is_active')->default(true);

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
