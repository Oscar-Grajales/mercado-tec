@include('Contador.header-contador')

<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li><a href="/inicio-contador">Pagos</a></li>
                <li class="active"><a href="/compras-contador">Compras</a></li>
                <li><a href="/vendedores-contador">Vendedores</a></li>                
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>

<!-----INICIO DEL CONTENIDO PRINCIPAL------->

<section class="bg-light py-3">
    <div id="content" class="bg-light w-100">
        <section class="bg-light py-3">
            <br>
            <div class="container">
            <h3 class="text-left text-uppercase">
                <i class="fa fa-list-alt"></i> &nbsp; Detalle de la compra
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
                                        @if(!is_null($compra->voucher))
                                        <img class="img-fluid img-product-info" src="{{asset($compra->voucher)}}" alt="Voucher" style="max-width: 360px">
                                        @elseif(!$compra->esta_validada)
                                            <h4>Aún no hay voucher</h4>
                                        @endif
                                    </figure>
                                </div>
                                <div class="col-12 col-md-8">
                                    <legend class="text-left"><i class="fas fa-box"></i> &nbsp; Información de la venta</legend>
                                    <br>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="form-group bmd-form-group is-filled">
                                                    <label for="producto_precio_venta" class="bmd-label-floating">Precio del producto</label>
                                                    <input type="text" value="${{$producto->precio}}" class="form-control" id="producto_precio_venta" readonly="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="form-group bmd-form-group is-filled">
                                                    <label for="producto_precio_venta" class="bmd-label-floating">Cantidad</label>
                                                    <input type="text" value="{{$compra->piezas}}" class="form-control" id="producto_precio_venta" readonly="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="form-group bmd-form-group is-filled">
                                                    <label for="producto_precio_venta" class="bmd-label-floating">Total</label>
                                                    <input type="text" value="${{$total}}" class="form-control" id="producto_precio_venta" readonly="">
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
                                                    <input type="text" value="${{$producto->precio * ($producto->porcentaje/100)}}" class="form-control" id="producto_descuento" readonly="">
                                                </div>
                                            </div> 
                                                                                 
                                            <div class="col-12 col-md-6">
                                                <div class="form-group bmd-form-group is-filled">
                                                    <label for="producto_vencimiento" class="bmd-label-floating">Fecha de la compra</label>
                                                        <input type="text" value="{{$compra->created_at}}" class="form-control" id="producto_vencimiento" readonly="">
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
                @if(!$compra->esta_validada)
                    <div class="text-center">
                        <a href="/validar-compra/{{$compra->id}}" class="btn btn-success">
                            <i class="fa fa-check"></i> &nbsp;
                            Validar compra
                        </a>
                    </div>
                @endif
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
@include('footer')