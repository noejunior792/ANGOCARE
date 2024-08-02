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
class FinanciamentoDoacaoController extends Controller
{
    public function index(){
        $data["financiamentos"]=Financiamento::get();

    
        $data["users"]=User::get();
   
        return view("admin.relatorio.financiamentodoacao.index",$data);
    }
    public function request(Request $request){
        // dd($request);
       
        $data["financiamentos"]= DoacaoFinancimento::
        join('users as doadores', 'doacao_financimentos.users_id', '=', 'doadores.id')
        ->join('financiamentos', 'doacao_financimentos.financiamentos_id', '=', 'financiamentos.id')
        ->when($request->input('financiamentos_id'), function ($query) use ($request) {
            return $query->where('financiamentos.id', $request->input('financiamentos_id'));
        })
     
        ->join('users as necessitados', 'financiamentos.users_id', '=', 'necessitados.id')
        // ->where('financiamentos_id', $id)  // Descomente e ajuste conforme necessário
        ->select('doadores.name as doador', 'necessitados.name as necessitado', 'doacao_financimentos.*')
        ->get();

        $data["total1"]= DoacaoFinancimento::
        join('users as doadores', 'doacao_financimentos.users_id', '=', 'doadores.id')
        ->join('financiamentos', 'doacao_financimentos.financiamentos_id', '=', 'financiamentos.id')
        ->when($request->input('financiamentos_id'), function ($query) use ($request) {
            return $query->where('financiamentos.id', $request->input('financiamentos_id'));
        })
        ->join('users as necessitados', 'financiamentos.users_id', '=', 'necessitados.id')
        // ->where('financiamentos_id', $id)  // Descomente e ajuste conforme necessário
        ->select('doadores.name as doador', 'necessitados.name as necessitado', 'doacao_financimentos.*')
         ->count();

// doacoes
$data['doacoes'] = DB::table('financiamentos')
->when($request->input('financiamentos_id'), function ($query) use ($request) {
    return $query->where('id', $request->input('financiamentos_id'));
})
->when($request->input('estado'), function ($query) use ($request) {
    return $query->where('financiamentos.estado', $request->input('estado'));
})
->leftJoin('doacao_financimentos', 'doacao_financimentos.financiamentos_id', '=', 'financiamentos.id')
// ->where('financiamentos_id', $id)  // Descomente e ajuste conforme necessário
->join('users','financiamentos.users_id','users.id')
->select(
    'financiamentos.id',
    'financiamentos.valores',
    'financiamentos.categoria',
    'financiamentos.motivo',
    'financiamentos.users_id',
    'financiamentos.estado',
    'financiamentos.titulo',
    'users.name',
  
    'financiamentos.capa',
    DB::raw('SUM(doacao_financimentos.valores) as total')
)
->groupBy(
    'financiamentos.id',
    'financiamentos.valores',
    'financiamentos.categoria',
    'financiamentos.motivo',
    'financiamentos.users_id',
    'financiamentos.estado',
    'users.name',
    'financiamentos.titulo',
    'financiamentos.capa'
)
->get();

$data['total2'] = DB::table('financiamentos')
->when($request->input('financiamentos_id'), function ($query) use ($request) {
    return $query->where('id', $request->input('financiamentos_id'));
})
->leftJoin('doacao_financimentos', 'doacao_financimentos.financiamentos_id', '=', 'financiamentos.id')
// ->where('financiamentos_id', $id)  // Descomente e ajuste conforme necessário
->join('users','financiamentos.users_id','users.id')
->select(
    'financiamentos.id',
    'financiamentos.valores',
    'financiamentos.categoria',
    'financiamentos.motivo',
    'financiamentos.users_id',
    'financiamentos.estado',
    'financiamentos.titulo',
 
  
    'financiamentos.capa',
    DB::raw('COUNT(doacao_financimentos.valores) as total')
)
->groupBy(
    'financiamentos.id',
    'financiamentos.valores',
    'financiamentos.categoria',
    'financiamentos.motivo',
    'financiamentos.users_id',
    'financiamentos.estado',

    'financiamentos.titulo',
    'financiamentos.capa'
)
->count();

        // dd($data);
        $mpdf = new \Mpdf\Mpdf();
        $data["bootstrap"] = public_path("css/listas/bootstrap.min.css");
        $data["css"] = public_path("css/listas/style.css");

        $mpdf->SetFont("arial");
        $mpdf->setHeader();
        // $this->loggerData('Imprimiu Lista dos Funcionários');
        $html = view("pdfs.doacaoFinanciamento.index", $data);
        $mpdf->writeHTML($html);
        $mpdf->Output("Livros.pdf", "I");
        
    }
}
