<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Model\ModelInstituicoes;

class ControllerInstituicoes extends Controller
{

    public function index()
    {

    }

    /* 
        Author: Ieleny
        Goal: Inserir a instituição apartir do form
    */
    public function insert(Request $request)
    {  

        return response()->json(
            [[
                'result' => ModelInstituicoes::instituicoesInsert($request->input())
            ]]
        );
    
    }

    /* 
        Author: Ieleny
        Goal: Atualizar a instituição apartir do Form
    */
    public function update(Request $request,$id)
    {  
        
        return response()->json(
            [[
                'result' => ModelInstituicoes::update($request,$id)
            ]]
        );
    }

    /* 
        Author: Ieleny
        Goal: Listar Instituições
    */
    public function list()
    {
        return response()->json(
            [[
                'result' => ModelInstituicoes::all()
            ]]
        );
    }

    /* 
        Author: Ieleny
        Goal: Desativar o registro na instituição
    */
    public function store()
    {


    }
    
}
