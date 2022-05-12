@extends('layout')
@section('conteudo')
    <h3>Lista Documentos</h3>
    <hr>

    <a href="{{ url('/documento/cadastro') }}" class="btn btn-info btn-sm" title="Cadastro">
        <i class="fa fa-plus" aria-hidden="true"></i> Cadastro
    </a>

    <table class="table">
        <thead>
          <tr class="text-center">
            <th scope="col">Nro Docto </th>
            <th scope="col">Titulo </th>
            <th scope="col">Setor Envio</th>
            <th scope="col">Data Hora Envio</th>
            <th scope="col">Setor Recebeu</th>
            <th scope="col">Data Hora Recebeu</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>

            @foreach ( $documentos as $documento)

                <tr class="text-center">
                    <th>{{ $documento->NroDocumento }}</th>
                    <th>{{ $documento->Titulo }}</th>
                    <th>{{ $documento->DescSetorEnvio }}</th>
                    <th>{{ $documento->DataHoraEnvio }}</th>
                    <th>{{ $documento->DescSetorRecebido }}</th>
                    <th>{{ $documento->DataHoraRecebido }}</th>
                    <td class="text-center">

                        @if($documento->DataHoraEnvio == null || $documento->DataHoraRecebido != null)
                            <a href="{{ url('/documento/enviarTramitacao/'.$documento->Id) }}" class="btn btn-success" style="margin-right: 10px">Enviar</a>
                        @endif

                        <a href="{{ url('/documento/receberTramitacao/'.$documento->Id) }}" class="btn btn-danger">Receber</a>

                    </td>
                </tr>

            @endforeach
        </tbody>
      </table>

@stop

