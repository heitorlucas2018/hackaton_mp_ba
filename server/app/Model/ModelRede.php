<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

//Biblioteca do Banco de conexão
use DB;
use App\Quotation;


class ModelRede extends Model
{
    public $timestamps = false;
    protected CONST TABLES  = 'rede';
    protected const COLUMNS = [
        'rede_id',
        'rede_nome'
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

    public static function redeUpdate($data = [],$id = null)
    {
         DB::table(self::TABLES)
                ->where('rede_id','=',$id)
                ->update($data);
        return @$data['key'];
    }

    public static function redeInsert($data = [])
    {
        $res = DB::table(self::TABLES)
               ->insertGetId($data);
       return @res;
    }

    public static function instituicoesStore()
    {
        
    }
}
