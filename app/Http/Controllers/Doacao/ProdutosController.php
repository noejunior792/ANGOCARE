<?php

namespace App\Http\Controllers\Doacao;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\User;
use App\Models\DoacaoProduto;
use App\Helpers\ImageUploadHelper;
use App\Helpers\EstadoHelper;
use App\Requests\DoacaoProdutoRequest;
use App\Helpers\DoacaoHelper;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class ProdutosController extends Controller
{
    // 
    public function index(){
        $user=Auth::user();
        $data['doacoes']=DoacaoProduto::join('users as doador','doacao_produtos.users_id','doador.id')
        ->join('produtos','doacao_produtos.produtos_id','produtos.id')
        ->join('users as necessitado','produtos.users_id','necessitado.id')
        ->select('doacao_produtos.*','doador.name as users_1','necessitado.name as user_2')
        ->where('doador.it_tipo_utilizador','!=',4)
        ->get();
        return view('admin.produto.doacao',$data);
    }
    public function index2(){
        $user=Auth::user();
        $data['doacoes']=DoacaoProduto::join('users as doador','doacao_produtos.users_id','doador.id')
        ->join('produtos','doacao_produtos.produtos_id','produtos.id')
        ->join('users as necessitado','produtos.users_id','necessitado.id')
        ->select('doacao_produtos.*','doador.name as users_1','necessitado.name as user_2')
        ->where('doador.it_tipo_utilizador',4)
        ->get();
        
        return view('admin.produto.doacao',$data);
    }
    public function store(Request $req,$id){
        try {
          
            $user=Auth::user()->id;
            DoacaoProduto:: create([
                'users_id'=>$user,
                'produtos_id'=>$id,
                'doados'=>$req->doados,
                'entrega'=>$req->entrega,
                'estado'=>0,
            ]);
            return redirect()->back()->with('doacao',1);
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('doacao.error',1);
        }
    }
    public function activar( $produto){
        DB::beginTransaction();
        try {
            $activar = DoacaoProduto::where('id',$produto)->update([
                'estado'=>1
            ]);
            $produto=DoacaoProduto::where('id',$produto)->first();
            $user=User::where('id',$produto->users_id)->first();
            $nome=$user->name;
            $numero=$user->email;
                $messagem="
                Querido Doador,
                Agradecemos imensamente pela sua generosa doação. Sua contribuição foi recebida com gratidão e terá um impacto significativo na vida daquele que a recebeu. Com o seu apoio, estamos construindo um futuro mais esperançoso. Obrigado por fazer parte desta jornada de solidariedade e por inspirar esperança com sua generosidade.
                ";
                $status=MessageHelper::send($numero,$messagem);
                DB::commit();
            return redirect()->back()->with('on', 1);
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with('on.error', 1);
        }
       

    }
    public function desativar( $produto){
        DB::beginTransaction();
        try {
            $activar = DoacaoProduto::where('id',$produto)->update([
                'estado'=>2
            ]);
     
        $produto=DoacaoProduto::where('id',$produto)->first();
        $user=User::where('id',$produto->users_id)->first();
        $nome=$user->name;
        $numero=$user->email;
            $messagem="
            Prezado Doador, lamentamos informar que, até agora, não recebemos sua doação. Caso tenha ocorrido algum problema, por favor, entre em contato conosco para resolvermos. Agradecemos muito pelo seu interesse em contribuir e estamos à disposição para qualquer assistência necessária.  ";
            $status=MessageHelper::send($numero,$messagem);
            DB::commit();
            return redirect()->back()->with('off', 1);
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with('off.error', 1);
        }
       

    }
}
