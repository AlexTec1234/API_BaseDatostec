<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;

    protected $table = 'carreras';

    // No tiene ID auto incremental, se usa la ClaveCarrera como clave primaria
    protected $primaryKey = 'ClaveCarrera';
    public $incrementing = false;
    protected $keyType = 'string';

    // Deshabilitar las marcas de tiempo
    public $timestamps = false;

    protected $fillable = [
        'ClaveCarrera',
        'Nombre',
        'Descripcion',
    ];

    // Métodos get y set para ClaveCarrera
    public function getClaveCarrera()
    {
        return $this->attributes['ClaveCarrera'];
    }

    public function setClaveCarrera($ClaveCarrera)
    {
        $this->attributes['ClaveCarrera'] = $ClaveCarrera;
    }

    // Métodos get y set para Nombre
    public function getNombre()
    {
        return $this->attributes['Nombre'];
    }

    public function setNombre($Nombre)
    {
        $this->attributes['Nombre'] = $Nombre;
    }

    // Métodos get y set para Descripcion
    public function getDescripcion()
    {
        return $this->attributes['Descripcion'];
    }

    public function setDescripcion($Descripcion)
    {
        $this->attributes['Descripcion'] = $Descripcion;
    }
}

