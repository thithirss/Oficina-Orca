<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orcamento;

use function Termwind\style;

class orcamentoController extends Controller
{
    public function index(Request $request) {


        return view('index');
    }

    public function store(Request $request) {
        $inputs=[           
        
        'cliente' => $request->input('cliente'),
        'data_hora' => $request->input('data_hora'),
        'vendedor' => $request->input('vendedor'),
        'descricao' => $request->input('descricao'),
        'valor' => $request->input('valor'),
    ];


        $orcamento = new orcamento (
        $inputs   
        );

        $orcamento->save();

        // echo'cadastrado com sucesso!!';
        echo '<p 
        style="font-size: 50px; 
        text-align: center;
        color: green;
        margin: 300px;"
        id="success-message">Cadastrado com sucesso!!</p>';
                
}

}


