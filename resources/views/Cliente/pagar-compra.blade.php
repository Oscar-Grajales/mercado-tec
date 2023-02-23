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

<div id="breadcrumb" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<h3 class="breadcrumb-header">Realizar compra</h3>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>

<div class="section">
	<!-- container -->
	<div class="container center">
		<!-- row -->
		<div class="row">

			<!-- Order Details -->
			<div class="col-md-6 col-md-offset-3 order-details">
				<div class="section-title text-center">
					<h3 class="title">Tu pedido</h3>
					<hr>
				</div>
				<div class="order-summary">
					<div class="order-col">
						<div><h3>PRODUCTO</h3></div>
					</div>
					<div class="order-products">
						<div class="order-col">
							<div>
								{{$producto->nombre}}
							</div>
							<div>
								${{$producto->precio}}
							</div>
						</div>
					</div>
					<div class="order-col">
						<div><h4>Cantidad:</h4></div>
						<div><h3>{{$cantidad}}</h3></div>
					</div>
					<div class="order-col">
						<div><strong>TOTAL</strong></div>
						<div><strong class="order-total">${{$producto->precio * $cantidad}}</strong></div>
					</div>
				</div>
				
				<div class="row">
					<a href="/compra-en-linea/{{$producto->id}}/{{$cantidad}}" class="col-md-5 primary-btn order-submit">Compra en línea</a>
					<span class="col-md-2"></span>
					<a href="/compra-por-banco/{{$producto->id}}/{{$cantidad}}" class="col-md-5 primary-btn order-submit">Compra por banco</a>
				</div>
			</div>
			<!-- /Order Details -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>

@include('footer')

