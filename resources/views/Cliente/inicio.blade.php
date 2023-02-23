@include('header')

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="inicio-cliente">Inicio</a></li>
						<li><a href="obtener-categorias">Categorías</a></li>
						<li><a href="mis-productos">Mis productos</a></li>
						<li><a href="mis-compras">Mis compras</a></li>
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
						<h3 class="breadcrumb-header">Inicio</h3>
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
				<div class="row">
				
					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Nuevos Productos</h3>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										@foreach($productosDesc as $producto)
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{asset($producto['foto']->dato_foto)}}" class="img-responsive" style="width:auto !important; height:250px !important" alt="">
												<br>
												<br>
												<div class="product-label">
													<span class="new">NUEVO</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">{{$producto['categoria']}}</p>
												<h3 class="product-name"><a href="/ver-producto/{{$producto['producto']->id}}">{{$producto['producto']->nombre}}</a></h3>
												<h4 class="product-price">${{$producto['producto']->precio}}</h4>
												<div class="product-btns">
													<button class="quick-view"><a href="/ver-producto/{{$producto['producto']->id}}"><i class="fa fa-eye"></i><span class="tooltipp"> Ver </span></a></button>
												</div>
											</div>
										</div>
										<!-- /product -->
										@endforeach
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->	

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		
@include('footer')