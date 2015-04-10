<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alumnos', function(Blueprint $table)
		{
			$table->increments('id_usuario', 4);
			$table->string('nombre', 35);
			$table->string('apellido_p', 25);
			$table->string('apellido_m', 25);
			$table->char('sexo',1);
			$table->string('direccion', 70);
			$table->string('colonia',50);
			$table->string('cp', 5);
			$table->string('telefonos', 35);
			$table->string('email', 70);
			$table->date('fecha_nacimiento');
			$table->text('historial_medico');
			$table->string('id_padre', 4);
			$table->string('id_madre', 4);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alumnos');
	}

}
