<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesquisaController extends Controller
{
    public function index()
    {
        return view('search');
    }

    public function search(Request $request)
    {
        $cliente = $request->input('cliente');
        $vendedor = $request->input('vendedor');
        $data_inicial = $request->input('data_inicial');
        $data_final = $request->input('data_final');
        $descricao = $request->input('descricao');
    
        $query = DB::table('orcamentos')
            ->where('cliente', 'like', "%$cliente%")
            ->where('vendedor', 'like', "%$vendedor%");
    
        if (!empty($data_inicial)) {
            $query->where('data_hora', '>=', $data_inicial);
        }
        if (!empty($data_final)) {
            $query->where('data_hora', '<=', $data_final);
        }
    
        $results = $query->orderByDesc('data_hora')->get();
    
        return view('search', [
            'results' => $results,
            'cliente' => $cliente,
            'vendedor' => $vendedor,
            'data_inicial' => $data_inicial,
            'data_final' => $data_final,
            'descricao' => $descricao,

        ]);
    }

    public function edit($id)
{

}

public function remove($id)
{

}

}