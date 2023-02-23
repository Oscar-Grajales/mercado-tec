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
                <li class="active"><a href="/formulario-crear-usuario">Nuevo usuario</a></li>
                <li><a href="/crud-usuarios">Listar usuarios</a></li>
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

<div id="content" class="bg-grey w-100">
<section class="bg-light py-3">
    <section class="bg-light py-3">
        <br>
        <div class="container-fluid">        
            <form action="crear-usuario" method="POST">
                @csrf
                <legend><i class="fa fa-address-card"></i> &nbsp; Información personal</legend>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="form-group bmd-form-group">
                                <label for="nombre" class="bmd-label-floating">Nombre &nbsp; <i class="fa fa-user-o"></i> &nbsp;</label>
                                <input type="text" class="form-control" name="nombre">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group bmd-form-group">
                                <label for="email" class="bmd-label-floating">Email &nbsp; <i class="fa fa-envelope-o"></i> &nbsp;</label>
                                <input type="text" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group bmd-form-group">
                                <label for="password" class="bmd-label-floating">Constraseña &nbsp; <i class="fa fa-lock"></i> &nbsp;</label>
                                <input type="text" class="form-control" name="password">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group bmd-form-group is-filled">
                                <label for="rol" class="bmd-label-floating">Rol &nbsp; <i class="fa fa-address-card-o"></i> &nbsp;</label>
                                <select class="form-control" name="rol" id="usuario_cargo">
                                    <option value="1" selected="">Supervisor</option>
                                    <option value="2">Encargado</option>
                                    <option value="3">Contador</option>
                                    <option value="4">Cliente</option> 
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
    <br>
    <br>
</section>
</div>

@include('Supervisor.inferior')