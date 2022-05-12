<?php

namespace App\Http\Controllers;

use App\Models\TipoDocumento;
use Illuminate\Http\Request;


class TipoDocumentoController extends Controller
{
    public function telaTipoDocumento(){
        return view('tipoDocumento.cadastro');
    }

    public function salvar(Request $req){
        $dados = $req->all();
        $documento = TipoDocumento::create($dados);        

        return redirect("/tipodocumento/listar");

    }

    public function telaListarTipoDocumento() {

        $documentos = TipoDocumento::all();

        return view('tipoDocumento.listar')->with('documentos', $documentos);

    }

    public function deletar($id){
        $doc = TipoDocumento::find($id);
        $doc->delete();

        return redirect('/tipodocumento/listar');
    }

    public function telaAtualizarTipoDocumento($id){
        $documento = TipoDocumento::find($id);

        return view('tipoDocumento.atualizar')->with('documento', $documento);
    }

    public function editar(Request $req,$id){

        $dados = $req->all();

        $documento = TipoDocumento::find($id);        
        $documento->update($dados);

        return redirect('/tipodocumento/listar');

    }

}
