<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::orderby('nome', 'asc')->simplepaginate(5);
        return view('produtosmanager.index', compact('produtos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produtosmanager.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required',
            'quantidade' => 'required',
            'categoria_id' => 'required',
            'fornecedor_id' => 'required',
            // 'imagem' => 'required'
        ]);

        // Produto::create($request->all());

        $produto = new Produto;
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->quantidade = $request->quantidade;
        $produto->categoria_id = $request->categoria_id;
        $produto->fornecedor_id = $request->fornecedor_id;
        


        // if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
        //     $requestImage = $request->imagem;
        //     $extension = $requestImage->extension();

        //     $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;

        //     $requestImage->move(public_path($dirImagem), $imageName);
        //     $produto->imagem = $dirImagem . $imageName;
        // }

        $produto->save();

        return redirect()->route('produtosmanager.index')->with('success', 'Jogo cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = Produto::findOrFail($id);

        return view('produtosmanager.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::findOrFail($id);

        return view('produtosmanager.edit', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required',
            'quantidade' => 'required',
            'categoria_id' => 'required',
            'fornecedor_id' => 'required',
            // 'imagem' => 'required'
        ]);

        $data = $request->all();

        Produto::findOrFail($id)->update($data);

        return redirect()->route('produtosmanager.index')->with('success', 'Jogo atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        produto::findOrFail($id)->delete();

        return redirect()->route('produtosmanager.index')->with('success', 'Jogo excluido com sucesso!');
    }
}
