<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cuarto;

class Cuarto extends Model
{
  /**
     * Tabla usada por el modelo en la base de datos.
     *
     * @var string
     */
    protected $table = 'cuartos';
    /**
     * Atributos asignables.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'tipo_cuarto',
        'precio'

    ];
    /**
     * Si en modelo existe los timestamps created_at y updated_at.
     *
     * @var boolean
     */
    public $timestamps = false;
    /**
     * Atributos excluidos del modelo al transformarlo en JSON.
     *
     * @var array
     */
    protected $hidden = [
        'id'
    ];
}
