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


        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('city');
            $table->string('state');
            $table->string('postal');
            $table->string('country');
            $table->string('zipCode');
            $table->string('addressLineDescription');
            $table->string('commentAddress')->nullable();

            $table->boolean('statusRegister')->default(true);
            $table->timestamps();
        });


        Schema::create('costumers', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email')->unique();

            $table->text('password')->nullable();

            $table->string('phone')->unique();
            $table->string('taxCode');

            $table->foreignId('address_id')
                ->nullable()
                ->constrained('addresses')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->boolean('statusRegister')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('costumers');
        Schema::dropIfExists('addresses');
    }
};
