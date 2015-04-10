@extends('app')

@section('content')


                    <h1 class="page-heading">ENVIO DE NOTAS</h1>


                    {!! Form::open(['action' => 'NotasController@store']) !!}

                    <div class="form-group">

                        {!! Form::textarea('template', $template, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Confirmar',
                        array('class'=>'btn btn-primary')) !!}
                    </div>

                    {!! Form::close() !!}

    @endsection