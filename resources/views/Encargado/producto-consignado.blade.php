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
						<li class="active"><a href="/encargado-consignados">Productos Consignados</a></li>
						<li><a href="/restablecer-password-encargado">Restablecer Contraseña</a></li>
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
						<h3 class="breadcrumb-header">Productos Consignados</h3>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->
		
		<div class="product-details">
			<div class="buscar-no-consignado">
				<div>
					<h4>Filtrar por categoría: </h4>
				</div>
						
				<div>			
					<div class="header-search">							
						<form action="/filtro-producto-consignado-encargado" method="POST">
							<select class="input-select" name="categoria">
								<option value="0">Todas las categorías</option>
								@foreach($categorias as $categoria)
									<option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
								@endforeach
							</select>
							<button class="search-btn">Buscar</button>
							@csrf
						</form>
					</div>
				</div>
			</div>
		<div class="tabla-de-encargado">
			<div class="encabezado">
			  <p><strong>Nombre</strong></p>
			  <p><strong>Piezas</strong></p>
			  <p><strong>Precio</strong></p>
			  <p><strong>Productos</strong></p>
			</div>
			@foreach($productos as $producto)
			<div class="fila-tabla-encargado">
				<p>{{$producto->nombre}}</p>
			  	<p>{{$producto->piezas}}</p>
			  	<p>${{$producto->precio}}</p>
				<div>
					<a href="/ver-consignado/{{$producto->id}}">
						<button class="ver-no-consignado-btn"><i class="fa fa-eye"></i>Ver producto</button>
					</a>
				</div>
			</div>
			@endforeach					
		</div>
		</div>

@include('footer')