@extends('layout')
@section('conteudo')
    <h3>Cadastro</h3>
    <hr>
    <form method="POST" action="{{ url('/documento/salvar') }}" class="mt-5">
        {!! csrf_field() !!}

        <div class="mb-3">
          <label for="NroDocumento" class="form-label">Nro Documento</label>
          <input type="text" required class="form-control" name="NroDocumento" id="NroDocumento" placeholder="Digite numero documento">
        </div>

        <div class="mb-3">
            <label for="Titulo" class="form-label">Titulo</label>
            <input type="text" required class="form-control" name="Titulo" id="Titulo" placeholder="Digite titulo">
        </div>

        <div class="mb-3">
            <label for="DescDocumento" class="form-label">Descrição</label>
            <input type="text" required class="form-control" name="DescDocumento" id="DescDocumento" placeholder="Digite Descrição documento">
        </div>

        <div class="mb-3">
            <label for="DescDocumento" class="form-label">Tipo Documento</label>
            <select name="TipoDocumento_Id" required id="TipoDocumento_Id" class="form-control">

                @foreach ($tipoDocumentos as $tipo)
                    <option value="{{ $tipo->Id}}">{{ $tipo->DescTipoDocumento}}</option>
                @endforeach

            </select>
        </div>

        <a href="{{ url('/documento/listar') }}" class="btn btn-success mt-5" title="Cadastro">Voltar</a>

        <button class="btn btn-info mt-5" type="submit" value="Cadastrar">Cadastrar</button>
    </form>

@stop

