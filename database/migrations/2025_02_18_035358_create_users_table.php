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
        Schema::create('users', function (Blueprint $table) {
            $table->string('user_id', 7)->primary();
            $table->string('username', 30);
            $table->string('first_name', 30);
            $table->string('last_name', 30);
            $table->string('email', 30)->unique();
            $table->string('password', 255);
            $table->string('profile_image', 255)->nullable();
            $table->unsignedBigInteger('faculty_id')->nullable();
            $table->unsignedBigInteger('role_id')->nullable();
            $table->date('last_login_date')->nullable();
            $table->date('last_password_changed_date')->nullable();
            $table->date('password_expired_date')->nullable();
            $table->timestamps();

            $table->foreign('faculty_id')->references('faculty_id')->on('faculties')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('role_id')->references('role_id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
