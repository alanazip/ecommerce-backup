<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index() {
        $produtos = Produto::orderby('marca', 'asc')->simplepaginate(10);
        $produtos = Produto::orderby('modelo', 'asc')->simplepaginate(10);
        return view('site.produtos', compact('produtos'));
    }
}
