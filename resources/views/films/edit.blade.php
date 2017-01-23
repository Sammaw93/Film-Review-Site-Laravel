@extends('layouts.layout')
@section('title')

Edit {{$film->filmtitle}}
@stop


@section('body')

{!!Form::model($film, [

	'method' => 'patch',

	'route' => ['film.update', $film->id]

])!!}

{!!Form::label('filmtitle', 'filmtitle:')!!}
{!!Form::text('filmtitle', $film->filmtitle, ['placeholder' => "Give a film name"])!!}

{!!Form::label('filmdescription', 'filmdescription:')!!}
{!!Form::text('filmdescription', $film->filmdescription, ['placeholder' => "Give a film description"])!!}

{!!Form::label('filmdirector', 'filmdirector:')!!}
{!!Form::text('filmdirector', $film->filmdirector, ['placeholder' => "Give a film director"])!!}

{!!Form::label('filmrating', 'filmrating:')!!}
{!!Form::text('filmrating', $film->filmrating, ['placeholder' => "Give a film rating"])!!}


{!!Form::submit('Edit')!!}

{!!Form::close()!!}

@stop


