<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{

    protected $table = 'colaboradores';
    
    protected $fillable = [
        'nombre',
        'fecha_nacimiento',
        'dpi',
        'telefono',
        'correo_electronico',
    ];

    public function empresas()
    {
        return $this->belongsToMany(Empresa::class, ColaboradorEmpresa::class);
    }
}
