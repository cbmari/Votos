<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teste extends Model
{
    protected $table = 'testes';
    protected $fillable = ['nome', 'vinculo', 'endereco', 'whatsapp', 'apoio' ];
}
