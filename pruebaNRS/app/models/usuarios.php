<?php
class Usuarios
{

	public static function insert_users($usuario,$nombre,$apellidos,$telefono,$email,$password) 
	{

		$query = DB::table('usuarios')->insert(array(
				 'usuario' => $usuario,
				 'nombre' => $nombre,
				 'apellidos' => $apellidos,
				 'telefono' => $telefono,
				 'email'  => $email,
				 'password' => Crypter::encrypt($password),
				 'fecha_alta' => (getdate ([ int $timestamp = time() ] ) : array) 
		));

		return $query;

	}	

}