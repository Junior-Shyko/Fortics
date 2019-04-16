<?php

namespace Fortics;

use Illuminate\Database\Eloquent\Model;

class Refrigerant extends Model
{
    protected $fillable = [
        'brand' , 'type' , 'flavor', 'litrage', 'value', 'stoke'
    ];

    static public function money_real($get_valor) 
    {
        $source = array('.', ','); 
        $replace = array('', '.');
        $valor = str_replace($source, $replace, $get_valor); //remove os pontos e substitui a virgula pelo ponto
        
        return $valor; //retorna o valor formatado para gravar no banco
    }

    
    
}
