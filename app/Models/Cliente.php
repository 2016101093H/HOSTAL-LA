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
<<<<<<< HEAD
    protected $table = 'reservas';
=======
    protected $table = 'clientes';
>>>>>>> origin/joserb
    /**
     * Atributos asignables.
     *
     * @var array
     */
    protected $fillable = [
        'id',
<<<<<<< HEAD
        'inicio',
        'cant_dias',
        'cliente_id',
        'room_id'
=======
        'nombre',
        'dni',
        'email',
        'telefono'
>>>>>>> origin/joserb

    ];
    /**
     * Si en modelo existe los timestamps created_at y updated_at.
     *
     * @var boolean
     */
<<<<<<< HEAD
    public $timestamps = false;
=======
    public $timestamps = true;
>>>>>>> origin/joserb
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


