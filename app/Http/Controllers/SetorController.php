<?php

namespace App\Http\Controllers;

use App\Models\Setor;
use Illuminate\Http\Request;

class SetorController extends Controller
{
    public function telaCadastro(){
        return view('setores.cadastro');
    }

    public function salvar(Request $req){
        $dados = $req->all();
        Setor::create($dados);

        return redirect("/setor/listar");

    }

    public function telaListar() {

        $setores = Setor::all();

        return view('setores.listar')->with('setores', $setores);

    }

    public function deletar($id){
        $setor = Setor::find($id);
        $setor->delete();

        return redirect('/setor/listar');
    }

    public function telaAtualizar($id){

        $setor = Setor::find($id);

        return view('setores.atualizar')->with('setor', $setor);
    }

    public function editar(Request $req, $id){

        $dados = $req->all();

        $setor = Setor::find($id);
        $setor -> update($dados);

        return redirect('/setor/listar');
    }
}
