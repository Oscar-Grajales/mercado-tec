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
							<div class="add-to-cart">
								<form action="/consignar-producto/{{$producto->id}}" method="POST">
									@csrf
									@method('PUT')
									<div class="qty-label">
										Porcentaje
										<div class="input-number">
											<input type="number" name="porcentaje">
										</div>
									</div>
									<button class="add-to-cart-btn" type="submit"><i class="fa fa-check-square-o"></i>Consignar</button>
								</form>
								<br>							
								@if(strlen($producto->razon_consigna) != 0)
									<br>
									<div>
										<h5>Incidencia anterior:</h5>
										<p>{{$producto->razon_consigna}}</p>
									</div>
								@endif
								<br>
								<form action="/no-consignar-producto/{{$producto->id}}" method="POST">
									@csrf
									@method('PUT')
									<p>Si no desea consignar el producto, escriba la razón:</p>
									<textarea name="razon_consigna" rows="10" cols="50"></textarea>
									<button type="submit" class="add-to-cart-btn"><i class="fa fa-ban"></i>No Consignar</button>
								</form>
							</div>						
						</div>
					</div>
					<!-- /Product details -->
					
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

@include('footer')