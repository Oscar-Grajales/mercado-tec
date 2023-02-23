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
						<h3 class="breadcrumb-header">Producto</h3>
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
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							@foreach($fotos as $foto)
							<div class="product-preview">
								<img src="{{asset($foto->dato_foto)}}" alt="" style="max-height: 400px">
							</div>
							@endforeach
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2 col-md-pull-5">
						<div id="product-imgs">
							@foreach($fotos as $foto)
							<div class="product-preview">
								<img src="{{asset($foto->dato_foto)}}" alt="">
							</div>
							@endforeach
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->

					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name">{{$producto->nombre}}</h2>							
							<div>
								<h3 class="product-price">${{$producto->precio}}</h3>
								<span class="product-available">Disponible</span>
							</div>
							<p>{{$producto->descripcion}}</p>
							<br>
							<form action="/formulario-compra/{{$producto->id}}" method="POST">
								@csrf
								@method('PUT')
								<div class="add-to-cart">
									<div class="qty-label">
										Cant.
										<div class="input-number">
											<input type="number" name="cantidad">
										</div>
									</div>
									<button type="submit" class="add-to-cart-btn"><i class="fa fa-shopping-bag"></i>Comprar</button>
								</div>
							</form>

						</div>
						<div>
							<br>
							<form action="/comentar-producto/{{$producto->id}}" method="POST">
								@csrf
								@method('PUT')
								<h5>¿Tienes alguna duda?, haz un comentario</h5>
								<textarea name="comentario" id="" cols="55" rows="6"></textarea>
								<button type="submit" class="primary-btn">Enviar</button>
							</form>
						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<!-- tab3  -->
						<div id="tab3" class="tab-pane fade in">
							<div class="row">
								<!-- Reviews -->
								<div class="col-md-12">
									<div>
										<br><br>
										<h2>Comentarios</h2>
										<br>
									</div>
									<div id="reviews">
										<ul class="reviews">
										@foreach($comentariosUsuarios as $comentarioUsuario)
											<li>
												<div>
													<div class="review-heading">
														<h5 class="name">{{$comentarioUsuario['usuario']->nombre}}</h5>
														<p class="date">{{$comentarioUsuario['comentario']->fecha_publicacion}}</p>
													</div>
													<div class="review-body">
														<p>{{$comentarioUsuario['comentario']->contenido}}</p>
													</div>
													@if(strlen($comentarioUsuario['comentario']->respuesta) != 0)
													<div>										
														<h5>Vendedor</h5>
														<p>{{$comentarioUsuario['comentario']->respuesta}}</p>
													</div>
													@endif
												</div>
											</li>
										@endforeach
										</ul>
									</div>
								</div>
								<!-- /Reviews -->
							</div>
						</div>
						<!-- /tab3  -->
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

@include('footer')