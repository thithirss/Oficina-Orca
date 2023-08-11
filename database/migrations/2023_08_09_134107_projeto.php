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
        Schema::create('projeto', function(Blueprint $table){
        $table->id();
        $table->string('nome');
        $table->string('data_hora');
        $table->string('vendedor');
        $table->string('descrição');
        $table->integer('valor');
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
