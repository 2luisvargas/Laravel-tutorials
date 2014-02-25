<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tienda</title>

	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/jumbotron-narrow.css') }}

</head>
<body>
	
	<div class="container">
		<div class="header">
            
            	<ul class="nav nav-pills pull-right">
                	<li>{{HTML::link('/','Inicio')}}</li>
                    <li>{{HTML::link('vendedor','Vendedores')}}</li>
                    <li>{{HTML::link('producto','Productos')}}</li>
                   </ul>
			<h3 class="text-muted">Tienda</h3>
		</div>

		@yield('contenido')

		
		<div class="footer">
			<p>&copy; Codehero 2013</p>
		</div>

	</div>

	<!-- Incluimos la librearia jquery-->
     <script src="https://code.jquery.com/jquery.js"></script>
     <!-- Incluimos el JS de boostrap con el helper de Laravel-->
     {{HTML::script('js/bootstrap.min.js')}}

</body>
</html>