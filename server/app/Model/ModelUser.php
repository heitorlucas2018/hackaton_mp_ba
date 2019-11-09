<?php

namespace App\Model;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class ModelUser extends Model
{
    public $timestamps = false;
    protected CONST TABLES  = 'user';
    protected const COLUMNS = [
        'user_id',
        'user_name',
        'user_email',
        'user_cpf',
        'user_contato',
        'user_num_inscricao',
        'user_nivel',
        'setor_setor_id',
    ];

    public static function List()
    {

        $query = DB::table(self::TABLES)
                        ->select(self::COLUMNS)
                        ->get();
        return ['success' =>true,
                'results' => $query
                ];
    }
    public static function Auth($data = null)
    {
        $ret = false;
        $query = DB::table('usuario')
                        ->select(['id','login','senha'])
                        ->where('login','=',$data['username'])
                        ->where('senha','=',$data['password'])
                        ->get();
            if(count($query) != 0){
                $data = '/'.$query[0]->login.'/'.$query[0]->senha.'/'.date('ddmmyy');
                $k = md5($data);
                $data = ['key' => $k];
               $ret =  self::userUpdate($query[0]->id,$data);
            }
        return $ret;
    }
    public static function AuthToken($key = null)
    {
            $query = DB::table('usuario')
                            ->select(['login','nivel'])
                            ->where('key', '=', $key)
                            ->get();
            if($res = count($query) != 0)
                return ['nivel'=>$query[0]->nivel,'res'=>$res];
            else
                return ['nivel'=>null,'res'=>$res];
    }
    public static function userUpdate($id = null,$data = []){
         DB::table('usuario')
                ->where('id','=',$id)
                ->update($data);
        return @$data['key'];
    }
    public static function userIsert($data = []){
        $res = DB::table('usuario')
               ->insertGetId($data);
       return @res;
   }

}
