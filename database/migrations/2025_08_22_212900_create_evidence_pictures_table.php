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
        Schema::create('evidence_pictures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('installation_evidence_id');
            $table->string('path'); // file path or URL of the picture
            $table->timestamps();

            $table->foreign('installation_evidence_id')
                  ->references('id')->on('installation_evidences')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evidence_pictures');
    }
};
