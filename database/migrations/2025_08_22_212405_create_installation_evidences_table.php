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
        Schema::create('installation_evidences', function (Blueprint $table) {
           $table->id();
            $table->unsignedBigInteger('element_id');
            $table->string('evidence'); // file path or text
            $table->boolean('is_mandatory')->default(false);
            $table->timestamps();

            $table->foreign('element_id')
                  ->references('id')
                  ->on('elements')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('installation_evidences');
    }
};
