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
            $table->id('contribution_id'); // Auto-increment primary key
            $table->unsignedBigInteger('intake_id'); // Foreign key to intakes
            $table->unsignedBigInteger('contribution_category_id'); // Foreign key to contribution_categories
            $table->string('user_id', 7); // Foreign key to users
            $table->string('contribution_cover', 255)->nullable(); // Contribution main cover
            $table->string('contribution_title', 70); // Title with character limit
            $table->text('contribution_description'); // Description
            $table->text('contribution_file_path'); // File path of the Word document
            $table->date('submitted_date')->nullable(); // Submission date
            $table->string('contribution_status', 20)->default('Upload'); // Status (Upload, Reject, Update, Select, Publish)
            $table->integer('view_count')->default(0); // View count
            $table->timestamps();

            // Define foreign key relationships
            $table->foreign('intake_id')->references('intake_id')->on('intakes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('contribution_category_id')->references('contribution_category_id')->on('contribution_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
