@include('header')

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li><a href="/inicio-cliente">Inicio</a></li>
						<li><a href="/obtener-categorias">Categorías</a></li>
						<li class="active"><a href="/mis-productos">Mis productos</a></li>
						<li><a href="/mis-compras">Mis compras</a></li>
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
						<h3 class="breadcrumb-header">Mis Productos</h3>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">			
			<!-- container -->
				<div class="tabla-de-productos-vendedor">

					<a href="/formulario-crear-producto" class="btn btn-success">Crear producto</a>
					<div>
						<br>
					</div>
					
					<div class="fila-productos-vendedor fila-encabezado-vendedor">
					<p><strong>Id</strong></p>
					<p><strong>Nombre</strong></p>
					<p><strong>Piezas</strong></p>
					<p><strong>Estado</strong></p>
					<p><strong>Ver</strong></p>
					<p><strong>Editar</strong></p>
					<p><strong>Eliminar</strong></p>
					</div>
					@foreach($listaProductos as $producto)
					<div class="fila-productos-vendedor">
						<p>{{$producto->id}}</p>
						<p>{{$producto->nombre}}</p>
						<p>{{$producto->piezas}}</p>
						@if($producto->esta_consignado)
							<p>Consignado</p>
						@else
							<p>No consignado</p>
						@endif
						<div>
							<a href="/ver-producto-vendedor/{{$producto->id}}">
								<button class="btn btn-info"><i class="fa fa-eye"></i> Mostrar</button>
							</a>
						</div>
						<div>
							@if($producto->esta_consignado)
							<button class="btn btn-basic"><i class="fa fa-edit"></i> Editar</button>
							@else
								<a href="/formulario-editar-producto/{{$producto->id}}">
									<button class="btn btn-warning"><i class="fa fa-edit"></i> Editar</button>
								</a>
							@endif
						</div>
						<div>
							@if($producto->esta_consignado)
							<button class="btn btn-basic"><i class="fa fa-trash"></i> Eliminar</button>
							@else
							<form action="/eliminar-producto/{{$producto->id}}" method="POST">
								@csrf
								@method('DELETE')
								<button class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
							</form>
							@endif
						</div>
					</div>
					@endforeach					
				</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		
@include('footer')