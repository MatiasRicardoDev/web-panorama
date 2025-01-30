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
        Schema::create('oficina_bahia_blancas', function (Blueprint $table) {
            $table->id();
            $table->string('sabado_0')->nullable();
            $table->string('domingo_0')->nullable();
            $table->string('sabado_1')->nullable();
            $table->string('domingo_1')->nullable();
            $table->string('sabado_2')->nullable();
            $table->string('domingo_2')->nullable();
            $table->string('sabado_3')->nullable();
            $table->string('domingo_3')->nullable();
            $table->string('sabado_4')->nullable();
            $table->string('domingo_4')->nullable();
            $table->string('sabado_5')->nullable();
            $table->string('domingo_5')->nullable();
            $table->string('sabado_6')->nullable();
            $table->string('domingo_6')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oficina_bahia_blancas');
    }
};
