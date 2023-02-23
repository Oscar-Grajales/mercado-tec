@include('Supervisor.lateral')
<!-----INICIO DEL CONTENIDO PRINCIPAL------->
<section class="bg-light py-3">
    <div class="container">
        <div class="container-fluid">
    <!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Resultados</h3>						
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

        <section id="content" class="bg-light py-2">
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
							<a href="/kardex-producto/{{$producto->id}}" class="cta-btn">
								<h4>Ver <i class="fa fa-arrow-circle-right"></h4></i>
							</a>
						</div>
                    @endforeach
                    @endif
					
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
		</div>
		<!-- /SECTION -->
        <br>
        <br>
</section>
</div>
</div>
</section>
@include('Supervisor.inferior')