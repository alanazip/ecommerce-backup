<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    public function index() {
        $compras = Compra::orderby('status', 'asc')->simplepaginate(10);
        return view('site.compras', compact('compras'));
    }
}
