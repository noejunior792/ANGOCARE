<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Helpers\ImageUploadHelper;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Models\Organizacao;
use App\Models\OrganizacaoDocumento as Documento;
use App\Helpers\MessageHelper;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required','unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'bi'=> ['required', 'string', 'min:8',],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
    // DB::beginTransaction();
            // try {
                $nome=$data['name'];
                $messagem="Olá $nome,Seja muito bem-vindo ao ANGOCARE, a plataforma dedicada às doações e solidariedade! Estamos empolgados por tê-lo(a) conosco. Sua presença faz toda a diferença em nossa missão de promover o bem.   
                O ANGOCARE é mais do que uma plataforma; é uma comunidade de corações generosos que se unem para fazer a diferença. Através do seu envolvimento, estamos construindo um impacto positivo e transformador.
                Juntos, podemos fazer grandes coisas. Obrigado por se juntar a nós nesta jornada solidária.
                ";
                $numero=$data['email'];
   
                $status=MessageHelper::send($numero,$messagem);
                // dd($status);
                $user=User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'bi' => $data['bi'],
                    'it_tipo_utilizador' => $data['tipo_estabelecimento'],
                    'password' => Hash::make($data['password']),
                ]);
                if($data['tipo_estabelecimento']==4){
                    $user->update([
                        'empresa'=>$data['empresa'],
                        'nif'=>$data['nif'],
                    ]);
                }
                // dd('ola');
                // 
    
                if($data['tipo_estabelecimento']==2){
    
                    $reqImagem = $data['logotipo'];
            
                    // Faz o upload da imagem
                    $caminhoImagem = ImageUploadHelper::uploadImage($reqImagem, 'imagens/organizacoes');
            
                    if (!$caminhoImagem) {
                    
                        DB::rollback();
                        throw new \Exception("Algo deu errado");
                    } 
                
                    $organizacao=Organizacao::create([
                        'nome' => $data['nome'],
                        'logotipo' => $caminhoImagem ,
                        'descricao' => $data['descricao'],
                        'users_id' => $user->id,
                    ]);
            
                    $documentos = $data['documentos'];
            
                    foreach ($documentos as $documentoData) {
                        // $documentos = $req->input('documentos');
                        
                        $documento = $documentoData['documento'];
                        // Faz o upload da imagem
                        $caminhoDocumento = ImageUploadHelper::uploadImage($documento, 'documentos/organizacoes');
                        if (!$caminhoDocumento) {
                            DB::rollback();
                            throw new \Exception("Algo deu errado");
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
                 }
                
                //  DB::commit();
               
                return $user;
            
                // }
   
         
    }
    
}
