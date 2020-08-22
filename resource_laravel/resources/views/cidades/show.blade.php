@extends('principal')

@section('conteudo')

<div class="m-2">
    <h1>Cidade: {{ $cidade->nome }}</h1>


    <p><b>Código:</b> {{ $cidade->id }}</p>
    <p><b>Nome:</b> {{ $cidade->nome }}</p>
    <p><b>Estado:</b> {{ $cidade->estado->nome }}</p>

    <p><b>Data de criação:</b> {{ $cidade->created_at }}</p>
    <p><b>Última atualização:</b> {{ $cidade->updated_at }}</p>

    <!-- Voltar para a lista de cidades //-->
    <a class="btn" href="{{ route('cidades.index') }}" style="background-color:#3CB371; color: white">Voltar</a>
    <!-- Editar a cidade corrente //-->
    <a class="btn btn-dark" href="{{ route('cidades.edit', $cidade->id) }}">Editar</a>
    <!-- Excluir a cidade corrente //-->
    <form style="display: inline;" action={{route('cidades.destroy', $cidade->id)}} method="post">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger" type="submit">Excluir</button>
    </form>
</div>
@endsection