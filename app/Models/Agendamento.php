<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'profissional_id',
        'cliente_id',
        'servico_id',
        'status_id',
        'data_hora',
    ];

    public function profissional()
    {
        return $this->belongsTo(Profissional::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function servico()
    {
        return $this->belongsTo(Servico::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
