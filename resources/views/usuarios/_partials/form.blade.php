    @csrf
{{-- adicionei o "?? old()" serve para não dar bug na tela de create, tendo em vista que ao iniciar a tela ainda não existe um usuario --}}
    <input type="text" name="nome" placeholder="Nome:" value="{{ $usuario->nome ?? old('nome')}}">
    <input type="email" name="email" placeholder="E-mail:" value="{{ $usuario->email ?? old('email')}}">
    <input type="text" name="perfil_usuario" placeholder="Tipo de perfil:" value="{{ $usuario->perfil_usuario ?? old('perfil_usuario')}}">
    <input type="password" name="password" placeholder="Password:">
    <button type="submit">
        enviar
    </button>
