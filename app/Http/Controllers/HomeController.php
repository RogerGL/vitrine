<?php

namespace App\Http\Controllers;
use App\Models\Produtos;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        //função que retorna a view home.index junto com a tabela.
        $produtos = Produtos::all();
        return view('home.index', compact('produtos'));
    }
}
