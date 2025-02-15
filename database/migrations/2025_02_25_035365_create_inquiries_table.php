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
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id('InquiryID'); // Auto-increment primary key
            $table->string('UserID', 7); // Foreign key to users
            $table->timestamp('InquiryDate')->useCurrent(); // Inquiry date, default current timestamp
            $table->string('InquiryStatus', 30)->default('Pending'); // Status: Pending / Resolved
            $table->string('PriorityLevel', 30); // Priority: Low, Medium, High
            $table->timestamp('ResponseDate')->nullable(); // Response date, nullable
            $table->timestamps();

            // Define foreign key relationship
            $table->foreign('UserID')->references('UserID')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inquiries');
    }
};
