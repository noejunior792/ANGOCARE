<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /** Nivel de Acesso
         * 0-Cliente
         * 1-Administrador
         * 2-Motorista
         * 3-Afiliado
         */
    public function index(){
        $users=User::get();
        // dd($users);

        return view('admin.user.index2', compact('users'));
    }

    public function store(Request $req){
        try{
            if($req->hasFile('vc_path') && $req->file('vc_path')->isValid()){
                // Imagem VC_PATH
                $req_imagem=$req->vc_path;
                $extension=$req_imagem->extension();
                $imagem_name=md5($req_imagem->getClientOriginalName() . strtotime('now')) . "." . $extension;
                $destino=$req_imagem->move(public_path("imagens/galeria"), $imagem_name);
                $dir = "imagens/galeria";
                $caminho=$dir. "/". $imagem_name;
                $user=User::create([
                    'name'=>$req->name,
                    'email'=>$req->email,
                    'password'=>Hash::make($req->password),
                    'bi'=>$caminho,
                    'it_tipo_utilizador'=>$req->vc_tipo_utilizador
                ]);
                    return redirect()->back()->with('store',1);
    }
    }catch (\Throwable $th) {
        return redirect()->back()->with("store.error", 1);
    }
    }
    public function update($id, Request $req){
        try{
           
            if($req->hasFile('vc_path') && $req->file('vc_path')->isValid()){
                // Imagem VC_PATH
                $req_imagem=$req->vc_path;
                $extension=$req_imagem->extension();
                $imagem_name=md5($req_imagem->getClientOriginalName() . strtotime('now')) . "." . $extension;
                $destino=$req_imagem->move(public_path("imagens/galeria"), $imagem_name);
                $dir = "imagens/galeria";
                $caminho=$dir. "/". $imagem_name;
                $user=User::where('id',$id)->update([
                    'name'=>$req->name,
                    'email'=>$req->email,
                    'password'=>Hash::make($req->password),
                    'bi'=>$caminho,
                    // 'vc_path'=>$caminho,
                    'it_tipo_utilizador'=>$req->vc_tipo_utilizador,

                ]);
                return redirect()->back()->with('editada',1);
                }
                
            
                else{
                    User::where('id',$id)->update([
                        'name'=>$req->name,
                        'email'=>$req->email,
                        'password'=>Hash::make($req->password),
                        'it_tipo_utilizador'=>$req->vc_tipo_utilizador,

                    ]);
                    return redirect()->back()->with('editada',1);
                }

            
    } catch (\Throwable $th) {
       dd($th);
        return redirect()->back()->with("editada_f", 1);
    }
    }
    public function delete($id){
        try{

     
        User::destroy($id);
        return redirect()->back()->with('eliminada',1);
    }catch (\Throwable $th) {
        return redirect()->back()->with("eliminada_f", '1');
    }
    }
}
