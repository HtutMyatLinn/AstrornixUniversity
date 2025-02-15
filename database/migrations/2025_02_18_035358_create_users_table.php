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
            $table->string('UserID', 7)->primary();
            $table->string('Username', 30);
            $table->string('FirstName', 30);
            $table->string('LastName', 30);
            $table->string('Email', 30)->unique();
            $table->string('Password', 255);
            $table->unsignedBigInteger('FacultyID')->nullable();
            $table->unsignedBigInteger('RoleID');
            $table->date('LastLoginDate')->nullable();
            $table->date('LastPasswordChangedDate')->nullable();
            $table->date('PasswordExpiredDate')->nullable();
            $table->string('ProfileImage', 255)->nullable();
            $table->timestamps();

            $table->foreign('FacultyID')->references('FacultyID')->on('faculties')->onDelete('set null');
            $table->foreign('RoleID')->references('RoleID')->on('roles')->onDelete('cascade');
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
