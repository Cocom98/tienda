@extends('layaut')


@section('Titulo','Embotellados')
@section('TP')
	<h1>Embotellados</h1>
	<p>Bienvenidos a la pagina de abarrores "Mili"</p>
	<br>

	@foreach ($embotellados as $nom)
<li>{{$nom['nombre']}}</li>
@endforeach
	@endsection