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
        Schema::create('usuarias', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('nickname')->unique();
            $table->string('foto');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('email')->unique();
            $table->string('contrasena');
            $table->integer('id_rol');
            $table->string('id_documento');
            $table->char('status');
            $table->integer('edad');
            $table->text('dirección');
            $table->string('telefono');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarias');
    }
};
