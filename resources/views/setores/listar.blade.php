@extends('layout')
@section('conteudo')
    <h3>Lista Siglas</h3>
    <hr>

    <a href="{{ url('/setor/cadastro') }}" class="btn btn-info btn-sm" title="Cadastro">
        <i class="fa fa-plus" aria-hidden="true"></i> Cadastro
    </a>

    <table class="table">
        <thead>
          <tr class="text-center">
            <th scope="col">Sigla</th>
            <th scope="col">Descrição</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>

            @foreach ( $setores as $setor)

                <tr class="text-center">
                    <th>{{ $setor->Sigla }}</th>
                    <td>{{ $setor->DescSetor }}</td>
                    <td style="display:flex;">
                        <form action="{{ url('/setor/deletar/'.$setor->Id) }}" method="POST" style="margin-right: 10px">
                            {!! csrf_field() !!}
                            <input type="submit" onclick="return confirm('Deseja remover?')" value="Deletar" class="btn btn-danger">
                        </form>

                        <a href="{{ url('/setor/atualizar/'.$setor->Id) }}" class="btn btn-warning">Atualizar</a>

                    </td>
                </tr>

            @endforeach
        </tbody>
      </table>

@stop

