@extends('layouts.master')
@section('title','plantilla')
@section('header')
<center><h1>Marisol Gómez Chacón</h1></center>
<center><img src="images/unnamed.png" alt=""></center>

@parent
@stop
@section('navbar')
@parent 
@stop

<head link href="estilo.css" type="text/css">
@section('principal')
<form action="{{action('Formulario@validarLogin')}}" method="post">
{{csrf_field()}}
<label for="user">Usuario</label>
<input type="text" name="user"/>
<br>
<label for="password">Password</label>
<input type="password" name="password"/>
<br>
<label for="key">Key</label>
<input type="text" name="key"/>
<br>
<input type="submmit" value="submit"/>
</form>
@parent
@stop
</head>
