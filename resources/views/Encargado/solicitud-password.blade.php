@include('header')

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li><a href="/inicio-encargado">Productos No Consignados</a></li>
						<li><a href="/encargado-consignados">Productos Consignados</a></li>
						<li class="active"><a href="/restablecer-password-encargado">Restablecer Contraseña</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Restablecer Constraseñas</h3>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->
		
		<div class="product-details">
			
		<div class="tabla-de-encargado">
			<div class="encabezado-password">
				<p><strong>ID</strong></p>
			  	<p><strong>NOMBRE</strong></p>
			  	<p><strong>EMAIL</strong></p>
			  	<p><strong>ACEPTAR</strong></p>
			</div>
			@foreach($usuarios as $usuario)
			<div class="fila-tabla-encargado-password">
				<p>{{$usuario->id}}</p>
			  	<p>{{$usuario->nombre}}</p>
			  	<p>{{$usuario->email}}</p>
				<div>
					<a href="/restablecer-password/{{$usuario->id}}">
						<button class="btn btn-success"><i class="fa fa-check"></i></button>
					</a>
				</div>
			</div>
			@endforeach					
		</div>
		</div>

@include('footer')