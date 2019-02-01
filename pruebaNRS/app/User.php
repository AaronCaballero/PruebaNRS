<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['usuario', 'nombre', 'apellidos', 'telefono', 'email', 'fecha'];

    public static function insert_users($usuario,$email,$password) {
 
        $query = DB::table('usuarios')->insert(array(
        'usuario' => $usuario,
        'nombre' => $nombre,
        'apellidos' => $apellidos,
        'telefono' => $telefono,
        'email'  => $email,
        'fecha' => $fecha
        ));
         
        return $query;
    } 
}
