@extends('layout')
@section('conteudo')
    <h3>Lista Tipos de Documentos</h3>
    <hr>

    <a href="{{ url('/tipodocumento/cadastro') }}" class="btn btn-info btn-sm" title="Cadastro">
        <i class="fa fa-plus" aria-hidden="true"></i> Cadastro
    </a>

    <table class="table">
        <thead>
          <tr class="text-center">
            <th scope="col">Tipo</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>

            @foreach ( $documentos as $documento)

                <tr class="text-center">
                    <th>{{ $documento->DescTipoDocumento }}</th>
                    <td style="display:flex; ">
                        <form action="{{ url('/tipodocumento/deletar/'.$documento->Id) }}" method="POST" style="margin-right: 10px;">
                            {!! csrf_field() !!}
                            <input type="submit" onclick="return confirm('Deseja remover?')" value="Deletar" class="btn btn-danger">
                        </form>

                        <a href="{{ url('/tipodocumento/atualizar/'.$documento->Id) }}" class="btn btn-warning">Atualizar</a>

                    </td>
                </tr>

            @endforeach
        </tbody>
      </table>

@stop

