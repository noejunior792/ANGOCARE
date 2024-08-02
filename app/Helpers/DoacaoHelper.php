<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;
use App\Modes\DoacaoFinancimento;
use App\Models\DoacaoProduto;
class DoacaoHelper
{
    public static function financiamento( $user=null, $repo)
    {
        try {
            if($repo=="site"){
                $doacoes = DB::table('financiamentos')
    ->leftJoin('doacao_financimentos', 'doacao_financimentos.financiamentos_id', '=', 'financiamentos.id')
    // ->where('financiamentos_id', $id)  // Descomente e ajuste conforme necessário
    ->select(
        'financiamentos.id',
        'financiamentos.valores',
        'financiamentos.categoria',
        'financiamentos.motivo',
        'financiamentos.users_id',
        'financiamentos.estado',
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
        'financiamentos.capa'
    )
    ->get();

return $doacoes;
            }
            else{
                if ($user !== null) {
                    if($user->it_tipo_utilizador==0){
                        $doacoes= DB::table('financiamentos')
                        ->leftJoin('doacao_financimentos', 'doacao_financimentos.financiamentos_id', '=', 'financiamentos.id')
                        // ->where('financiamentos_id', $id)  // Descomente e ajuste conforme necessário
                        ->select(
                            'financiamentos.id',
                            'financiamentos.valores',
                            'financiamentos.categoria',
                            'financiamentos.motivo',
                            'financiamentos.users_id',
                            'financiamentos.estado',
                          
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
                         
                            'financiamentos.capa'
                        );
                        return $doacoes;
                    }
                    else{
                        $doacoes=DoacaoFinancimento::join('users as doadores','doacao_financimentos.users_id',
                        'doadores.id')
                        ->join('financimanetos',
                        'doacao_financimentos.financiamentos_id',
                        'financiamentos.id')
                        ->join('users as necessitados','financiamentos.users_id','necessitados.id')
                        // ->where('financiamentos_id',$id)
                        ->select('doadores.name as doador','
                        necessitados.name as necessitado',
                        'doacao_financimentos.*')
                        ->Orwhere('users_id',$user->id)
                        ->Orwhere('financiamentos.users_id',$user->id)
                        ->get();
                        return $doacoes;
                    }
                }
            }
            return null;
        } catch (\Throwable $th) {
            return null;
        }
        
    }
    public static function produto($financiamento, $user)
    {
        try {
            if($user->it_tipo_utilizador==0){
                $doacoes=DoacaoProduto::where('produtos_id',$id)->get();
                return $doacoes;
            }
            else{
                $doacoes=DoacaoProduto::where('produtos_id',$id)->where('users_id',$user->id)->get();
                return $doacoes;
            }
            return null;
        } catch (\Throwable $th) {
            return null;
        }
        
    }
}
