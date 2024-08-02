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
class OrganizacaoController extends Controller
{
    public function index(){
        $data['organizacoes']=Organizacao::join('users','organizacaos.users_id','users.id')
        ->select('users.name as proprietario','organizacaos.*')
        ->get();
        $data["users"]=User::get();
   
        return view('admin.relatorio.organizacao.index',$data);
    }
    public function request(Request $request){
        $data["organizacaos"] = Organizacao::query()
            ->when($request->input('nome'), function ($query) use ($request) {
                return $query->where('nome', $request->input('nome'));
            })
            ->when($request->input('users_id'), function ($query) use ($request) {
                return $query->where('users_id', $request->input('users_id'));
            })
            ->when($request->input('estado'), function ($query) use ($request) {
                return $query->where('estado', $request->input('estado'));
            })
            ->join('users', 'organizacaos.users_id', '=', 'users.id')
            ->select('users.name as usuario', 'organizacaos.*')
            ->get();
        
        $data["total"] = Organizacao::query()
            ->when($request->input('nome'), function ($query) use ($request) {
                return $query->where('nome', $request->input('nome'));
            })
            ->when($request->input('users_id'), function ($query) use ($request) {
                return $query->where('users_id', $request->input('users_id'));
            })
            ->when($request->input('estado'), function ($query) use ($request) {
                return $query->where('estado', $request->input('estado'));
            })
            ->join('users', 'organizacaos.users_id', '=', 'users.id')
            ->select('users.name as usuario', 'organizacaos.*')
            ->count();
    
        // Doacao Financiamento Organizacao
        $data['financiamento'] = DoacaoFinanciamentoOng::query()
            ->join('users as doadores', 'doacao_financiamento_ongs.users_id', '=', 'doadores.id')
            ->join('organizacaos as necessitados', 'doacao_financiamento_ongs.organizacaos_id', '=', 'necessitados.id')
            ->when($request->input('nome'), function ($query) use ($request) {
                return $query->where('necessitados.nome', $request->input('nome'));
            })
            ->when($request->input('users_id'), function ($query) use ($request) {
                return $query->where('necessitados.users_id', $request->input('users_id'));
            })
            ->when($request->input('estado'), function ($query) use ($request) {
                return $query->where('necessitados.estado', $request->input('estado'));
            })
            ->select('doadores.name as doador', 'necessitados.nome as necessitado', 'doacao_financiamento_ongs.*')
            ->get();
    
        $data['totalf'] = DoacaoFinanciamentoOng::query()
            ->join('users as doadores', 'doacao_financiamento_ongs.users_id', '=', 'doadores.id')
            ->join('organizacaos as necessitados', 'doacao_financiamento_ongs.organizacaos_id', '=', 'necessitados.id')
            ->when($request->input('nome'), function ($query) use ($request) {
                return $query->where('necessitados.nome', $request->input('nome'));
            })
            ->when($request->input('users_id'), function ($query) use ($request) {
                return $query->where('necessitados.users_id', $request->input('users_id'));
            })
            ->when($request->input('estado'), function ($query) use ($request) {
                return $query->where('necessitados.estado', $request->input('estado'));
            })
            ->select('doadores.name as doador', 'necessitados.nome as necessitado', 'doacao_financiamento_ongs.*')
            ->count();
    
        // Doacao Produto
        $data['produto'] = DoacaoProdutoOng::query()
            ->join('users as doador', 'doacao_produto_ongs.users_id', '=', 'doador.id')
            ->join('organizacaos as necessitado', 'doacao_produto_ongs.organizacaos_id', '=', 'necessitado.id')
            ->when($request->input('nome'), function ($query) use ($request) {
                return $query->where('necessitado.nome', $request->input('nome'));
            })
            ->when($request->input('users_id'), function ($query) use ($request) {
                return $query->where('necessitado.users_id', $request->input('users_id'));
            })
            ->when($request->input('estado'), function ($query) use ($request) {
                return $query->where('necessitado.estado', $request->input('estado'));
            })
            ->select('doacao_produto_ongs.*', 'doador.name as users_1', 'necessitado.nome as user_2')
            ->get();
    
        $data['totalp'] = DoacaoProdutoOng::query()
            ->join('users as doador', 'doacao_produto_ongs.users_id', '=', 'doador.id')
            ->join('organizacaos as necessitado', 'doacao_produto_ongs.organizacaos_id', '=', 'necessitado.id')
            ->when($request->input('nome'), function ($query) use ($request) {
                return $query->where('necessitado.nome', $request->input('nome'));
            })
            ->when($request->input('users_id'), function ($query) use ($request) {
                return $query->where('necessitado.users_id', $request->input('users_id'));
            })
            ->when($request->input('estado'), function ($query) use ($request) {
                return $query->where('necessitado.estado', $request->input('estado'));
            })
            ->select('doacao_produto_ongs.*', 'doador.name as users_1', 'necessitado.nome as user_2')
            ->count();
    

        // dd($data);
        $mpdf = new \Mpdf\Mpdf();
        $data["bootstrap"] = public_path("css/listas/bootstrap.min.css");
        $data["css"] = public_path("css/listas/style.css");

        $mpdf->SetFont("arial");
        $mpdf->setHeader();
        // $this->loggerData('Imprimiu Lista dos Funcionários');
        $html = view("pdfs/organizacao/index", $data);
        $mpdf->writeHTML($html);
        $mpdf->Output("Livros.pdf", "I");
        
    }
}
