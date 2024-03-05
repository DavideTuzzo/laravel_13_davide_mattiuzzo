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
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->id(); //crea il campo id
            $table->string('title',50); //crea il campo titolo con massimop 50caratteri
            $table->text('content'); //crea il campo contenuto
            $table->integer('stelle');
            $table->string('image');
            $table->timestamps(); // quando vinee crerato e quando viene aggiornato

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedbacks');
    }
};
