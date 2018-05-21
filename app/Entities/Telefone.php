<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use App\Entities\Pessoa;

class Telefone extends Model
{
    protected $table = 'telefones';
    //fillable, sao todos os campos que a gente pode editar
    protected $fillable = [
        'descricao',
        'codpais',
        'ddd',
        'prefixo',
        'sufixo'
    ];
    public function getNumeroAttribute(){
        return "{$this->codpais} ({$this->ddd}) {$this->prefixo}-{$this->sufixo}";
    }
    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }
}