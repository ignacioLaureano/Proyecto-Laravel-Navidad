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
        Schema::create('characters', function (Blueprint $table) {
            $table->id('id')->primary()->autoIncrement();
            $table->string('name')->default('player');
            $table->integer('level')->default(1);
            $table->dateTime('account_creation');
            $table->boolean('isActive')->nullable();
            $table->enum('genre',['male','female']);
            $table->enum('type',['mental','logic']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};