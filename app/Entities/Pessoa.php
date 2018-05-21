<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use App\Entities\Telefone;
use App\Entities\Email;

class Pessoa extends Model
{
    protected $table = 'pessoas';
    //fillable, sao todos os campos que a gente pode editar
    protected $fillable = [
        'nome',
        'apelido',
        'sexo'
    ];
    public function telefones()
    {
        return $this->hasMany(Telefone::class);
    }
    
}