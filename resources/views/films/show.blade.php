@extends('layouts.layout')
@section('title')
{{$film->filmtitle}}
@stop


@section('body')



<h1>{{$film->filmtitle}}</h1>
<h2>{{$film->filmdescription}}</h2>
<h3>{{$film->filmdirector}}</h3>
<h4>{{$film->filmrating}}</h4>


<a href="#">Edit</a>  



@stop


