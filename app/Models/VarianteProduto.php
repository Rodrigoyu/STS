<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VarianteProduto extends Model
{
    use HasFactory;

    protected $fillable = [
        'produto_id',
        'cor',
        'tamanho',
        'preco_custo',
        'preco_venda',
        'estoque_atual',
        'estoque_minimo'
    ];

    public function produto(){
        return $this->belongsTo(Produto::class);
    }

    public function variante(){
        return $this->hasMany(Stockmovimento::class);
    }
}
