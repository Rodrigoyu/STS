<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class varianteProduto extends Model
{
    use HasFactory;

    protected $fillable = [
        'produto_id',
        'cor',
        'preco_custo',
        'preco_venda',
        'estoque_atual'
    ];

    public function produto(){
        return $this->belongsTo(Produto::class);
    }

    public function movimento(){
        return $this->hasMany(Stockmovimento::class);
    }
}
