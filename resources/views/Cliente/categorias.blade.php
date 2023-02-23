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
						<li class="active"><a href="/obtener-categorias">Categorías</a></li>
						<li><a href="/mis-productos">Mis productos</a></li>
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
						<h3 class="breadcrumb-header">Categorías</h3>
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
			<div class="container">
				<!-- row -->
				<div class="cajas">
                    @foreach($categorias as $categoria)                    
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="caja-categoria">
							<h2>{{$categoria->nombre}}</h2>
							<a href="listar-productos-categoria/{{$categoria->id}}" class="cta-btn"><h4>Ver <i class="fa fa-arrow-circle-right"></h4></i></a>
						</div>
					</div>
					<!-- /shop -->                    
                    @endforeach
					
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		
@include('footer')