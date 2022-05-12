@extends('layout')
@section('conteudo')
    <h3>Enviar Tramitação</h3>
    <hr>
    <form method="POST" action="{{ url('/documento/enviarTramitacao') }}" class="mt-5">
        {!! csrf_field() !!}

        <div class="mb-3">

            <input type="hidden" name="Documento_Id"  id="Documento_Id" value="{{ $Documento_Id }}">

            <label for="Setor_Envio_Id" class="form-label">Setor envio</label>
            <select name="Setor_Envio_Id" id="Setor_Envio_Id" class="form-control">

                @foreach ($setores as $setor)
                    <option value="{{ $setor->Id}}">{{ $setor->DescSetor}}</option>
                @endforeach

            </select>
        </div>

        <a href="{{ url('/documento/listar') }}" class="btn btn-success mt-5" title="Cadastro">Voltar</a>

        <button class="btn btn-info mt-5" type="submit" value="Enviar">Enviar</button>
    </form>

@stop
