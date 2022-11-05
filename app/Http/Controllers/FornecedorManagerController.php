<?php
namespace App\Http\Controllers;
use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fornecedors = Fornecedor::orderBy('nome', 'ASC')->paginate(5);

        return view('fornecedoresmanager.index', compact('fornecedores'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fornecedor = Fornecedor::findOrFail($id);

        $fornecedor->save();

        return view('fornecedoresmanager.show', compact('fornecedor'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Fornecedor::findOrFail($id)->delete();

        return redirect()->route('fornecedoresmanager.index')->with('success', 'Fornecedor excluido com sucesso!');
    }
}
