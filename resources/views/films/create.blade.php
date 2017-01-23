@extends('layouts.layout')
@section('title')
Create new Film
@stop

@section('body')



{!!Form::open(['route' => 'film.store'])!!}

{!!Form::label('filmtitle', 'FilmTitle')!!}
{!!Form::text('filmtitle')!!}


{!!Form::label('filmdescription', 'FilmDescription')!!}
{!!Form::text('filmdescription')!!}

{!!Form::label('filmdirector', 'FilmDirector')!!}
{!!Form::text('filmdirector')!!}

{!!Form::label('filmrating', 'FilmRating')!!}
{!!Form::text('filmrating')!!}




{!!Form::submit('Create Film')!!}



{!!Form::close()!!}


@stop