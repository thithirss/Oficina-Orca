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
        Schema::create('orcamentos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('cliente');
            $table->string('data_hora');
            $table->string('vendedor');
            $table->string('descricao');
            $table->integer('valor');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orcamentos');
    }
};
