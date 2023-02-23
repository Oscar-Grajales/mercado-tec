<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>MercadoTec</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="/css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="/css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="/css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="/css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="/css/style.css"/>

 		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 		<!--[if lt IE 9]>
 		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container bienvenido">
					<i class="fa fa-id-badge"></i> Bienvenido
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="{{asset('img/logo.png')}}" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form action="/buscar-producto" method="POST">
									<select class="input-select" name="categoria">
										<option value="0">Todas las categorías</option>
                                        @foreach($categorias as $categoria)
										    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                        @endforeach

									</select>
									<input class="input" name="busqueda" placeholder="Nombre de producto">
									<button class="search-btn">Buscar</button>
                                    @csrf
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3">
							<div class="header-ctn">
									<div>
										<a href="/login">
											<i class="fa fa-sign-in"></i>
											<span>Iniciar sesión</span>
										</a>	
									</div>
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li><a href="/">Inicio</a></li>
						<li><a href="/obtener-categorias">Categorías</a></li>
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
					<div class="col-md-2  col-md-pull-5">
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
							<div class="add-to-cart">
								<div class="qty-label">
									Cant.
									<div class="input-number">
										<input type="number">
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								</div>
								<a href="/login"><button class="add-to-cart-btn"><i class="fa fa-shopping-bag"></i>Comprar</button></a>
							</div>
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
		
		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-4 col-xs-6 text-center">
							<div class="footer">
								<h3 class="footer-title">Contáctanos</h3>
								<p>MercadoTec es un protyecto hecho en Laravel para la materia Programación Web con Frameworks</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-phone"></i>961-123-4567</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
								</ul>
							</div>
						</div>					
						
						<div class="col-md-4 col-xs-6 text-center">
							<div class="footer">
								<h3 class="footer-title">Información</h3>
								<ul class="footer-links">
									<li><a href="#">Acerca de nosotros</a></li>
									<li><a href="#">Política de Privacidad</a></li>
									<li><a href="#">Términos y Condiciones</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-4 col-xs-6 text-center">
							<div class="footer">
								<h3 class="footer-title">Servicio</h3>
								<ul class="footer-links">
									<li><a href="#">Mi cuenta</a></li>
									<li><a href="#">Ayuda</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>


						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="/js/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/slick.min.js"></script>
		<script src="/js/nouislider.min.js"></script>
		<script src="/js/jquery.zoom.min.js"></script>
		<script src="/js/main.js"></script>

	</body>
</html>
