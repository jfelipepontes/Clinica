<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    public $timestamps = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($consulta) {
            // Crie um novo prontuário
            $prontuario = new Prontuario();
            // Atribua o médico e o paciente ao prontuário
            $prontuario->medico_id = $consulta->medico_id;
            $prontuario->paciente_id = $consulta->paciente_id;
            // Salve o prontuário no banco de dados
            $prontuario->registro_medico = 'Diagnóstico...';
            $prontuario->save();
            // Associe o prontuário à consulta que está sendo criada
            $consulta->prontuario_id = $prontuario->id;
        });
    }

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

