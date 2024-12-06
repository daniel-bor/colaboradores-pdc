<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresas';
    protected $fillable = ['nombre_comercial', 'nit', 'telefono', 'correo_electronico', 'municipio_id', 'razon_social'];

    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }

    public function colaboradores()
    {
        return $this->belongsToMany(Colaborador::class, ColaboradorEmpresa::class);
    }

    public function colaboradors()
    {
        return $this->belongsToMany(Colaborador::class, ColaboradorEmpresa::class);
    }
}
