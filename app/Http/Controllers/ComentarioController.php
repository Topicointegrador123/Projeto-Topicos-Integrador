<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Publicacao;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function create($publicacao_id)
    {
        if (!$publicacao = Publicacao::find($publicacao_id)) {
            return redirect()->back();
        }

        return view ('publicacoes.comentarios.create', compact('publicacao'));
    }

    public function store(Request $request, $publicacao_id)
    {
        if (!$publicacao = Publicacao::find($publicacao_id)) {
            return redirect()->back();
        }

        $publicacao->comentario()->create([
            'descricao' => $request->descricao
        ]);

        return redirect()->route('publicacoes.show', $publicacao_id);
    }
}
