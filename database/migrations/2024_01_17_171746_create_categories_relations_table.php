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
        Schema::create('categories_relations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('category_id')
                ->nullable()
                ->constrained('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('sub_category_id')
                ->nullable()
                ->constrained('sub_categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->boolean('statusRegister')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories_relations');
    }
};
