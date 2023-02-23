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

<div class="container">  
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-left text-uppercase"><br><br><i class="fa fa-file-text-o"></i> &nbsp; Compras</h3>
            <br>
            <br>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed" style="width:100%;">
                <thead class="text-center">
                    <tr class="text-center roboto-medium">
                        <th class="text-center">ID</th>
                        <th class="text-center">FECHA</th>
                        <th class="text-center">VENDEDOR</th>                        
                        <th class="text-center">COMPRADOR</th>
                        <th class="text-center">ESTADO</th>
                        <th class="text-center">VER COMPRA</th>
                    </tr>                    
                </thead>
                <tbody>
                    @foreach($detallesCompra as $detalle)
                    <tr class="text-center">
                        <th class="text-center">{{$detalle['compra']->id}}</th>
                        <th class="text-center">{{$detalle['compra']->created_at}}</th>
                        <th class="text-center">{{$detalle['vendedor']}}</th>
                        <th class="text-center">{{$detalle['comprador']}}</th>                        
                        <td class="text-center">
                            <h5>
                                @if($detalle['compra']->esta_validada)
                                <span class="label label-success">Validada</span>
                                @else
                                <span class="label label-danger">No validada</span>
                                @endif
                            </h5>
                        </td>
                        <td>
                            <a class="btn btn-info" href="/detalle-compra-contador/{{$detalle['compra']->id}}">
                                <i class="fa fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            <br>
            <br>             
        </div>
    </div>
</div>


@include('footer')