@include('Supervisor.lateral')

<!-----INICIO DEL CONTENIDO PRINCIPAL------->

<section class="bg-light py-3">
    <div id="content" class="bg-light w-100">
        <section class="bg-light py-3">
            <br>
            <div class="container">
            <h3 class="text-left text-uppercase">
                <i class="fa fa-list-alt"></i> &nbsp; Kardex
            </h3>
            <hr>
                <div class="container-fluid">                      
                    <div class="form-neon">
                    <h3 class="text-center">{{$producto->nombre}}</h3>
                    <br>
                    <fieldset>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-4 align-self-center">
                                    <figure>
                                        <img class="img-fluid img-product-info" src="{{asset($foto->dato_foto)}}" alt="Producto">                        
                                    </figure>
                                </div>
                                <div class="col-12 col-md-8">
                                    <legend class="text-left"><i class="fas fa-box"></i> &nbsp; Información del producto</legend>
                                    <br>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="form-group bmd-form-group is-filled">
                                                    <label for="producto_stock_total" class="bmd-label-floating">Stock o existencias</label>
                                                    <input type="text" value="{{$producto->piezas}}" class="form-control" id="producto_stock_total" readonly="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="form-group bmd-form-group is-filled">
                                                    <label for="producto_stock_total" class="bmd-label-floating">Vendidos</label>
                                                    <input type="text" value="{{$vendidos}}" class="form-control" id="producto_stock_total" readonly="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="form-group bmd-form-group is-filled">
                                                    <label for="producto_descuento" class="bmd-label-floating">Interesados </label>
                                                    <input type="text" value="{{$interesados}}" class="form-control" id="producto_descuento" readonly="">
                                                </div>
                                            </div> 
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="form-group bmd-form-group is-filled">
                                                    <label for="producto_precio_venta" class="bmd-label-floating">Precio de venta</label>
                                                    <input type="text" value="{{$producto->precio}}" class="form-control" id="producto_precio_venta" readonly="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="form-group bmd-form-group is-filled">
                                                    <label for="producto_descuento" class="bmd-label-floating">Porcentaje (%) </label>
                                                    <input type="text" value="{{$producto->porcentaje}}" class="form-control" id="producto_descuento" readonly="">
                                                </div>
                                            </div>   
                                            
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="form-group bmd-form-group is-filled">
                                                    <label for="producto_descuento" class="bmd-label-floating">Ganancia</label>
                                                    <input type="text" value="{{$producto->precio * ($producto->porcentaje/100)}}" class="form-control" id="producto_descuento" readonly="">
                                                </div>
                                            </div> 
                                                                                 
                                            <div class="col-12 col-md-6">
                                                <div class="form-group bmd-form-group is-filled">
                                                    <label for="producto_vencimiento" class="bmd-label-floating">Fecha de publicación</label>
                                                        <input type="text" value="{{$producto->fecha_publicacion}}" class="form-control" id="producto_vencimiento" readonly="">
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group bmd-form-group is-filled">
                                        <label for="producto_categoria" class="bmd-label-floating">Categoría</label>
                                        @foreach($categorias as $categoria)
                                        @if($categoria->id == $producto->categoria_id)                                    
                                        <input type="text" value="{{$categoria->nombre}}" class="form-control" id="producto_categoria" readonly="">
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group bmd-form-group is-filled">
                                        <label for="producto_estado" class="bmd-label-floating">Estado del producto</label>
                                        @if($producto->esta_consignado)
                                        <input type="text" value="Consignado" class="form-control" id="producto_estado" readonly="">
                                        @else
                                        <input type="text" value="No consignado" class="form-control" id="producto_estado" readonly="">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
                </div>
                <br><br><br><br>
            </div>         
            <br>
            <br>
        </section>    
        <br>
        <br>
    </div>
</section>
<!--FIN del cont principal-->
@include('Supervisor.inferior')