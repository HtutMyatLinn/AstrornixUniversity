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
        Schema::create('intakes', function (Blueprint $table) {
            $table->id('IntakeID'); // Auto-increment primary key
            $table->string('Intake', 50); // Intake name
            $table->unsignedBigInteger('AcademicYearID'); // Foreign key to academic_years
            $table->date('ClosureDate')->nullable(); // Closure date for contributions
            $table->date('FinalClosureDate')->nullable(); // Final closure date
            $table->timestamps();

            // Define foreign key relationship
            $table->foreign('AcademicYearID')->references('AcademicYearID')->on('academic_years')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('intakes');
    }
};
