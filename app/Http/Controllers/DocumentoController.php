<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use App\Models\Setor;
use App\Models\TipoDocumento;
use App\Models\TramitacaoDocumento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DocumentoController extends Controller
{
    public function telaDocumento(){

        $tipoDocumentos = TipoDocumento::all();

        return view('documentos.cadastro')->with('tipoDocumentos', $tipoDocumentos);;
    }

    public function salvar(Request $req){

        $dados = $req->all();

        if(empty($dados['NroDocumento'])  ||  empty($dados['Titulo']) || empty($dados['DescDocumento']) || empty($dados['TipoDocumento_Id'])){
            return redirect("/documento/cadastro");
        }

        $dados['DataDocumento'] = date('Y-m-d H:i:s');

        $documento = Documento::create($dados);

        $dadosTramitacao['Documento_Id'] = $documento->Id;

        TramitacaoDocumento::create($dadosTramitacao);

        return redirect("/documento/listar");

    }

    public function telaListarDocumento() {

        //SQL COM CONSULTA DOS RELACIONAMENTOS DA 3 TABELAS: tramitacaodocumento, setor, documento
        $sql = "select d.Id, d.NroDocumento, d.Titulo, sE.DescSetor as DescSetorEnvio, td.DataHoraEnvio, sR.DescSetor as DescSetorRecebido, td.DataHoraRecebido  from documento d
        left join tramitacaodocumento td on td.Documento_Id = d.Id
        left join setor sE on sE.Id = td.Setor_Envio_Id
        left join setor sR on sR.Id = td.Setor_Recebe_Id";

        $documentos = DB::select($sql);

        return view('documentos.listar')->with('documentos', $documentos);

    }

    public function telaEnviarTramitacao($id){

        $setores = Setor::all();

        return view('documentos.enviar')->with('setores', $setores)->with('Documento_Id', $id);
    }

    public function enviarTramitacao(Request $req){

        $dados = $req->all();
        $dados['DataHoraEnvio'] = date('Y-m-d H:i:s');

        TramitacaoDocumento::create($dados);
        return redirect("/documento/listar");
    }

    public function telaReceberTramitacao($id){

        $setores = Setor::all();

        return view('documentos.receber')->with('setores', $setores)->with('Documento_Id', $id);
    }

    public function receberTramitacao(Request $req){

        $dados = $req->all();
        $dados['DataHoraRecebido'] = date('Y-m-d H:i:s');

        //recupera dados de envio pelo id do documento
        $recuperaTramitacaoEnvio = TramitacaoDocumento::where('Documento_Id', $dados['Documento_Id'])->orderByDesc('Id')->first();

        $dados['Setor_Envio_Id'] = $recuperaTramitacaoEnvio['Setor_Envio_Id'];
        $dados['DataHoraEnvio'] = $recuperaTramitacaoEnvio['DataHoraEnvio'];

        //verificar se é o mesmo setor de envio
        if($recuperaTramitacaoEnvio['Setor_Envio_Id'] == $dados['Setor_Recebe_Id']){
            return redirect("/documento/receberTramitacao/".$dados['Documento_Id']);
        }


        TramitacaoDocumento::create($dados);

        return redirect("/documento/listar");
    }


}
