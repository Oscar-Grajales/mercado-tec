@include('Contador.header-contador')

<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li><a href="/inicio-contador">Pagos</a></li>
                <li><a href="/compras-contador">Compras</a></li>
                <li class="active"><a href="/vendedores-contador">Vendedores</a></li>                
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
            <h3 class="text-left text-uppercase"><br><br><i class="fa fa-file-text-o"></i> &nbsp; Vendedores</h3>
            <br>
            <br>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed" style="width:100%;">
                <thead class="text-center">
                    <tr class="text-center roboto-medium">
                        <th class="text-center">ID</th>
                        <th class="text-center">NOMBRE</th>
                        <th class="text-center">VENTAS</th>
                        <th class="text-center">VER</th>
                    </tr>                    
                </thead>
                <tbody>
                    @foreach($vendedores as $vendedor)
                    <tr class="text-center">
                        <th class="text-center col-md-2">{{$vendedor['usuario']->id}}</th>
                        <th class="text-center  col-md-6">{{$vendedor['usuario']->nombre}}</th>
                        <th class="text-center col-md-2">{{$vendedor['ventas']}}</th>
                        <td class="col-md-2">
                            <a class="btn btn-info" href="/detalle-vendedor/{{$vendedor['usuario']->id}}">
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