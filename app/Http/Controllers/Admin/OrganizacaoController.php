<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organizacao;
use App\Models\Documento as Doc;
use App\Models\User;
use App\Models\OrganizacaoDocumento as Documento;
use App\Http\Requests\OrganizacaoRequest as Req;
use App\Helpers\ImageUploadHelper;
use App\Helpers\EstadoHelper;
use Illuminate\Support\Facades\DB;
use App\Helpers\MessageHelper;
use Illuminate\Support\Facades\Auth;
class OrganizacaoController extends Controller
{
    //
   



    public function index(){
        if(Auth::user()->it_tipo_utlizador==0){
        $data['organizacoes']=Organizacao::join('users','organizacaos.users_id','users.id')
        ->select('users.name as proprietario','organizacaos.*')
        ->get();
        }
        elseif(Auth::user()->it_tipo_utlizador==3){
            $id=Auth::user()->id;
            $data['organizacoes']=Organizacao::join('users','organizacaos.users_id','users.id')
            ->where('organizacaos.users_id',$id)
            ->select('users.name as proprietario','organizacaos.*')
            ->get();
        }

        return view('admin.organizacao.listar',$data);
    }
    public function documentos($id){
        $data['files']=Documento::join('organizacaos',
        'organizacao_documentos.organizacaos_id',
        'organizacaos.id')
        ->join('documentos','organizacao_documentos.documentos_id',
        'documentos.id')
        ->select('organizacao_documentos.*','documentos.documento as nome')
        ->where('organizacaos_id',$id)->get();

        return view('admin.organizacao.documentos',$data);
    }
    public function store(Req $req){
        try {
            
           
            //  dd($req->logotipo);
            // $documentos = $req->input('documentos');
            $reqImagem = $req->logotipo;

            // Faz o upload da imagem
            $caminhoImagem = ImageUploadHelper::uploadImage($reqImagem, 'imagens/organizacoes');

            if (!$caminhoImagem) {
               
                return redirect()->back()->with('image.error','Erro ao carregar Imagem');;
            } 
        
            $organizacao=Organizacao::create([
                'nome' => $req->nome,
                'logotipo' => $caminhoImagem ,
                'descricao' => $req->descricao,
                'users_id' => $req->users_id,
            ]);

            $documentos = $req->documentos;

            foreach ($documentos as $documentoData) {
                 // $documentos = $req->input('documentos');
                
            $documento = $documentoData['documento'];
            // Faz o upload da imagem
            $caminhoDocumento = ImageUploadHelper::uploadImage($documento, 'documentos/organizacoes');
            if (!$caminhoDocumento) {
            
                return redirect()->back()->with('doc.error','Erro ao carregar Imagem');;
            }  
        //    dd($documentoData['id']);
            Documento::create(
                    [
                        'documento'=>$caminhoDocumento,
                        'documentos_id'=>$documentoData['id'],
                        'organizacaos_id'=>$organizacao->id,
                    ]
                );
            }

            
    
            return redirect()->route('organizacoes.index')->with('store','Erro ao Cadastrar Organizacao');
        } catch (\Throwable $th) {
            dd($th);
          
            return redirect()->back()->with('store.error','Erro ao Cadastrar Organizacao');
        }
    }
    public function edit($id){
        $data['organizacao']=Documento::join('organizacaos',
        'organizacao_documentos.organizacaos_id',
        'organizacaos.id')
        ->join('users','organizacaos.users_id','users.id')
        ->where('organizacaos.id',$id)
        ->where('organizacao_documentos.organizacaos_id',$id)
        ->select('organizacaos.*','users.name as user','users.id as user_id','organizacao_documentos.documento as documento','organizacao_documentos.id as documento_id')
        ->first();
        $data['usuarios']=User::all();
        $data['documentos']=Doc::all();
        return view('admin.organizacao.edit',$data);

    }
    public function create(){
        $data['usuarios']=User::all();
        $data['documentos']=Doc::all();

        return view('admin.organizacao.registrar',$data);

    }
    public function update($id, Request $req){
        try {
            
           
            //  dd($req->logotipo);
            // $documentos = $req->input('documentos');
            $reqImagem = $req->logotipo;

            // Faz o upload da imagem
            $caminhoImagem = ImageUploadHelper::uploadImage($reqImagem, 'imagens/organizacoes');
              
            if ($caminhoImagem) {
               
                $organizacao=Organizacao::where('id',$id)->update([
                    'nome' => $req->nome,
                    'logotipo' => $caminhoImagem ,
                    'descricao' => $req->descricao,
                    'users_id' => $req->users_id,
                ]);
            } 
            else{
                $organizacao=Organizacao::where('id',$id)->update([
                    'nome' => $req->nome,
                    'descricao' => $req->descricao,
                    'users_id' => $req->users_id,
                ]);
            }
        
            $org=Organizacao::where('id',$id)->first();

            $documentos = $req->documentos;
            // dd($org);

            foreach ($documentos as $documentoData) {
                if (is_array($documentoData) && isset($documentoData['documento'])) {
                    $documento = $documentoData['documento'];
                
                    // Faz o upload da imagem
                    $caminhoDocumento = ImageUploadHelper::uploadImage($documento, 'documentos/organizacoes');
                
                    Documento::where('documentos_id', $documentoData['id'])
                             ->where('organizacaos_id', $id)
                             ->update([
                                 'documento' => $caminhoDocumento,
                                 'documentos_id' => $documentoData['id'],
                                 'organizacaos_id' => $org->id,
                             ]);
                }  
                
        //    dd($documentoData['id']);
           
            }

            
    
            return redirect()->route('organizacoes.index')->with('store','Erro ao Cadastrar Organizacao');
        } catch (\Throwable $th) {
            dd($th);
          
            return redirect()->back()->with('store.error','Erro ao Cadastrar Organizacao');
        }
    }
    public function delete(Organizacao $organizacao){
        try {
            //code...
            $organizacao->delete();
            return redirect()->back()->with('delete','Organizacao Eliminada com Sucesso');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('delete.error','Organizacao Eliminada com Sucesso');
        }
       
    }
    public function activar(Organizacao $organizacao){
        try {
            $activar = EstadoHelper::activar($organizacao);

            $user=User::where('id',$organizacao->users_id)->first();
            $nome=$user->name;
            $numero=$user->email;
                $messagem="
                Olá $organizacao->nome,
                Temos a satisfação de informar que a sua organização foi aprovada no ANGOCARE! Agora, você pode começar a receber doações através da nossa plataforma. Esta é uma conquista significativa, e estamos empolgados para apoiar a sua missão. ";
                $status=MessageHelper::send($numero,$messagem);

            return redirect()->back()->with('on', 'Organizacao Aprovado com sucesso!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('on.error', 'Erro ao Aprovar com sucesso!');
        }
       

    }
    public function desativar(Organizacao $organizacao){
        try {
            $activar = EstadoHelper::desativar($organizacao);
            $user=User::where('id',$organizacao->users_id)->first();
            $nome=$user->name;
            $numero=$user->email;
                $messagem="
                Olá $organizacao->nome,
                Lamentamos informar que a aprovação da sua organização no ANGOCARE não foi possível neste momento. Infelizmente, os documentos cadastrados não conseguiram comprovar a veracidade da organização. ";
                $status=MessageHelper::send($numero,$messagem);
            return redirect()->back()->with('off', 'Organizacao Rejeitado com sucesso!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('off.error', 'Erro ao Rejeitar com sucesso!');
        }
       

    }
}
