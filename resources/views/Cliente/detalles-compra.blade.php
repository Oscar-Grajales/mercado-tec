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
						<li class="active"><a href="/mis-compras">Mis compras</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
	<!-- /NAVIGATION -->

<div class="form-neon">
<h3 class="text-center"><br>Detalles de la compra</h3> 
<hr>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-6">
            <figure>
                <img class="img-fluid img-product-info" src="{{asset($foto->dato_foto)}}" alt="" style="max-width: 400px; max-height: 500px;">
            </figure>
        </div>
        <div class="col-md-5">
            <div class="product-details">
                <h2 class="product-name">{{$producto->nombre}}</h2>                
                <div>
                    <h3 class="product-price">${{$producto->precio}}</h3>
                </div>
                <p>{{$producto->descripcion}}</p>
                <div class="qty-label">
                    <h4>Cantidad: {{$compra->piezas}}</h4>
                </div>
                <div class="qty-label">
                    <hr>
                    <h3>Total: ${{$producto->precio * $compra->piezas}}</h3>
                </div>
                <br>                
                <h5>Estado de la compra:</h5>
                @if($compra->esta_validada)
                    <div class="insignia insignia-success"><h5>Validada</h5></div>
                @else
                    <div class="insignia insignia-danger"><h5>No validada</h5></div>
                @endif

                @if(is_null($compra->calificacion))
                @if($compra->esta_validada)
                <h5 class="text-center"><br>Califica tu experiencia de compra</h5> 						
                <form action="/calificar-compra/{{$compra->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <p class="clasificacion">
                    <input id="radio1" type="radio" name="estrellas" value="5">
                    <label for="radio1">★</label>
                    <input id="radio2" type="radio" name="estrellas" value="4">
                    <label for="radio2">★</label>
                    <input id="radio3" type="radio" name="estrellas" value="3">
                    <label for="radio3">★</label>
                    <input id="radio4" type="radio" name="estrellas" value="2">
                    <label for="radio4">★</label>
                    <input id="radio5" type="radio" name="estrellas" value="1">
                    <label for="radio5">★</label>
                    <br>
                    <button type="submit" class="btn btn-danger">Enviar</button>
                    </p>                    
                </form>
                @endif
                @else
                <br>
                <br>
                <h4>Calificaste esta compra con:&nbsp; {{$compra->calificacion}}</h4>
                <br>
                <br>
                @endif
            </div>
        </div>
        @if($compra->esta_validada == 0 && is_null($compra->voucher))
        <div class="col-12 col-md-6">
            <form action="/subir-voucher/{{$compra->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <fieldset>
                    <br>
                    <br>
                    <br>
                    <H4><i class="fa fa-image"></i> &nbsp; SUBIR COMPROBANTE DE PAGO</H4>
                    <br>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="file" class="form-control-file" name="producto_foto" id="producto_foto" accept=".jpg, .png, .jpeg">
                                    <br>
                                    <p>Tipos de archivos permitidos: JPG, JPEG, PNG. Tamaño máximo 3MB.</p>
                                </div>
                                <p class="text-center" style="margin-top: 40px;">
                                    <button type="submit" class="btn btn-raised btn-success btn-sm"><i class="fa fa-upload"></i> &nbsp; SUBIR</button>
                                </p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                </fieldset>
            </form>
        </div>  
        @endif      
    </div>
</div>
</div>
@include('footer')