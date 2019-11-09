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
    public function insert(Request $rs)
    {
        return  ModelInstituicoes::instituicoesInsert($rs->input());
    }

    /*
        Author: Ieleny
        Goal: Atualizar a instituição apartir do Form
    */
    public function update(Request $rs,$id)
    {
        return ModelInstituicoes::update($rs->input(),$id);
    }

    /*
        Author: Ieleny
        Goal: Listar Instituições
    */
    public function list()
    {
        return ModelInstituicoes::List();
    }

}
