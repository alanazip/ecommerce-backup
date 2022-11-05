<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriasController extends Controller
{
    public function index() {
        $categoria = Categoria::all();

        return view('site.categorias', ['categoria' => $categoria]);
    }

    public function store(Request $request) {
        $categoria = new Categoria;

        $categoria->nome = $request->nomeCategoria;

        try {
            $categoria->save();

            return redirect()->action([CategoriasController::class, 'index'])
                                    ->with('msg','Categoria cadastrada com sucesso!');
        } catch (\Exception $e) {
            return redirect()->action([CategoriasController::class, 'index'])
                                    ->with('msg','Falha ao criar categoria.');
        }
    }
}
