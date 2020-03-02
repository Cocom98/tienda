@extends('layaut')


@section('Titulo','Lacteos')
@section('TP')
	<h1>Lacteos</h1>
	<p>Bienvenidos a la pagina de abarrores "Mili"</p>
	<br>

	@foreach ($lacteos as $nom)
<li>{{$nom['nombre']}}</li>
@endforeach
	@endsection