<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupos extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'grupos';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nivel', 'grado', 'grupo'];

	

}
