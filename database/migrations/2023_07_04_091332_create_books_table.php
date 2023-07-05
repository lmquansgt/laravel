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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::table('books', function (Blueprint $table) {
            $table->string('title');
            $table->string('author');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');

        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn(['title', 'author']);
        });
    }
};
