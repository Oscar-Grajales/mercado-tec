@include('Contador.header-contador')

<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li class="active"><a href="/inicio-contador">Pagos</a></li>
                <li><a href="/compras-contador">Compras</a></li>
                <li><a href="/vendedores-contador">Vendedores</a></li>                
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>

<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <h3 class="breadcrumb-header">Detalles de transacción</h3>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- SECTION -->
<div id="imprimible" class="section">
    <!-- container -->
    <div class="container">
        <div id="content" class="bg-grey w-100">
            <section class="bg-light py-3">
                <section class="bg-light py-3">                            
                    <div class="container-fluid">
                        <legend><i class="fa fa-briefcase"></i> &nbsp; Información General</legend><br>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="form-group bmd-form-group">
                                        <label for="nombre" class="bmd-label-floating">Nombre &nbsp; <i class="fa fa-user"></i> &nbsp;</label>
                                        <br><input type="text" class="form-control" name="nombre" value="{{$vendedor->nombre}}">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group bmd-form-group">
                                        <label for="email" class="bmd-label-floating">Correo &nbsp; <i class="fa fa-envelope"></i> &nbsp;</label>
                                        <br><input type="text" class="form-control" name="email" value="{{$vendedor->email}}">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group bmd-form-group">
                                        <label for="fecha_alta" class="bmd-label-floating">Fecha de transacción &nbsp; <i class="fa fa-calendar"></i> &nbsp;</label>
                                        <br><input type="text" class="form-control" name="fecha_alta" value="{{$pago->created_at}}">
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
                <h3 class="text-left text-uppercase"><br><br><i class="fa fa-file-text-o"></i> &nbsp; Compras pagadas</h3>
                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-condensed" style="width:100%;">
                        <thead class="text-center">
                            <tr class="text-center roboto-medium">
                                <th class="text-center">ID</th>
                                <th class="text-center">PRODUCTO</th>
                                <th class="text-center">PIEZAS</th>
                                <th class="text-center">PRECIO UNITARIO</th>
                                <th class="text-center">SUBTOTAL</th>
                                <th class="text-center">*TOTAL</th>
                            </tr>                    
                        </thead>
                        <tbody>
                            @foreach($detalleCompra as $detalle)
                            <tr class="text-center">
                                <th class="text-center">{{$detalle['compra']->id}}</th>
                                <th class="text-center">{{$detalle['producto']->nombre}}</th>
                                <th class="text-center">{{$detalle['compra']->piezas}}</th>
                                <th class="text-center">${{$detalle['producto']->precio}}</th>
                                <th class="text-center">${{$detalle['subtotal']}}</th>
                                <th class="text-center">${{$detalle['total']}}</th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </form>
                <h5>* Subtotal de la compra menos el porcentaje de manejo</h5>
                <br>  
                <h4 class="text-left text-uppercase"><br><br><i class="fa fa-money"></i> &nbsp; Total a pagar = ${{$totalPago}}</h4>       
            </div>              
        </div>
    </div>    
</div>
@if($pago->esta_pendiente)
<p class="text-center" style="margin-top: 20px;">
    <a href="/pagar-vendedor/{{$pago->id}}" id="imprimirDiv" class="btn btn-primary"><i class="fa fa-print"></i>&nbsp; Pagar</a>
</p>
@endif
<br><br>
<!-- /SECTION -->


<script src="imprimircomprobante.js"></script>

@include('footer')