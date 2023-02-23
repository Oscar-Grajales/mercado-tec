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
						<h3 class="breadcrumb-header">Productos consignados encontrados</h3>
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
                    @if($listaProductos->count() == 0)
                        <h2>No hay resultados</h2>
                    @else
                    @foreach($listaProductos as $producto)
						<div class="caja-producto">
							<h3>{{$producto->nombre}}</h2>
							<h4 class="producto-precio">${{$producto->precio}}</h4>
                            <a href="/ver-consignado/{{$producto->id}}" class="cta-btn">
                                <h4>Ver <i class="fa fa-arrow-circle-right"></h4></i>
                            </a>
						</div>
                    @endforeach
                    @endif
					
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

@include('footer')