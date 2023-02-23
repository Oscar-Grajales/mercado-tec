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
                <li><a href="formulario-crear-usuario">Nuevo usuario</a></li>
                <li class="active"><a href="crud-usuarios">Listar usuarios</a></li>
                <li><a href="/listar-solicitud-password">Restablecer contraseñas</a></li>
                <li><a href="/listar-vendedores">Historial vendedores</a></li>
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
        <br>
            <div class="container">  
            <div class="row">
                <div class="col-lg-12">
                <h3 class="text-left text-uppercase">
                    <i class="fa fa-users"></i> &nbsp; Lista de Usuarios
                </h3>
                <br>
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr class="text-center roboto-medium">
                                <th>ID</th>
                                <th>CARGO</th>
                                <th>NOMBRE</th>
                                <th>EMAIL</th>
                                <th>EDITAR</th>                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($usuarios as $usuario)
                            <tr class="text-center">
                                <td>{{$usuario->id}}</td>
                                <td>
                                    @foreach($roles as $rol)
                                        @if($rol->id == $usuario->rol_id)
                                            {{$rol->tipo}}
                                        @endif
                                    @endforeach
                                </td>
                                <td>{{$usuario->nombre}}</td>
                                <td>{{$usuario->email}}</td>
                                <td>
                                    <a class="btn btn-warning" href="/formulario-editar-usuario/{{$usuario->id}}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                            </tr>                        
                            @endforeach
                        </tbody>
                    </table>
                </div>

                </div>
                </div>
            </div>    
    <br>
    <br>
    <br>
    </section>
    <br>
    <br>
</div>
</section>
@include('Supervisor.inferior')