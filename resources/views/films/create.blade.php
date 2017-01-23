@extends('layouts.layout')
@section('title')
Create new Film
@stop

<!--This is a basic HTML page which displays the form where you can create a new film which is then added to the films page and database -->
@section('body')

<br>

<br>

{!!Form::open(['route' => 'film.store'])!!}

{!!Form::label('filmtitle', 'Film Title:')!!}
{!!Form::text('filmtitle')!!}
<br>
<br>

{!!Form::label('filmdescription', 'Film Description:')!!}
{!!Form::text('filmdescription')!!}
<br>
<br>

{!!Form::label('filmdirector', 'Film Director:')!!}
{!!Form::text('filmdirector')!!}

<br>
<br>

{!!Form::label('filmrating', 'Film Rating:')!!}
{!!Form::text('filmrating')!!}
<br>
<br>



{!!Form::submit('Create Film')!!}



{!!Form::close()!!}


@stop