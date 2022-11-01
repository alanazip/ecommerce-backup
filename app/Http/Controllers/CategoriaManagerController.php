<?php
namespace App\Http\Controllers;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::orderBy('nome', 'ASC')->paginate(5);

        return view('categoriasmanager.index', compact('categorias'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = Categoria::findOrFail($id);

        $categoria->save();

        return view('categoriasmanager.show', compact('categoria'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categoria::findOrFail($id)->delete();

        return redirect()->route('categoriasmanager.index')->with('success', 'Categoria excluido com sucesso!');
    }
}
