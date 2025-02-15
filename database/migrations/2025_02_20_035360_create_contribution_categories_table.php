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
        Schema::create('contribution_categories', function (Blueprint $table) {
            $table->id('ContributionCategoryID'); // Auto-increment primary key
            $table->string('ContributionCategory', 255); // Category name (e.g., poem, article, short stories)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contribution_categories');
    }
};
