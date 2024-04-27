<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    public $timestamps = false;

    // Define o relacionamento entre Consulta e Paciente
    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'paciente_id');
    }

    // Define o relacionamento entre Consulta e Medico
    public function medico()
    {
        return $this->belongsTo(Medico::class, 'medico_id');
    }
}

