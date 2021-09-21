<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Produto;
use App\Http\Requests\ProdutoRequest;
use RealRashid\SweetAlert\Facades\Alert;


class ProdutoController extends Controller
{
    public function show(){
        
        return view('produtos.produto');
    }
    public function show_list(){
        $produtos = Produto::all();
        return view('produtos.list_produto')->with('produtos',$produtos);
    }
    public function store(ProdutoRequest $request){
        $produto = Produto::create($request->all());

        if($produto == true){
            return redirect()->route('produtos')->withSuccess('Produto Cadastrado com Sucesso!');
        }else{
            return redirect()->back()->withInput();
        }
    }
    public function edit($id){
        $produto = Produto::find($id);
        return view('produtos.edit_produto')->with('produtos',$produto);
    }
    public function update(ProdutoRequest $request,$id){
        $produto = Produto::find($id);
        $produto->update($request->all());

        if($produto == true){
            return redirect()->back()->withSuccess('Cadastro de produto atualizado com sucesso!');
        }
            return redirect()->back()->withError('Erro ao tentar atualizar cadastro de produto!');
    }
    public function warning($id){
        Alert::alert()->html('Aviso'," Você está prestes a excluir esse cadastro! 
        <br>Deseja prosseguir?<br>
        <br><a class='btn btn-danger' href='/produtos/deletar/$id')}}'>Sim</a>&nbsp;
        <a class='btn btn-secondary' href='/produtos/lista_produtos'>Não</a><br>",'warning')
        ->autoClose(20000);
        return redirect()->back();
    }
    public function delete($id){
        $produto = Produto::find($id);
        $produto->delete();
        
        if($produto == true){
            return redirect()->route('produtos_list')->withSuccess('Produto excluído com sucesso!');
        }
            return redirect()->route('produtos_list')->withError('Erro tentar excluir produto');
    }
}
