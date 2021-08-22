site da aplicação

@auth
    
<h1>Usuario autenticado!</h1>

<a href="{{ url('/home') }}">Acesse sua conta</a>

@endauth


@guest
    <h1>Olá Visitante, tudo bem?</h1>
    <a href="{{ url('/login') }}">Realizar Login</a>

@endguest