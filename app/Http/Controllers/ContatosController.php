<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatosController extends Controller
{
    public function index() {
        $contato = Contato::all();

        return view('site.contatos', ['contato' => $contato]);
    }

    public function store(Request $request) {
        $contato = new Contato;

        $contato->nome = $request->nomeContato;
        $contato->email = $request->emailContato;
        $contato->telefone = $request->telContato;
        $contato->tipo = $request->tipoContato;
        $contato->mensagem = $request->mensagemContato;
        $contato->status = false;

        try {
            $contato->save();

            return redirect()->action([ContatosController::class, 'index'])
                                    ->with('msg','Mensagem enviada com sucesso!');
        } catch (\Exception $e) {
            return redirect()->action([ContatosController::class, 'index'])
                                    ->with('msg','Falha no envio da mensagem!');
        }
    }
}
