<?php

namespace App\Http\Controllers;

use App\Http\Requests\PublicacaoStoreUpdateFormRequest;
use App\Models\Comentario;
use App\Models\Publicacao;
use App\Models\Usuario;
use Illuminate\Http\Request;

class PublicacaoController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::getUsuarios();

        $publicacoes = Publicacao::getPublicacoes();

        return view ('publicacoes.index', compact('usuarios', 'publicacoes'));

    }
    public function show ($id)
    {
        $comentarios = Comentario::getComentarios($id);
        if (!$publicacao = Publicacao::find($id))
            return redirect()->route('publicacoes.index');
        return view('publicacoes.show', compact('publicacao', 'comentarios'));
    }

    public function create ()
    {
        return view ('publicacoes.create');
    }

    public function store (PublicacaoStoreUpdateFormRequest $request)
    {
        $data = $request->all();
        if ($request->image) {
            $data['image'] = $request->image->store('publicacoes');
            //para salvar arquivos com o próprio nome
            // $extension = $request->image->getClientOriginalExtension();
            // $data['image'] = $request->image->storeAs('publicacoes', now() . ".{$extension}");
        }
        Publicacao::create($data);
        return redirect()->route('publicacoes.index');
    }
}

