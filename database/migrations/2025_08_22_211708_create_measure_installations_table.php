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
        Schema::create('measure_installations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('measure_id');
            $table->string('installation'); // installation info
            $table->timestamps();

            $table->foreign('measure_id')
                  ->references('id')
                  ->on('measures')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('measure_installations');
    }
};
