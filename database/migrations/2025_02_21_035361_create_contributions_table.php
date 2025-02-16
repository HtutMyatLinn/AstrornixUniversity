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
        Schema::create('contributions', function (Blueprint $table) {
            $table->id('ContributionID'); // Auto-increment primary key
            $table->unsignedBigInteger('IntakeID'); // Foreign key to intakes
            $table->unsignedBigInteger('ContributionCategoryID'); // Foreign key to contribution_categories
            $table->string('UserID', 7); // Foreign key to users
            $table->string('ContributionCover', 255)->nullable(); // Contribution main cover
            $table->string('ContributionTitle', 70); // Title with character limit
            $table->text('ContributionDescription'); // Description
            $table->text('ContributionFilePath'); // File path of the Word document
            $table->date('SubmittedDate')->nullable(); // Submission date
            $table->string('ContributionStatus', 20)->default('Upload'); // Status (Upload, Reject, Update, Select, Publish)
            $table->integer('ViewCount')->default(0); // View count
            $table->timestamps();

            // Define foreign key relationships
            $table->foreign('IntakeID')->references('IntakeID')->on('intakes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ContributionCategoryID')->references('ContributionCategoryID')->on('contribution_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('UserID')->references('UserID')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contributions');
    }
};
