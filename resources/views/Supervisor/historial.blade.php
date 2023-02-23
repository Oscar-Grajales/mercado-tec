@include('Supervisor.lateral')

<!-----INICIO DEL CONTENIDO PRINCIPAL------->
<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <br>
            <ul class="main-nav nav">
                <li><a href="/formulario-crear-usuario">Nuevo usuario</a></li>
                <li><a href="/crud-usuarios">Listar usuarios</a></li>
                <li><a href="/listar-solicitud-password">Restablecer contraseñas</a></li>
                <li class="active"><a href="/listar-vendedores">Historial vendedores</a></li>
            </ul>
            <br>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>

<section class="bg-light py-3">
    <div id="content" class="bg-light w-100">
        <section class="bg-light py-3">
            <div class="container">  
                <div class="row">
                <div class="col-lg-12">
                <h3 class="text-left text-uppercase"><i class="fa fa-list-alt"></i> &nbsp; Historial</h3>
                <br>
                <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed" style="width:100%">
                    <thead class="text-center">
                        <tr class="text-center roboto-medium">
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>EMAIL</th>
                            <th>VER HISTORIAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($vendedores as $vendedor)
                        <tr class="text-center">
                            <td>{{$vendedor->id}}</td>
                            <td>{{$vendedor->nombre}}</td>
                            <td>{{$vendedor->email}}</td>
                            <td>
                                <a class="btn btn-info" href="/historial-vendedor/{{$vendedor->id}}">
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
        </section>
        <br>
        <br>
    </div>
    <br>
    <br>
</section>
<!--FIN del cont principal-->

@include('Supervisor.inferior')