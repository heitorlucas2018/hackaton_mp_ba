<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

//Biblioteca do Banco de conexão
use DB;
use App\Quotation;

class ModelInstituicoes extends Model
{
    public $timestamps = false;
    protected CONST TABLES  = 'intituicoes';
    protected const COLUMNS = [
        'intituicoes_id',
        'intituicoes_nome',
        'intituicoes_endereco',
        'intituicoes_bairro',
        'intituicoes_respnsavel',
        'intituicoes_num_contato',
        'intituicoes_geolocalizacao',
        'intituicoes_geolocalizacao_longetude',
        'rede_rede_id',
        'categoria_categoria_id',
        'status_status_id',
        'user_user_id'
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

    public static function instituicoesUpdate($data = [],$id = null)
    {
         DB::table(self::TABLES)
                ->where('id','=',$id)
                ->update($data);
        return @$data['key'];
    }

    public static function instituicoesInsert($data = [])
    {
        $res = DB::table(self::TABLES)
               ->insertGetId($data);
       return @res;
    }
    
}
