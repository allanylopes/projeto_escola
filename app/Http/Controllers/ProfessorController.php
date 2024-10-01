<?php

namespace App\Http\Controllers;
//verificar se vai preecher sozinho
use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function index()
    {
        //Recupera todos os dados da tabela professor e armazena no array $professor
        $professor = Professor::all();


        //'professor.index' = caminho da view
        //'professor' => $professor = envia os dados atráves de um array 
        return view('professor.index', ['professor' => $professor]);
    }
}
