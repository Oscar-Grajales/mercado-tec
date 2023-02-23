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

<div class="container">  
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-left text-uppercase"><br><br><i class="fa fa-file-text-o"></i> &nbsp; Pagos</h3>
            <br>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed" style="width:100%;">
                <thead class="text-center">
                    <tr class="text-center roboto-medium">
                        <th class="text-center">ID</th>
                        <th class="text-center">FECHA</th>
                        <th class="text-center">VENDEDOR</th>
                        <th class="text-center">ESTADO</th>
                        <th class="text-center">OPCIONES</th>
                    </tr>                    
                </thead>
                <tbody>
                    @foreach($detallesPago as $detalle)
                    <tr class="text-center">
                        <th class="text-center">{{$detalle['pago']->id}}</th>
                        <th class="text-center">{{$detalle['pago']->created_at}}</th>
                        <th class="text-center">{{$detalle['vendedor']->nombre}}</th>
                        <td class="text-center">
                            <h5>
                            @if($detalle['pago']->esta_pendiente)
                            <span class="label label-danger">Pendiente</span>
                            @else
                            <span class="label label-success">Entregado</span>
                            @endif
                            </h5>
                        </td>
                        <td>
                            @if($detalle['pago']->esta_pendiente)
                            <a class="btn btn-warning" href="/editar-pago/{{$detalle['pago']->id}}">
                                <i class="fa fa-edit"></i>
                            </a>
                            @endif
                            <a class="btn btn-info" href="/ver-pago/{{$detalle['pago']->id}}">
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