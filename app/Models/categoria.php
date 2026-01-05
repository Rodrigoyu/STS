<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'user_id',
        'descricao'
    ];

    public function produto(){
        return $this->hasMany(produto::class);
    }
}

