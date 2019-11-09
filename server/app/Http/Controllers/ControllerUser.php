<?php

namespace App\Http\Controllers;

use App\Model\ModelUser;
use Illuminate\Http\Request;

class ControllerUser extends Controller
{
    public function index()
    {
        return [false];
    }
    public function show( $key = null)
    {
        return ["show"=>false];
    }
    public function update( Request $rs,$token = null)
    {
        try {
            if($token == null)
                return['success' => false,
                       'result'  => 'Não ha token.'];
            $data =  $rs->input();
            if(! is_null($data['user_name']))
                $data['user_senha'] = md5($data['user_senha']);
            if($re = ModelUser::UpdateUser($token,$data))
                return['success' => true,
                       'result'  => 'cadastro atualizado com sucesso.'];
             else
               return['success' => false,
                      'result'  => 'error'];

        } catch (\Exception $th) {
                return['success' => false,
                       'results' => $th->getMessage()
                        ];
        }
    }
    public function store( Request $rs)
    {
        try {
            $data =  $rs->input();
        if(! is_null($data['user_name']))
                $data['user_senha'] = md5($data['user_senha']);
            if($key = ModelUser::Create($data))
                return['success' => true,
                       'result'  => 'cadastro feitor com sucesso.'];
             else
               return['success' => false,
                      'result'  => 'error'
                ];

        } catch (\Exception $th) {
                return['success' => false,
                       'results' => $th->getMessage()
                        ];
        }
    }


}
