<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministradoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('administradores', function(Blueprint $table)
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
			$table->string('profesion', 25);
			$table->text('mision');
			$table->text('cursos');
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
		Schema::drop('administradores');
	}

}


  

 

  
   

  