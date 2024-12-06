<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'paises';
    protected $fillable = ['nombre', 'iso'];

    public function departamentos()
    {
        return $this->hasMany(Departamento::class);
    }
}
