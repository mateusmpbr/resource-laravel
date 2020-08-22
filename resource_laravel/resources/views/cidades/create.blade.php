@extends('principal')

@section('conteudo')

<div class="col-md-4 mt-2">
    <form method="post" action="{{ route('cidades.store') }}">

        @csrf

        <div class="form-group">
            <label for="nome">Nome</label>
            <input class="form-control" type="text" id="nome" name="nome">
        </div>

        <div class="form-group">
            <label for="estados_id">Estado: </label>
            <select class="form-control" id="estados_id" name="estado_id">
                @foreach ($estados as $e)
                    <option value="{{ $e->id }}">{{ $e->nome }}</option>
                @endforeach
            </select>
        </div>

        <input class="btn btn-dark" type="submit" name="btnSalvar" value="Incluir">
    </form>
</div>

@endsection

