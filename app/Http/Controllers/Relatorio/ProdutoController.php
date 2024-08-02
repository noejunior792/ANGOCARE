<?php

namespace App\Http\Controllers\Relatorio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organizacao;
use App\Models\Financiamento;
use App\Models\Produto;
use App\Models\DoacaoFinanciamento;
use App\Models\DoacaoProduto;
use App\Models\DoacaoFinanciamentoOng;
use App\Models\DoacaoProdutoOng;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Mpdf\Mpdf;
class ProdutoController extends Controller
{
    public function index(){
        $data["produtos"]=Produto::get();
        $data["users"]=User::get();
   
        return view('admin.relatorio.produto.index',$data);
    }
    public function request(Request $request){
        // dd($request);
        $data["produtos"]=Produto::
        when($request->input('titulo'), function ($query) use ($request) {
            return $query->where('titulo', $request->input('titulo'));
        })
        ->when($request->input('users_id'), function ($query) use ($request) {
            return $query->where('users_id', $request->input('users_id'));
        })
        ->when($request->input('categoria'), function ($query) use ($request) {
            return $query->where('categoria', $request->input('categoria'));
        })
        ->when($request->input('estado'), function ($query) use ($request) {
            return $query->where('estado', $request->input('estado'));
        })
        ->join('users','produtos.users_id','users.id')
        ->select('users.name as usuario','produtos.*')
        ->get();
        $data["total"]=Produto::
        when($request->input('titulo'), function ($query) use ($request) {
            return $query->where('titulo', $request->input('titulo'));
        })
        ->when($request->input('users_id'), function ($query) use ($request) {
            return $query->where('users_id', $request->input('users_id'));
        })
        ->when($request->input('categoria'), function ($query) use ($request) {
            return $query->where('categoria', $request->input('categoria'));
        })
        ->when($request->input('estado'), function ($query) use ($request) {
            return $query->where('estado', $request->input('estado'));
        })
        ->join('users','produtos.users_id','users.id')
        ->select('users.name as usuario','produtos.*')
        ->count();
        // dd($data);
        $mpdf = new \Mpdf\Mpdf();
        $data["bootstrap"] = public_path("css/listas/bootstrap.min.css");
        $data["css"] = public_path("css/listas/style.css");

        $mpdf->SetFont("arial");
        $mpdf->setHeader();
        // $this->loggerData('Imprimiu Lista dos Funcionários');
        $html = view("pdfs/produto/index", $data);
        $mpdf->writeHTML($html);
        $mpdf->Output("Livros.pdf", "I");
        
    }
}
