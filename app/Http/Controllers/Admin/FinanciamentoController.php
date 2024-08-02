<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Financiamento;
use App\Http\Requests\FinanciamentoRequest;
use App\Models\User;
use App\Helpers\ImageUploadHelper;
use App\Helpers\EstadoHelper;
use App\Helpers\MessageHelper;
use Illuminate\Support\Facades\Auth;

class FinanciamentoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Adicione qualquer middleware necessário
    }

    public function index()
    {
        if(Auth::user()->it_tipo_utilizador==0){
            $data['usuarios']=User::all();
            // Obter todos os registros de financiamento
            $data['financiamentos'] = Financiamento::join('users','financiamentos.users_id','users.id')
            ->select('users.name as usuario','financiamentos.*')
            ->get();
        }   
        elseif(Auth::user()->it_tipo_utilizador==2 ){
            $id=Auth::user()->id;
            $data['usuarios']=User::where('id',$id)->get();
            // Obter todos os registros de financiamento
            $data['financiamentos'] = Financiamento::join('users','financiamentos.users_id','users.id')
            ->where('financiamentos.users_id',$id)
            ->select('users.name as usuario','financiamentos.*')
            ->get();
        }
        // Exibir a view com a lista de registros de financiamento
        return view('admin.financiamento.index', $data);
    }

    public function create()
    { 
        
        if(Auth::user()->it_tipo_utilizador==0){
            // dd(Auth::user()->it_tipo_utilizador);
         $data['usuarios']=User::all();
        }
         else{
            $id=Auth::user()->id;
            $data['usuarios']=User::where('id',$id)->get();
         }
        // Exibir formulário de criação
        return view('admin.financiamento.registrar',$data);
    }

    public function store(FinanciamentoRequest $request)
    {
        // Criação do registro de financiamento
        try {
            //code...
            $reqImagem = $request->capa;

            // Faz o upload da imagem
            $caminho = ImageUploadHelper::uploadImage($reqImagem, 'imagens/causas/financiamento');
            Financiamento::create([
                'valores' => $request->valores,
                'categoria' => $request->categoria,
                'motivo' => $request->motivo,
                'users_id' => $request->users_id,
                'descisao' => $request->descisao,
                'titulo'=> $request->titulo,
                'capa'=>$caminho,
            ]);
            $user=User::where('id',$request->users_id)->first();
            $nome=$user->name;
            $numero=$user->email;
                $messagem="
                Prezado(a) $nome,
                Temos o prazer de informar que o seu pedido de financiamento no ANGOCARE foi aprovado! Parabéns por alcançar esta etapa crucial. Agora, você está oficialmente habilitado(a) a receber doações através da nossa plataforma.
                ";
                $status=MessageHelper::send($numero,$messagem);
              // Redirecionar após a criação
        return redirect()->back()->with('store', 1);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('store.error', 1);
        }
       

      
    }

    public function show(Financiamento $financiamento)
    {
        // Exibir detalhes de um registro de financiamento específico
        return view('admin.financiamento.show', compact('financiamento'));
    }

    public function edit(Financiamento $financiamento)
    {
        // Exibir formulário de edição
        return view('admin.financiamento.edit', compact('financiamento'));
    }

    public function update(FinanciamentoRequest $request, Financiamento $financiamento)
    {
        // Atualização do registro de financiamento
        try {
            //code...
            $financiamento->update($request->all());

            // Redirecionar após a atualização
            return redirect()->back()->back()->with('update', 1);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->back()->with('update.error', 1);
        }
       
    }


    public function destroy(Financiamento $financiamento)
    {
        // Excluir o registro de financiamento
        try {
            //code...
            $financiamento->delete();

            // Redirecionar após a exclusão
            return redirect()->back()->with('delete', 1);
        } catch (\Throwable $th) {
            //throw $th;
             // Redirecionar após a exclusão
             return redirect()->back()->with('delete.error', 1);
        }
       
    }
    public function activar(Financiamento $financiamento){
        try {
            $activar = EstadoHelper::activar($financiamento);
            return redirect()->back()->with('on', 1);

        }catch (\Throwable $th) {
            return redirect()->back()->with('on.error', 1);
      
        }
       

    }
    public function desativar(Financiamento $financiamento){
        try {
            $activar = EstadoHelper::desativar($financiamento);
            return redirect()->back()->with('off', 1);
        } catch (\Throwable $th) {
            return redirect()->back()->with('off.error', 1);
        }
       

    }
    public function video(Request $req,Financiamento $financiamento){
        try {
            $reqImagem = $req->video;

        // Faz o upload da imagem
        $caminho = ImageUploadHelper::uploadImage($reqImagem, 'videos/causas/financiamento');
        $financiamento->update([
            'video'=>$caminho
        ]);
        // dd($financiamento);
        return redirect()->back()->with('video', 1);
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            return redirect()->back()->with('video.error', 1);
        }
      
    }
}
