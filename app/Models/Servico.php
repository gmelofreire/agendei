<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'preco',
        'especialidade_id',
    ];

    public function especialidade()
    {
        return $this->belongsTo(Especialidade::class);
    }

    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class);
    }

}
