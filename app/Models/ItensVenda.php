<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItensVenda extends Model
{
    protected $table = 'itensVenda';
    protected $primaryKey = 'idItemVenda';


    protected $fillable = [
        'idVenda',
        'idProduto',
        'quantidadeProduto',
        'valorProduto'

    ];

    public $timestamps = false;


    protected $hidden = [];


    protected $casts = [];
}
