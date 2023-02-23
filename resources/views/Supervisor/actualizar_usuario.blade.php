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
                <li class="active">Actualizar usuario</li>
            </ul>
            <br>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>

<div id="content" class="bg-light w-100">
    <section class="bg-light py-3">
    <div class="container-fluid">   
    <form action="/editar-usuario/{{$usuario->id}}" method="POST">
        @csrf
        @method('PUT')
            <legend><i class="fa fa-id-card-o"></i> &nbsp; Información personal</legend>
            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="form-group bmd-form-group">
                            <label for="nombre" class="bmd-label-floating">Nombre &nbsp; <i class="fa fa-user-o"></i> &nbsp;</label>
                            <input type="text" class="form-control" name="nombre" value="{{$usuario->nombre}}">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group bmd-form-group">
                            <label for="email" class="bmd-label-floating">Email &nbsp; <i class="fa fa-envelope-o"></i> &nbsp;</label>
                            <input type="text" class="form-control" name="email" value="{{$usuario->email}}">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group bmd-form-group is-filled">
                            <label for="rol" class="bmd-label-floating">Rol &nbsp; <i class="fa fa-address-card-o"></i> &nbsp;</label>
                                <select class="form-control" name="rol" id="usuario_cargo">
                                    @foreach($roles as $rol)
                                        @if($usuario->rol_id == $rol->id)
                                            <option value="{{$rol->id}}" selected>{{$rol->tipo}}</option>
                                        @else
                                            <option value="{{$rol->id}}">{{$rol->tipo}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>                            
                    </div>
            </div>      
        <p class="text-center" style="margin-top: 40px;">
            <button type="submit" class="btn btn-raised btn-success btn-sm"><i class="fa fa-edit"></i> &nbsp; ACTUALIZAR</button>
        </p>
    </form>
    </div>
    <br>
    <br>
    <br>
</section>
    <br>
    <br>
</div>
<!-----FIN DEL CONTENIDO PRINCIPAL------->

@include('Supervisor.inferior')