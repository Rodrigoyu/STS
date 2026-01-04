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
        Schema::create('variante_produtos',function(Blueprint $table){
            $table->id();
            $table->foreignId('produto_id')->constrained('produtos');
            $table->string('cor');
            $table->float('preco_custo');
            $table->float('preco_venda');
            $table->integer('estoque_atual');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('varaiante_produtos');
    }
};
