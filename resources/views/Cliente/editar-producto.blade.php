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
						<li class="active"><a href="/mis-productos">Mis productos</a></li>
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
						<h3 class="breadcrumb-header">Editar producto</h3>
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
                                <form action="/editar-producto/{{$producto->id}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <legend><i class="fa fa-list"></i> &nbsp; Información del producto</legend>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12 col-md-4">
                                                <div class="form-group bmd-form-group">
                                                    <label for="nombre" class="bmd-label-floating">Nombre &nbsp; <i class="fa fa-archive"></i> &nbsp;</label>
                                                    <input type="text" class="form-control" name="nombre" value="{{$producto->nombre}}">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="form-group bmd-form-group">
                                                    <label for="piezas" class="bmd-label-floating">Piezas &nbsp; <i class="fa fa-cubes"></i> &nbsp;</label>
                                                    <input type="text" class="form-control" name="piezas" value="{{$producto->piezas}}">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="form-group bmd-form-group">
                                                    <label for="descripcion" class="bmd-label-floating">Descripción &nbsp; <i class="fa fa-list-alt"></i> &nbsp;</label>
                                                    <input type="text" class="form-control" name="descripcion" value="{{$producto->descripcion}}">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="form-group bmd-form-group">
                                                    <label for="precio" class="bmd-label-floating">Precio &nbsp; <i class="fa fa-usd"></i> &nbsp;</label>
                                                    <input type="text" class="form-control" name="precio" value="{{$producto->precio}}">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="form-group bmd-form-group is-filled">
                                                    <label for="categoria" class="bmd-label-floating">Categoria &nbsp; <i class="fa fa-th-large"></i> &nbsp;</label>  
                                                    <select class="form-control" name="categoria" id="usuario_cargo">
                                                        @foreach($categorias as $categoria)
                                                            @if($categoria->id == $producto->categoria_id)
                                                            <option value="{{$categoria->id}}" selected>{{$categoria->nombre}}</option>
                                                            @else
                                                            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                                            @endif           
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>                           
                                        </div>
                                    </div>                
                                    <p class="text-center" style="margin-top: 40px;">
                                        <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fa fa-eraser"></i> &nbsp; LIMPIAR</button>
                                        &nbsp; &nbsp;
                                        <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="fa fa-save"></i> &nbsp; GUARDAR</button>
                                    </p>
                                </form>
                            </div>
                            <br>
                            <br>
                        </section>
                        <section>
                            <form action="/guardar-foto/{{$producto->id}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <h5>Agregar más fotos:</h5>
                                <input type="file" class="form-control-file" name="producto_foto" id="producto_foto" accept=".jpg, .png, .jpeg">
                                <p><br>Tipos de archivos permitidos: JPG, JPEG, PNG. Tamaño máximo 3MB.</p>
                                <button type="submit" class="btn btn-raised btn-success btn-sm"><i class="fa fa-upload"></i> &nbsp; SUBIR</button>
                            </form>
                            <br>
                            <br>
                            <h4>Fotos del producto:</h4>
                            <div class="row">
                                @foreach($fotos as $foto)
                                    <div class="col-12 col-md-4 text-center">
                                        <img class="img-fluid img-thumbnail" src="{{asset($foto->dato_foto)}}" alt="" style="max-height: 400px">
                                        <br>
                                        <br>
                                        <form action="/eliminar-foto/{{$foto->id}}" method="POST" class="text-center">
                                            @csrf
                                            @method('DELETE')                                            
                                            <button type="submit" class="btn btn-raised btn-danger btn-sm"><i class="fa fa-trash"></i> &nbsp; Eliminar</button>
                                        </form>
                                    </div>
                                @endforeach
                            </div>
                        </section>
                    </section>
                </div>
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		
@include('footer')