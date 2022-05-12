@extends('layout')
@section('conteudo')
    <h3>Cadastro</h3>
    <hr>
    <form method="POST" action="{{ url('/tipodocumento/salvar') }}" class="mt-5">
        {!! csrf_field() !!}

        <div class="mb-3">
          <label for="DescTipoDocumento" class="form-label">Descrição</label>
          <input type="text" required class="form-control" name="DescTipoDocumento" id="DescTipoDocumento" placeholder="Digite tipo do Documento">
        </div>

        <a href="{{ url('/tipodocumento/listar') }}" class="btn btn-success mt-5" title="Cadastro">Voltar</a>

        <button class="btn btn-info mt-5" type="submit" value="Cadastrar">Cadastrar</button>
    </form>

@stop

