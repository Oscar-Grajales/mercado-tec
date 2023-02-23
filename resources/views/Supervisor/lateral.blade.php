<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/style-dashboard.css">
    	<!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="/css/style.css"/>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">    
	  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- Slick -->
	  <link type="text/css" rel="stylesheet" href="/css/slick.css"/>
	  <link type="text/css" rel="stylesheet" href="/css/slick-theme.css"/>

	<!-- nouislider -->
	  <link type="text/css" rel="stylesheet" href="/css/nouislider.min.css"/>

	<!-- Font Awesome Icon -->
	  <link rel="stylesheet" href="/css/font-awesome.min.css">
    
  <title>MercadoTec - Dashboard</title>
</head>

<body>
    <div class="d-flex" id="content-wrapper">
        <!-- Sidebar -->
        <div id="sidebar-container" class="bg-primary">
            <div class="logo">
              <a href="index.html" class="logo">
                <img src="/img/logo.png" alt="">
              </a>
            </div>            
            <div class="container">
                <a href="/inicio-supervisor" class="d-block text-light p-3 border-0"><i class="icon ion-md-stats lead mr-2"></i>
                    Tablero</a>
                <a href="/crud-usuarios" class="d-block text-light p-3 border-0"><i class="icon ion-md-people lead mr-2"></i>
                    Usuarios</a>
                <a href="/crud-categorias" class="d-block text-light p-3 border-0"><i class="icon ion-md-apps lead mr-2"></i>
                    Categorias</a>              
            </div>          
        </div>
        <!-- Fin sidebar -->
        <div class="w-100">
        <header>

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container text-center">
					<!-- row -->
					<div class="caja-buscar" >

					<!-- SEARCH BAR -->
							<div class="header-search">								
								<form action="/buscar-producto" method="POST">
									<div class="form-buscar">
									<select class="input-select" name="categoria">
										<option value="0">Todas las categorías</option>
                                        @foreach($categorias as $categoria)
										    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                        @endforeach

									</select>
									<input class="input-buscar" name="busqueda" placeholder="Nombre de producto">
									<button class="search-btn">Buscar</button>
                                    @csrf
								</div>
								</form>
							</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
							<div class="header-ctn">
									<div>
										<a href="/cerrar-sesion">
											<i class="fa fa-sign-out"></i>
											<span>Cerrar sesión</span>
										</a>	
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

    
        