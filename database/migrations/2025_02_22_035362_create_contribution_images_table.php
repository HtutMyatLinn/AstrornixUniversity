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
        Schema::create('contribution_images', function (Blueprint $table) {
            $table->id('contribution_image_id'); // Auto-increment primary key
            $table->string('contribution_image_path', 255); // Image file path
            $table->unsignedBigInteger('contribution_id'); // Foreign key to contributions
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('contribution_id')->references('contribution_id')->on('contributions')->onDelete('cascade')->onUpdate('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contribution_images');
    }
};
