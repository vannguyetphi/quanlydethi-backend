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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->longText('title');
            $table->longText('content');
            $table->integer('type');
            $table->integer('level')->nullable();
            $table->longText('A');
            $table->longText('B');
            $table->longText('C');
            $table->longText('D');
            $table->longText('answer');
            $table->longText('img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
