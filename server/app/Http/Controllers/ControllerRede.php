<?php

namespace App\Http\Controllers;

use App\Model\ModelRede;
use Illuminate\Http\Request;

class ControllerRede extends Controller
{
    public function index()
    {
        return ModelRede::List();
    }

    /*
        Author: Ieleny
        Goal: Inserir a rede apartir do form
    */
    public function insert(Request $request)
    {
        return response()->json(
            [[
                'result' => ModelRede::redeInsert($request->input())
            ]]
        );

    }


    /*
        Author: Ieleny
        Goal: Atualizar a rede apartir do Form
    */
    public function update(Request $request,$id)
    {
        return response()->json(
            [[
                'result' => ModelRede::redeUpdate($request->input(),$id)
            ]]
        );

    }

    /*
        Author: Ieleny
        Goal: Listar rede
    */
    public function list()
    {

    }

    /*
        Author: Ieleny
        Goal: Desativar o registro na rede
    */
    public function store()
    {


    }

}
