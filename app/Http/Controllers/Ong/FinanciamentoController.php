<?php

namespace App\Http\Controllers\Ong;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DoacaoFinanciamentoOng;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Helpers\ImageUploadHelper;
use App\Helpers\EstadoHelper;
class FinanciamentoController extends Controller
{
    //
    public function index(){
        $user=Auth::user();
       $data['doacoes'] = DoacaoFinanciamentoOng::join('users as doadores', 'doacao_financiamento_ongs.users_id', '=', 'doadores.id')
       ->join('organizacaos as necessitados', 'doacao_financiamento_ongs.organizacaos_id', '=', 'necessitados.id')
       
       // ->where('financiamentos_id', $id)  // Descomente e ajuste conforme necessário
       ->select('doadores.name as doador', 'necessitados.nome as necessitado', 'doacao_financiamento_ongs.*')
       ->get();
    
        // dd($data);

       return view('admin.organizacao.doacao.financiamento',$data);
    }

    public function store(Request $req,$id){
        try {
            
            
            $id_user=Auth::user()->id;
            $caminho= ImageUploadHelper::uploadImage($req->comprovativo, 'documentos/doacoes/financiamento');
           
            $doacao=DoacaoFinanciamentoOng::create([
                'users_id'=> $id_user,
                'organizacaos_id'=>$id,
                'valores'=>$req->valores,
                'comprovativo'=>$caminho,
                'estado'=>0,
            ]);
            // dd( $doacao);
            return redirect()->back()->with('doacao',1);
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            // DB::rollback();
            return redirect()->back()->with('doacao.error',1);
        }
    }
    public function update($id,DoacaoFinanciamentoOng $financiamento,DoacaoFinanciamentoUpdateRequest $req){
        try {
            DB::beginTransaction();
            if(! $req->comprovativo){
                $caminho= ImageUploadHelper::uploadImage($req->comprovativo, 'documentos/doacoes/financiamento');
                 $financiamento->update([
                    'users_id'=> $id_user,
                    'valores'=>req->valores,
                    'comprovativo'=>$caminho,
              
                ]);
            }
            else{
                 $financiamento->update([
                    'valores'=>req->valores,
                    'comprovativo'=>$caminho,
              
                ]);
            }
            return redirect()->back()->with('update',1);
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with('update.error',1);
      
        }
    }


    public function activar( $produto){
        try {
           
            $activar = DoacaoFinanciamentoOng::where('id',$produto)->update([
                'estado'=>1
            ]);
            
            return redirect()->back()->with('on.success', 1);
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('off.error', 1);
        }
       

    }
    public function desativar( $produto){
        try {
            $activar = DoacaoFinanciamentoOng::where('id',$produto)->update([
                'estado'=>2
            ]);
            return redirect()->back()->with('off', 1);
        } catch (\Throwable $th) {
            return redirect()->back()->with('off.error', 1);
        }
       

    }
}
