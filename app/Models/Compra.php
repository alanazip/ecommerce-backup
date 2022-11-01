<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{

    protected $fillable = [
        'status',
        'user_id'
    ];

    public function user(){
        return $this->belongsToTo(User::class);
    }

    use HasFactory;

    public function produtoCompras(){
        return $this->belongsToMany(Produto::class, 'compra_produtos', 'produtos_id', 'compras_id')
            ->withPivot('quantidade, preco')
            ->withTimestamps();
    }
}
