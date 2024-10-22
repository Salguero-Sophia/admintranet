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
        Schema::create('applicants', function (Blueprint $table) {
            
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('street_address');
            $table->string('city');
            $table->string('state_province');
            $table->string('zip_postal_code');
            $table->text('about');
            $table->string('attachment_info')->nullable();

            $table->foreignId('career_id')
                ->nullable()
                ->constrained('careers')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};
