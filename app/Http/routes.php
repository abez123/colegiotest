<?php



Route::get('/', 'PagesController@home');


//*routes for students

Route::resource('alumnos', 'AlumnosController');
Route::resource('profesores', 'ProfesoresController');
Route::resource('admins', 'AdminsController');
Route::resource('padres', 'PadresController');
Route::resource('alumnosporgrupo', 'AlumnosPorGrupoController');


// Notas
Route::get('notas/create/confirmar', 'NotasController@confirm');
Route::resource('notas', 'NotasController');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
