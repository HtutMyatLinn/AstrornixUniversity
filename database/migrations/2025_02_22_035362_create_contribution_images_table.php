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
            $table->id('ContributionImageID'); // Auto-increment primary key
            $table->string('ContributionImagePath', 255); // Image file path
            $table->unsignedBigInteger('ContributionID'); // Foreign key to contributions
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('ContributionID')->references('ContributionID')->on('contributions')->onDelete('cascade')->onUpdate('cascade');
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
