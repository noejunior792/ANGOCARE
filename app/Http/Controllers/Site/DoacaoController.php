<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Financiamento;
use App\Models\Produto;
use App\Models\Organizacao;
class DoacaoController extends Controller
{
    public function index(Financiamento $financimento){
        $financimento=$financimento->first();
        return view('site.doacao.index', compact('financimento'));
    }

    public function index2(Produto $produto){
        $produto=$produto->first();
        return view('site.doacao.index2', compact('produto'));
    }
    public function index3(Organizacao $organizacao){
        $organizacao=$organizacao->first();
        return view('site.doacao.index3', compact('organizacao'));
    }
    public function index4(Organizacao $organizacao){
        $organizacao=$organizacao->first();
        return view('site.doacao.index4', compact('organizacao'));
    }
}
