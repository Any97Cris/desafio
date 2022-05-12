@extends('layout')
@section('conteudo')
    <h3>Atualizar</h3>
    <hr>
    <form method="POST" action="{{ url('/tipodocumento/editar/'.$documento->Id) }}" class="mt-5">
        {!! csrf_field() !!}
        <div class="mb-3">
            <label for="DescTipoDocumento" class="form-label">Descrição</label>
            <input type="text" value="{{ $documento->DescTipoDocumento }}" class="form-control" name="DescTipoDocumento" id="DescTipoDocumento" placeholder="Digite Tipo do Documento">
        </div>

        <a href="{{ url('/tipodocumento/listar') }}" class="btn btn-success mt-5" title="Cadastro">Voltar</a>

        <button class="btn btn-info mt-5" type="submit" value="Editar">Editar</button>
    </form>

@stop

