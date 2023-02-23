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
						<li><a href="/mis-productos">Mis productos</a></li>
						<li class="active"><a href="/mis-compras">Mis compras</a></li>
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
				<div class="tabla-de-compras">
					<div class="fila-compras fila-encabezado-compra">
					<p><strong>Id</strong></p>
					<p><strong>Producto</strong></p>
					<p><strong>Cantidad</strong></p>
					<p><strong>Validado</strong></p>
					<p><strong>Ver</strong></p>
					</div>
					@foreach($compraProducto as $compra)
					<div class="fila-compras">
						<p>{{$compra['compra']->id}}</p>
						<p>{{$compra['producto']->nombre}}</p>
						<p>{{$compra['compra']->piezas}}</p>
                        @if($compra['compra']->esta_validada)
						    <p>Sí</p>
                        @else
                            <p>No</p>
                        @endif
						<div>
							<a href="/ver-compra/{{$compra['compra']->id}}">
								<button class="btn btn-info"><i class="fa fa-eye"></i> Mostrar</button>
							</a>
						</div>
					</div>
					@endforeach					
				</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		
@include('footer')