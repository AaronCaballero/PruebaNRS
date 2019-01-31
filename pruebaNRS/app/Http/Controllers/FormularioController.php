<?php 
class Formularios_Controller extends Base_Controller
{

	public function action_index()
	{

		return View::make('formulario.form');

	}

	public function action_user()
	{

		$usuario = e(Input::get('usuario'));
	    $nombre = e(Input::get('nombre'));
	    $apellidos = e(Input::get('apellidos'));
	    $telefono = e(Input::get('telefono'));
	    $email = e(Input::get('email'));
	    $fecha = e(Input::get('fecha'));


	    $rules = array(
	        'usuario' => 'required|min:2|max:100',
	        'nombre' => 'required|min:2|max:100',
	        'apellidos' => 'required|min:2|max:100',
	        'telefono' => 'required|min:2|max:20',
	        'email' => 'required|email|min:6|max:100|unique:usuarios',
	        'fecha' => 'required|min:10|max:10'
	    );



		$validation = Validator::make(Input::all(), $rules);

	    if ($validation->fails())
	    {
	        return Redirect::to('formularios')->with_errors($validation)->with_input();
	    }else{

	    	$insert = Usuarios::insert_users($usuario,$nombre,$apellidos,$telefono,$email,$fecha);

	    	if($insert)
	    	{

	    		return Redirect::to('formularios')->with('mensaje','¡Usuario registrado correctamente!.');

	    	}

	    }

	}

}