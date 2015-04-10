@extends('app')


@section('content')

	<h1 class="page-heading">ENVIO DE NOTAS</h1>

		

				{!! Form::open(['method' => 'GET', 'action' => 'NotasController@confirm']) !!}

				<div class="form-group">
				    {!! Form::label('Titulo:') !!}
				    {!! Form::text('titulo', null,
				        array('required',
				              'class'=>'form-control',
				              'placeholder'=>'Escribir el titulo')) !!}
				</div>

				<div class="form-group">
				    {!! Form::label('descripcion','Descripción') !!}
				    {!! Form::textarea('descripcion', null,
				        array('required',
				              'class'=>'form-control',
				              'placeholder'=>'Escribir la nota')) !!}
				</div>

                <div class="form-group">
                    {!! Form::label('tipomemo', 'Tipo de Nota') !!}
                    {!! Form::select('tipomemo',array
                                                    ('memo' => 'Memorandum',
                                                    'aviso' => 'Aviso',
                                                    'comportamiento' => 'Comportamiento',
                                                    'feliz' => 'Felicitación',
                                                    'incumple' => 'Incumplimiento',
                                                    'junta' => 'Junta'),'',
                    ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('archivo', 'Enviar un Archivo') !!}
                    {!! Form::file('archivo', ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('nombre', 'Escoger Alumno',array('id' => 'id_usuario')) !!}
                    {!! Form::select('nombre', $alumno, null,['class'=>'form-control']) !!}
                </div>


				<div class="form-group">
				    {!! Form::submit('Enviar',
                    array('class'=>'btn btn-primary')) !!}
				</div>
				{!! Form::close() !!}


    @include ('errors.list')
@endsection