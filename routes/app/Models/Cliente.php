<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
   /**
     * Tabla usada por el modelo en la base de datos.
     *
     * @var string
     */
    protected $table = 'clientes';
    /**
     * Atributos asignables.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'nombre',
        'dni',
        'email',
        'telefono'

    ];
    /**
     * Si en modelo existe los timestamps created_at y updated_at.
     *
     * @var boolean
     */
    public $timestamps = true;
    /**
     * Atributos excluidos del modelo al transformarlo en JSON.
     *
     * @var array
     */
    protected $hidden = [
        'id'
    ];
    //public function users()
	//{
    //return $this->belongsToMany(User::class, 'user_roles');
    //}
}


