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
        Schema::create('measure_sub_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('measure_id')->constrained()->onDelete('cascade');
            $table->foreignId('sub_tag_id')->constrained()->onDelete('cascade');
            $table->timestamps();

            $table->unique(['measure_id', 'sub_tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('measure_sub_tags');
    }
};
