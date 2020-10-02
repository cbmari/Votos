<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Votos extends Model
{

    use HasFactory;

    protected $table = 'votos';
    public $timestamps = true;

    protected $fillable = ['nome', 'segmento', 'vinculo', 'whatsapp', 'endereco', 'apoio' ];
}
