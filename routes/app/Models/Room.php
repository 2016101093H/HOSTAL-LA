<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Room;

class Room extends Model
{
  /**
     * Tabla usada por el modelo en la base de datos.
     *
     * @var string
     */
    protected $table = 'rooms';
    /**
     * Atributos asignables.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'type',
        'price'

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
    //public function users()
	//{
    //return $this->belongsToMany(User::class, 'user_roles');
    //}
}
