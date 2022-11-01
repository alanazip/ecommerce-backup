<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{

    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'quantidade',
        'catgoria_id',
        'fornecedor_id'];

    public function categoria(){
        return $this->belongsToTo(Categoria::class);
    }

    public function fornecedor(){
        return $this->belongsToTo(Fornecedor::class);
    }

    use HasFactory;

    public function produtoCompras(){
        return $this->belongsToMany(Produto::class, 'compra_produtos', 'produtos_id', 'compras_id')
            ->withPivot('quantidade, preco')
            ->withTimestamps();
    }

}
