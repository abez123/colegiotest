<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model {

/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'alumnos';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nombre', 'apellido_p', 'apellido_m', 'sexo', 'direccion', 'colonia', 'cp', 'telefonos', 'email', 'fecha_nacimiento', 'historial_medico', 'id_padre', 'id_madre'];

    public static function lists($string, $string1)
    {
    }

    /**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
}
