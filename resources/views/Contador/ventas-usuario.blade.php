@include('Contador.header-contador')

		<!-- NAVIGATION -->
		<nav id="navigation">
            <!-- container -->
            <div class="container">
                <!-- responsive-nav -->
                <div id="responsive-nav">
                    <!-- NAV -->
                    <ul class="main-nav nav navbar-nav">
                        <li><a href="/inicio-contador">Pagos</a></li>
                        <li><a href="/compras-contador">Compras</a></li>
                        <li><a href="/vendedores-contador">Vendedores</a></li>                
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
						<h3 class="breadcrumb-header">Detalle del vendedor</h3>
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
                <div id="content" class="bg-grey w-100">
                    <section class="bg-light py-3">
                        <section class="bg-light py-3">                            
                            <div class="container-fluid">
                                <legend><i class="fa fa-briefcase"></i> &nbsp; Información del vendedor</legend>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <div class="form-group bmd-form-group">
                                                <label for="nombre" class="bmd-label-floating">Nombre &nbsp; <i class="fa fa-user"></i> &nbsp;</label>
                                                <input type="text" class="form-control" name="nombre" value="{{$vendedor->nombre}}">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-group bmd-form-group">
                                                <label for="email" class="bmd-label-floating">Correo &nbsp; <i class="fa fa-envelope"></i> &nbsp;</label>
                                                <input type="text" class="form-control" name="email" value="{{$vendedor->email}}">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-group bmd-form-group">
                                                <label for="fecha_alta" class="bmd-label-floating">Fecha de alta &nbsp; <i class="fa fa-calendar"></i> &nbsp;</label>
                                                <input type="text" class="form-control" name="fecha_alta" value="{{$vendedor->fecha_alta}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </section>  
                </div>
			</div>
			<!-- /container -->

            <div class="container">  
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="text-left text-uppercase"><br><br><i class="fa fa-file-text-o"></i> &nbsp; Ventas del vendedor</h3>
                        <br>

                        <form action="/crear-pago/{{$vendedor->id}}" method="POST">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-success"><i class="fa fa-money"></i>&nbsp; Nuevo pago</button>
                            <br>
                            <br>
                            <h5>Seleccione las ventas que desea incluir en el pago</h5>
                            <br>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-condensed" style="width:100%;">
                                    <thead class="text-center">
                                        <tr class="text-center roboto-medium">
                                            <th></th>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">PRODUCTO</th>
                                            <th class="text-center">MONTO</th>
                                        </tr>                    
                                    </thead>
                                    <tbody>
                                        @foreach($ventas as $venta)
                                        <tr class="text-center">
                                            <th class="text-center">
                                                <input type="checkbox" class="casilla" name="ventas[]" value="{{$venta['id']}}">
                                            </th>
                                            <th class="text-center">{{$venta['id']}}</th>
                                            <th class="text-center">{{$venta['producto']}}</th>
                                            <th class="text-center">${{$venta['monto']}}</th>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </form>

                        <br>
                        <br>             
                    </div>
                </div>
            </div>
            
		</div>
		<!-- /SECTION -->
		
@include('footer')