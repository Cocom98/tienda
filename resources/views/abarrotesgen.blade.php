@extends('layaut')


@section('Titulo','Abarrotesgen')
@section('TP')
	<h1>Abarrotes en General</h1>
	<p>Bienvenidos a la pagina de abarrores "Mili"</p>
	<br>

	@foreach ($abarrotesgen as $nom)
<li>{{$nom['nombre']}}</li>
@endforeach
	@endsection