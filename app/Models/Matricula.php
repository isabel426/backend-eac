<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matricula extends Model
{
    use HasFactory;

    protected $fillable = ['estudiante_id', 'modulo_id', 'ecosistema_laboral_id', 'ciclo_formativo_id', 'familia_profesional_id', 'fecha_matricula'];
    protected $table = 'matriculas';

    public function estudiante()
    {
        return $this->belongsTo(\App\Models\User::class, 'estudiante_id');
    }
}
