@extends('layout')
@section('conteudo')
    <h3>Cadastro</h3>
    <hr>
    <form method="POST" action="{{ url('/setor/salvar') }}" class="mt-5">
        {!! csrf_field() !!}
        <div class="mb-3">
            <label for="Sigla" class="form-label">Sigla</label>
            <input type="text" class="form-control" name="Sigla" id="Sigla" placeholder="Digite a Sigla">
        </div>
        <div class="mb-3">
            <label for="DescSetor" class="form-label">Descrição</label>
            <input type="text" class="form-control" name="DescSetor" id="DescSigla" placeholder="Digite a Descrição">
        </div>

        <a href="{{ url('/setor/listar') }}" class="btn btn-success mt-5" title="Cadastro">Voltar</a>

        <button class="btn btn-info mt-5" type="submit" value="Cadastrar">Cadastrar</button>
    </form>

@stop

