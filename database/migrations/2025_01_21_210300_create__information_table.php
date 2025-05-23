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
        Schema::create('information', function (Blueprint $table) {
        $table->id();
        $table->string('user');
        $table->string('title');
        $table->string('email');
        $table->string('name');
        $table->string('image');
        $table->string('job1');
        $table->string('job2');
        $table->text('aboutmy');
        $table->string('address');
        $table->string('number');

        $table->timestamps();
    });
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_information');
    }
};
