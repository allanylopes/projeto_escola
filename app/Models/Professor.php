<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;
//nome da tabela do banco de dados
    protected $table = 'professores';
//atributos que serão enviados do banco de dados
    protected $fillable = ['nome, cpf, telefone'];
}
