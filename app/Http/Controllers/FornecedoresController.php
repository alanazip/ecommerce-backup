<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedoresController extends Controller
{
    public function index() {
        $fornecedor = Fornecedor::all();

        return view('site.fornecedores', ['fornecedor' => $fornecedor]);
    }

    public function store(Request $request) {
        $fornecedor = new Fornecedor;

        $fornecedor->nome = $request->nomeFornecedor;
        $fornecedor->email = $request->emailFornecedor;
        $fornecedor->telefone = $request->telFornecedor;

        try {
            $fornecedor->save();

            return redirect()->action([FornecedoresController::class, 'index'])
                                    ->with('msg','Fornecedor cadastrado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->action([FornecedoresController::class, 'index'])
                                    ->with('msg','Falha ao criar fornecedor.');
        }
    }
}
