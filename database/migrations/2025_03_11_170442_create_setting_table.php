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
        Schema::create('setting', function (Blueprint $table) {

            $table->id();
            $table->string('user');
            $table->string('theme');
            $table->boolean('bilingual')->default(false);
            $table->string('def-lang')->default('fa');
            $table->boolean('status_mode')->default(false);
            $table->string('def-mode'); 
            $table->boolean('bot')->default(false);
            $table->string('bot-token');
            $table->bigInteger('bot-id'); 
            $table->timestamps(); 
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting');
    }
};
