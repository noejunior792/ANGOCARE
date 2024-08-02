<?php

namespace App\Http\Controllers\Relatorio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organizacao;
use App\Models\Financiamento;
use App\Models\Produto;
use App\Models\DoacaoFinanciamento;
use App\Models\DoacaoProduto;
use App\Models\DoacaoFinanciamentoOng;
use App\Models\DoacaoProdutoOng;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Mpdf\Mpdf;
class DoacoesController extends Controller
{
    //

    public function index(){
        
        return view();
    }
    public function request(){

        $mpdf = new \Mpdf\Mpdf();
        $dados["bootstrap"] = public_path("css/listas/bootstrap.min.css");
        $dados["css"] = public_path("css/listas/style.css");

        $mpdf->SetFont("arial");
        $mpdf->setHeader();
        // $this->loggerData('Imprimiu Lista dos Funcionários');
        $html = view("pdfs/livraria/copias_livros/index", $dados);
        $mpdf->writeHTML($html);
        $mpdf->Output("Livros.pdf", "I");
        return view("");
    }
}
