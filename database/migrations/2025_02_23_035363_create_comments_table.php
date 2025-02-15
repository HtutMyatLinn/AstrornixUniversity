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
        Schema::create('comments', function (Blueprint $table) {
            $table->id('CommentID'); // Auto-increment primary key
            $table->string('UserID', 7)->index();
            $table->unsignedBigInteger('ContributionID'); // Foreign key to contributions
            $table->string('CommentText', 255); // The comment text
            $table->timestamp('CommentDate')->useCurrent(); // Timestamp with current time
            $table->timestamps();

            // Define foreign key relationships
            $table->foreign('UserID')->references('UserID')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ContributionID')->references('ContributionID')->on('contributions')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
