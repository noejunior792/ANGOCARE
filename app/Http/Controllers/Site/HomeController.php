<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Financiamento;
use App\Models\User;
use App\Helpers\ImageUploadHelper;
use App\Helpers\EstadoHelper;
use App\Helpers\DoacaoHelper;
use App\Modes\DoacaoFinancimento;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    //
    public function index(){
        $data['doacoes'] = DB::table('financiamentos')
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
            'users.name as utilizador',
          
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
            'utilizador',
            'financiamentos.titulo',
            'financiamentos.capa'
        )
        ->get();

        $data['financiamento'] =DB::table('financiamentos')
            ->where('financiamentos.estado',1)
            ->count();
        $data['produto'] = DB::table('produtos')->join('users','produtos.users_id','users.id')
            ->select('users.name as utilizador','produtos.*')
            ->where('produtos.estado',1)
            ->count();
        $data['organizacao']=DB::table('organizacaos')->join('users','organizacaos.users_id','users.id')
            ->select('users.name as proprietario','organizacaos.*')
            ->where('organizacaos.estado',1)
            ->count();
       $fundos=0;
       foreach( $data['doacoes'] as $fundo){

        $fundos+=$fundo->total;

       }
        return view('site.home.index', $data, compact('fundos'));
    }
}
