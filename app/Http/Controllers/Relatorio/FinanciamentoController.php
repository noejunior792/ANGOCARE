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

class FinanciamentoController extends Controller
{
    //

    public function index(){
        $data["financiamentos"]=Financiamento::get();
        $data["users"]=User::get();
   
        return view('admin.relatorio.financiamento.index',$data);
    }
    public function request(Request $request){
        // dd($request);
        $data["financiamentos"]=Financiamento::
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
        ->join('users','financiamentos.users_id','users.id')
        ->select('users.name as usuario','financiamentos.*')
        ->get();
        $data["total"]=Financiamento::
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
        ->join('users','financiamentos.users_id','users.id')
        ->select('users.name as usuario','financiamentos.*')
        ->count();
        // dd($data);
        $mpdf = new \Mpdf\Mpdf();
        $data["bootstrap"] = public_path("css/listas/bootstrap.min.css");
        $data["css"] = public_path("css/listas/style.css");

        $mpdf->SetFont("arial");
        $mpdf->setHeader();
        // $this->loggerData('Imprimiu Lista dos Funcionários');
        $html = view("pdfs/financiamento/index", $data);
        $mpdf->writeHTML($html);
        $mpdf->Output("Livros.pdf", "I");
        
    }
}
