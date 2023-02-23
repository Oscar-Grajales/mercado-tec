@include('Supervisor.lateral')

<!-----INICIO DEL CONTENIDO PRINCIPAL------->
<div id="content" class="bg-light w-100">
    <section class="bg-light py-3">
        <br>
        <div class="container">
        <h3 class="text-left text-uppercase">
            <i class="fa fa-cubes"></i> &nbsp; Productos
        </h3>
        <br>
		<ul class="list-unstyled" style="padding: 5px;">
			<div class="product">
				<li class="media media-product">
					<div class="col-md-3 col-xs-6">
								<div class="product-img">
									<img src="./img/product01.png" alt="">
								</div>
					</div>
					<div class="media-body product-media-body">
						<br>
						<p class="text-uppercase text-center media-product-title"><strong>Laptop</strong></p>
						<br>
						<div class="container-fluid">
							<div class="row">
								<div class="col-6 col-md-6 col-lg-6 col-product"><i class="fa fa-money"></i> <strong>Precio:</strong> $29.00 USD </div>
								<div class="col-6 col-md-6 col-lg-6 col-product"><i class="fa fa-check-square"></i> <strong>Estado:</strong> Habilitado</div>
								<div class="col-6 col-md-6 col-lg-6 col-product"><br><i class="fa fa-archive"></i> <strong>Disponibles:</strong> 934</div>
								<div class="col-6 col-md-6 col-lg-6 col-product"><br><i class="fa fa-opencart"></i> <strong>Vendidos:</strong> 770</div>
								<div class="col-6 col-md-6 col-lg-6 col-product"><br><br><i class="fa fa-calendar"></i> <strong>Vencimiento:</strong> <span class="badge badge-warning">Vencido</span></div>
								<div class="col-6 col-md-6 col-lg-6 col-product"><br>
								<a href="kardex.php" class="btn btn-primary "><i class="fa fa-file-text"></i> &nbsp; Ver Kardex</a>
								</div>
							</div>
						</div>
					</div>
				</li>
				<br>
			</div>
		</ul>
		</div>
		<br>
        <br>
    </section>
    <br>
    <br>
</div>
<!--FIN del cont principal-->

@include('Supervisor.inferior')