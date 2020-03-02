@extends('layaut')


@section('Titulo','Carnes')
@section('TP')
	<h1>Carnes</h1>
	<p>Bienvenidos a la pagina de abarrores "Mili"</p>
	<br>

	@foreach ($carnes as $nom)
<li>{{$nom['nombre']}}</li>
@endforeach
	@endsection