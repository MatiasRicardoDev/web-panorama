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
        Schema::create('oficina_san_lorenzos', function (Blueprint $table) {
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
            $table->string('sabado_7')->nullable();
            $table->string('domingo_7')->nullable();
            $table->string('sabado_8')->nullable();
            $table->string('domingo_8')->nullable();
            $table->string('sabado_9')->nullable();
            $table->string('domingo_9')->nullable();
            $table->string('sabado_10')->nullable();
            $table->string('domingo_10')->nullable();
            $table->string('sabado_11')->nullable();
            $table->string('domingo_11')->nullable();
            $table->string('sabado_12')->nullable();
            $table->string('domingo_12')->nullable();
            $table->string('sabado_13')->nullable();
            $table->string('domingo_13')->nullable();
            $table->string('sabado_14')->nullable();
            $table->string('domingo_14')->nullable();
            $table->string('sabado_15')->nullable();
            $table->string('domingo_15')->nullable();
            $table->string('sabado_16')->nullable();
            $table->string('domingo_16')->nullable();
            $table->string('sabado_17')->nullable();
            $table->string('domingo_17')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oficina_san_lorenzos');
    }
};
