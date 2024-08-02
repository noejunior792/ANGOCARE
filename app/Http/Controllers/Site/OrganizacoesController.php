<?php

namespace App\Http\Controllers\Site;

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

class OrganizacoesController extends Controller
{
    //
    public function index(){
        $data['organizacoes']=Organizacao::join('users','organizacaos.users_id','users.id')
        ->select('users.name as proprietario','organizacaos.*')
        ->where('organizacaos.estado',1)
        ->get();
        return view('site.ong.index', $data);
    }
    public function show($id){
        $organizacao=Organizacao::join('users','organizacaos.users_id','users.id')
        ->select('users.name as proprietario','organizacaos.*')
        ->where('organizacaos.id',$id)
        ->first();
        // dd($organizacao);
        return view('site.ong.single',compact('organizacao'));
    }
}
