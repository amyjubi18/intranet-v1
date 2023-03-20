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
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->date('fecha');
            $table->string('documento')->unique();
           /*  $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('categoria_id')->nullable(); */
            /* $table->foreign('user_id')->references('id')->on('users')->onDelete('set null'); */
            /* $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('set null'); */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentos');
    }
};
