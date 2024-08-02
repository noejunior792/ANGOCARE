<?php

namespace App\Http\Controllers\Relatorio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organizacao;
use App\Models\Financiamento;
use App\Models\Produto;
use App\Models\DoacaoFinancimento;
use App\Models\DoacaoProduto;
use App\Models\DoacaoFinanciamentoOng;
use App\Models\DoacaoProdutoOng;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Mpdf\Mpdf;
class EmpresaProdutoController extends Controller
{
    //
    public function index(){
        $data["produtos"]=Produto::get();
        $data["empresas"]=User::get('empresa');

   
        return view('admin.relatorio.empresaprodutodoacao.index',$data);
    }
    public function request(Request $request){
        // dd($request);
        $data['produtos']=DoacaoProduto::join('users as doador','doacao_produtos.users_id','doador.id')
        ->join('produtos','doacao_produtos.produtos_id','produtos.id')
        ->when($request->input('titulo'), function ($query) use ($request) {
            return $query->where('produtos.titulo', $request->input('titulo'));
        })
        ->when($request->input('estado'), function ($query) use ($request) {
            return $query->where('produtos.estado', $request->input('estado'));
        })
        ->join('users as necessitado','produtos.users_id','necessitado.id')
        ->select('doacao_produtos.*','doador.name as users_1','necessitado.name as user_2')
        ->where('doador.it_tipo_utilizador',4)
        ->get();
        $data["total"]=DoacaoProduto::join('users as doador','doacao_produtos.users_id','doador.id')
        ->join('produtos','doacao_produtos.produtos_id','produtos.id')
        ->when($request->input('titulo'), function ($query) use ($request) {
            return $query->where('produtos.titulo', $request->input('titulo'));
        })
        ->when($request->input('estado'), function ($query) use ($request) {
            return $query->where('produtos.estado', $request->input('estado'));
        })
        ->join('users as necessitado','produtos.users_id','necessitado.id')
        ->select('doacao_produtos.*','doador.name as users_1','necessitado.name as user_2')
        ->where('doador.it_tipo_utilizador',4)
        ->count();
        // dd($data);
        $mpdf = new \Mpdf\Mpdf();
        $data["bootstrap"] = public_path("css/listas/bootstrap.min.css");
        $data["css"] = public_path("css/listas/style.css");

        $mpdf->SetFont("arial");
        $mpdf->setHeader();
        // $this->loggerData('Imprimiu Lista dos Funcionários');
        $html = view("pdfs/empresadoacaoProduto/index", $data);
        $mpdf->writeHTML($html);
        $mpdf->Output("Livros.pdf", "I");
        
    }
}
