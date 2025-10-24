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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id(); $table->foreignId('user_id')->constrained()->cascadeOnDelete(); 
            $table->string('title'); 
            $table->text('description')->nullable(); 
            $table->longText('ingredients'); 
            $table->longText('steps'); 
            $table->integer('prep_time')->nullable(); 
            $table->enum('difficulty', ['easy','medium', 'hard'])->nullable(); 
            $table->string('image'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
