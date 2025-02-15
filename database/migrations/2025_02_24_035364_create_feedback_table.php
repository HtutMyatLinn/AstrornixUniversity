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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id('FeedbackID'); // Auto-increment primary key
            $table->unsignedBigInteger('ContributionID'); // Foreign key to contributions
            $table->string('UserID', 7); // Foreign key to users
            $table->timestamp('FeedbackGivenDate')->useCurrent(); // Timestamp with current time
            $table->string('Feedback', 255); // Feedback text
            $table->timestamps();

            // Define foreign key relationships
            $table->foreign('ContributionID')->references('ContributionID')->on('contributions')->onDelete('cascade');
            $table->foreign('UserID')->references('UserID')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
