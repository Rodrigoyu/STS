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
        Schema::create('stock_movimentos',function(Blueprint $table){
            $table->id();
            $table->foreignId('variante_id')->constrained('variante_produtos');
            $table->foreignId('user_id')->constrained('user');
            $table->string('tipo');
            $table->integer('quantidade');
            $table->string('motivo');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_movimentos');
    }
};
