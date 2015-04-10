<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Maestros extends Model {

/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'maestros';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nombre', 'apellido_p', 'apellido_m', 'sexo', 'direccion', 'colonia', 'cp', 'telefonos', 'email', 'profesion', 'mision', 'cursos'];


}
