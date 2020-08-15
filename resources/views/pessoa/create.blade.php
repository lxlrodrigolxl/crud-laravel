@if (isset($pessoa))
<h1> Atualizar Cadastro: </h1>

    <form action="/pessoas/{{ $pessoa->id }}" method="post">
    @method('PUT')
@else
<h1> Cadastrar Pessoa:</h1>

    <form action="/pessoas" method="post">
@endif

<form action="/pessoas" method="POST">
    @csrf
    <input  type="text" name="nome" value="{{ $pessoa->nome ?? '' }}" required>
    <input  type="text" name="telefone" value="{{ $pessoa->telefone ?? ''}}" required>
    <input  type="text" name="email" value="{{ $pessoa->email ?? ''}}" required>
    <button type="submit">Salvar</button>
</form>

<br>

<a href="/pessoas">Voltar</a>