<?php

namespace App\Model;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

/**
 *  @author heitor <heitor@heitorl09@s>
 *
 */
class ModelAuth extends Model
{
    protected CONST TABLES  = 'user';

    public static function Auth( $data = null)
    {
        if($data == null) return ['Data esta nulo.'];

        $query = DB::table(self::TABLES)
                        ->select(['user_id','user_senha'])
                        ->where('user_email','=',$data['user_email'])
                        ->where('user_senha','=',md5($data['user_senha']))
                        ->get();
        if( ! empty($query) ){
           $data = '/'.$query[0]->user_id.'/'.$query[0]->user_senha.'/'.date('ddmmyy');
           $re =  self::GeneretToken($query[0]->user_id,$data);
           return [
            'success' => true,
            'result'  => ['token' => $re]
        ];
        } else
        return [ 'success' => false,
                 'result'  => 'Usuario ou senha invalidos.'];
    }

    public static function GeneretToken($id = null,$data)
    {
        $token = md5($data.rand(1,999));
        $data  = ['token'=>$token];
        DB::table(self::TABLES)
            ->where('user_id','=',$id)
            ->update($data);
        return $token;
    }
}
