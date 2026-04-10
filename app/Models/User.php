<?php
// database/migrations/2024_01_01_000000_create_kuesioners_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kuesioners', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->string('institusi');
            $table->integer('q1')->default(0); // Pemahaman AI
            $table->integer('q2')->default(0); // Penggunaan AI
            $table->integer('q3')->default(0); // Etika AI
            $table->integer('q4')->default(0); // Literasi AI
            $table->text('feedback')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kuesioners');
    }
};