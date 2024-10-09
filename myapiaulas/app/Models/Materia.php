<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

    protected $table = 'materias';

    // Definimos la clave primaria
    protected $primaryKey = 'ClaveMateria';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'ClaveMateria',
        'ClaveCarrera',
        'Nombre',
        'Creditos',
    ];

    // Métodos get y set para ClaveMateria
    public function getClaveMateria()
    {
        return $this->attributes['ClaveMateria'];
    }

    public function setClaveMateria($ClaveMateria)
    {
        $this->attributes['ClaveMateria'] = $ClaveMateria;
    }

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

    // Métodos get y set para Creditos
    public function getCreditos()
    {
        return $this->attributes['Creditos'];
    }

    public function setCreditos($Creditos)
    {
        $this->attributes['Creditos'] = $Creditos;
    }
}
