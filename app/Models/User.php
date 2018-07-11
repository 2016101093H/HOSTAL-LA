<?php

namespace App\Models;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
  /**
     * Tabla usada por el modelo en la base de datos.
     *
     * @var string
     */
    protected $table = 'users';
    /**
     * Atributos asignables.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'paswword'

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
        'id', 'remember_token'
    ];
}
