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
            $table->id('inquiry_id'); // Auto-increment primary key
            $table->string('user_id', 7); // Foreign key to users
            $table->string('priority_level', 30); // Priority: Low, Medium, High
            $table->string('inquiry_status', 30)->default('Pending'); // Status: Pending / Resolved
            $table->timestamp('inquiry_date')->useCurrent(); // Inquiry date, default current timestamp
            $table->timestamp('response_date')->nullable(); // Response date, nullable
            $table->timestamps();

            // Define foreign key relationship
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
