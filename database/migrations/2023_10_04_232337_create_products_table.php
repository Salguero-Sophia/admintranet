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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('postItem_id')->unique();
            $table->string('name');
            $table->string('description')->nullable();
            $table->float('price');
            $table->text('comment')->nullable();
            $table->text('image')->nullable();

            $table->foreignId('productParent_id')
                ->nullable()
                ->constrained('products')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->boolean('useTakeOutPrice')->nullable()->default(1);
            $table->integer('quantity')->nullable()->default(1);
            $table->boolean('isDefault')->nullable()->default(1);

            $table->boolean('showInMenu')->default(1);
            $table->boolean('statusRegister')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
