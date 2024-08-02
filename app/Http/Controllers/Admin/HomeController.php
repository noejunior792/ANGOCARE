<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DoacaoF;
use App\Models\DoacaoFinanciamento;
use App\Models\DoacaoProduto;
use App\Models\DoacaoProdutoOng;
use App\Models\DoacaoFinanciamentoOng;
use App\Models\Financiamento;
use App\Models\Organizacao;
use App\Models\OrganizacaoDocumento;
use App\Models\Produto;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index(){
        if(Auth::user()->it_tipo_utlizador==0){
        $data['financiamento_p']=Financiamento::where('estado',1)->count();
       
        $data['financiamentos']=Financiamento::count();
        $data['produto_p']=Produto::where('estado',1)->count();
        $data['produtos']=Produto::count();
        $data['organizacao_p']=Organizacao::where('estado',1)->count();
        $data['organizacaos']=Organizacao::count();
    
        }
        else{
            $data['financiamento_p']=Financiamento::where('financiamentos.users_id',$id)->where('estado',1)->count();
       
            $data['financiamentos']=Financiamento::where('financiamentos.users_id',$id)->count();
            $data['produto_p']=Produto::where('produtos.users_id',$id,$id)->where('estado',1)->count();
            $data['produtos']=Produto::where('produtos.users_id',$id,$id)->count();
            $data['organizacao_p']=Organizacao::where('organizacaos.users_id',$id)->where('estado',1)->count();
            $data['organizacaos']=Organizacao::where('organizacaos.users_id',$id)->count();
        }

        return view('admin.dashboard.index', $data);
    }
}
