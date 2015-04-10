<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateAlumnoGrupoPivotTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alumno_grupo', function(Blueprint $table)
		{
			$table->integer('id_usuario')->unsigned()->index();
			$table->foreign('id_usuario')->references('id_usuario')->on('alumnos')->onDelete('cascade');
			$table->integer('id_grupo')->unsigned()->index();
			$table->foreign('id_grupo')->references('id_grupo')->on('grupos')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alumno_grupo');
	}

}
