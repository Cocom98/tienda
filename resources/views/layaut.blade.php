
<!DOCTYPE html>
<html>
<head>
	<title>Blog - @yield('Titulo')</title>
</head>
<body>
<h1>Abarrotes</h1>

<div class="contenido">
	<a href="{{ route('Home')}}" class="btn-btn">Home</a>
	<a href="{{ route('lacteos')}}" class="btn-btn">Lacteos</a>
	<a href="{{ route('limpieza')}}" class="btn-btn">Limpieza</a>
	<a href="{{ route('carnes')}}" class="btn-btn">Carnes Frias</a>
	<a href="{{ route('abarrotesgen')}}" class="btn-btn">Abarrotes en General</a>
	<a href="{{ route('embotellados')}}" class="btn-btn">Embotellados</a>
	



</div>

<div >
	@yield('seccion')

</div>


@yield('TP')
<footer>pie de pagina</footer>
</body>

</html>