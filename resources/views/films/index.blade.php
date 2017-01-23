<!--This page is used to set the display of the database-->

@extends('layouts.layout')
@section('title')
All Films

@stop



@section('body')
<br>
<br>

To view specific film details enter the film id after the URL example: http://127.0.0.1:8000/film/16

<br>
<br>

<a href="film/create">Create Film</a>

<br>
<br>

  @foreach($films as $film)


 <table border="1">
  <tr>
    <th>Film ID:{{$film->id}}</h1></th>
    <th>film Title:{{$film->filmtitle}}</th>
    <th>Film Description:{{$film->filmdescription}}</th>
    <th>film Director:{{$film->filmdirector}}</th>
    <th>film Rating:{{$film->filmrating}}</th>
    <br>

    </table>
@endforeach
@stop
