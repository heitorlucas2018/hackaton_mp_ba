<?php

namespace App\Model;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

/**
 *  @author heitor <heitor@gmail.com>
 *
 */
class ModelUser extends Model
{
    public $timestamps = false;
    protected CONST TABLES  = 'user';
    protected const COLUMNS = [
        'user_id',
        'user_name',
        'user_email',
        'user_senha',
        'user_cpf',
        'user_contato',
        'user_num_inscricao',
        'user_nivel',
        'setor_setor_id'
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
    public static function UpdateUser($token = null, $data = []){
         DB::table(self::TABLES)
                ->where('token','=',$token)
                ->update($data);
        return true;
    }
    public static function Create($data = []){
        $res = DB::table(self::TABLES)
               ->insertGetId($data);
       return @res;
   }

}
