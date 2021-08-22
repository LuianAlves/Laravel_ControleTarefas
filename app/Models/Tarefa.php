<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;
    protected $fillable = ['tarefa', 'data_limite_conclusao', 'user_id'];

    public function user() { // Associando os arquivos baixados apenas ao usuários autenticados
        return $this->belongsTo('App\Models\User');
    }
}
