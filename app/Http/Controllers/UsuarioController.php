<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioStoreUpdateFormRequest;
use App\Models\User;
use App\Models\Usuario;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class UsuarioController extends Controller
{
    public function index (Request $request)
    {
        $search = $request->search;
        $usuarios = Usuario::getUsuarios($search);

//      $usuarios = Usuario::get();
        return view ('usuarios.index', compact('usuarios'));
    }
    public function show ($id)
    {
        if (!$usuario = Usuario::find($id))
            return redirect()->route('usuarios.index');
        return view ('usuarios.show', compact('usuario'));
    }
    public function create ()
    {
        return view ('usuarios.create');
    }

    public function store (UsuarioStoreUpdateFormRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        Usuario::create($data);

        return redirect()->route('usuarios.index');
    }

    public function edit($id)
    {
        if (!$usuario = Usuario::find($id))
            return redirect()->route('usuarios.index');

        return view('usuarios.edit', compact('usuario'));
    }

    public function update(UsuarioStoreUpdateFormRequest $request, $id)
    {
        if (!$usuario = Usuario::find($id))
            return redirect()->route('usuarios.index');

        $data = $request->only('nome', 'email');
        if ($request->password)
            $data['password'] = bcrypt($request->password);
        $usuario->update($data);

        return redirect()->route('usuarios.index');
    }
    public function delete($id)
    {
        if(!$usuario = Usuario::find($id))
            return redirect()->route('usuarios.index');
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }

}
