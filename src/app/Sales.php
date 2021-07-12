<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use stdClass;

class Sales extends Model
{
    protected $fillable = [
        'nome',
        'cep',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'estado'
    ];

    public function getFillableAsStdClass()
    {
        $std = new stdClass();
        foreach($this->fillable as $attr){
            $std->$attr = "";
        }
        return $std;
    }
}
