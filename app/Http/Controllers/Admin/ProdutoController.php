<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\User;
use App\Http\Requests\ProdutoRequest;
use App\Helpers\ImageUploadHelper;
use App\Helpers\EstadoHelper;
use App\Helpers\MessageHelper;
use Illuminate\Support\Facades\Auth;
class ProdutoController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth'); // Adicione qualquer middleware necessário
    }

    public function index()
    {
        // Obter todos os produtos
        if(Auth::user()->it_tipo_utlizador==0){
        $data['produtos'] = Produto::join('users','produtos.users_id','users.id')
        ->select('users.name as usuario','produtos.*')
        ->get();
        $data['usuarios']=User::all();
        }
        if(Auth::user()->it_tipo_utlizador==2){
            $id=Auth::user()->id;
            $data['produtos'] = Produto::join('users','produtos.users_id','users.id')
            ->where('produtos.users_id',$id)
            ->select('users.name as usuario','produtos.*')
            ->get();
            $data['usuarios']=User::where('id',$id)->get();
        }
        // Exibir a view com a lista de produtos
        return view('admin.produto.index', $data);
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
        return view('admin.produto.registrar', $data);
    }

    public function store(ProdutoRequest $request)
    {
        try {
            //code...
            // Criação do produto
        $reqImagem = $request->capa;

        // Faz o upload da imagem
        $caminho = ImageUploadHelper::uploadImage($reqImagem, 'imagens/causas/produtos');
        Produto::create([
            'produtos' => $request->produtos,
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
            Parabéns, $nome! É com alegria que anunciamos a aprovação do seu pedido de recursos materiais no ANGOCARE. Agora, você está habilitado para receber o suporte necessário para fortalecer sua causa.   ";
            $status=MessageHelper::send($numero,$messagem);

        // Redirecionar após a criação
        return redirect()->back()->with('store', 1);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('store.error', 1);
        }
        
    }
    public function video(Request $req,Produto $produto){
        try {
            $reqImagem = $req->video;

        // Faz o upload da imagem
        $caminho = ImageUploadHelper::uploadImage($reqImagem, 'videos/causas/produtos');
        $produto->update([
            'video'=>$caminho
        ]);
        return redirect()->back()->with('video', 1);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('video.error', 1);
        }
      
    }

    public function show(Produto $produto)
    {
        // Exibir detalhes de um produto específico
        return view('admin.produtos.show', compact('produto'));
    }

    public function edit(Produto $produto)
    {
        // Exibir formulário de edição
        return view('admin.produtos.edit', compact('produto'));
    }

    public function update(ProdutoRequest $request, Produto $produto)
    {
        try {
            //code...
             // Atualização do produto
        $produto->update($request->all());

        // Redirecionar após a atualização
        return redirect()->back()->with('update', 1);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('update.error', 1);
        }
       
    }

    public function destroy(Produto $produto)
    {
        try {
            //code...
            // Excluir o produto
        $produto->delete();

        // Redirecionar após a exclusão
        return redirect()->back()->with('delete', 1);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('delete.error', 1);
        }
        
    }
    public function activar(Produto $produto){
        try {
            $activar = EstadoHelper::activar($produto);
            return redirect()->back()->with('on', 1);
        } catch (\Throwable $th) {
            return redirect()->back()->with('on.error', 1);
        }
       

    }
    public function desativar(Produto $produto){
        try {
            $activar = EstadoHelper::desativar($produto);
            return redirect()->back()->with('off', 1);
        } catch (\Throwable $th) {
            return redirect()->back()->with('off.error', 1);
        }
       

    }
}
