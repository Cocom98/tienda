@extends('layaut')


@section('Titulo','Limpieza')
@section('TP')
	<h1>Limpieza</h1>
	<p>Bienvenidos a la pagina de abarrores "Mili"</p>
	<br>

	@foreach ($limpieza as $nom)
<li>{{$nom['nombre']}}</li>
@endforeach
	@endsection