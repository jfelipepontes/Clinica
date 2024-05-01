<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prontuario extends Model
{
    public $timestamps = false;

    // Define o relacionamento entre Prontuario e Consulta
    public function consulta()
    {
        return $this->belongsTo(Consulta::class, 'prontuario_id');
    }

    // Define o relacionamento entre Prontuario e Paciente
    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'paciente_id');
    }

    // Define o relacionamento entre Prontuario e Medico
    public function medico()
    {
        return $this->belongsTo(Medico::class, 'medico_id');
    }
}

