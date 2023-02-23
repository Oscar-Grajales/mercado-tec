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
				<li class="active"><a href="/formulario-crear-categoria">Nueva categoría</a></li>
				<li><a href="/crud-categorias">Listar categorías</a></li>
			</ul>
            <br>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
<section class="bg-light py-3">
<div class="container">
<div class="container-fluid">
    <form action="/crear-categoria" method="POST">
        @csrf
            <legend><i class="fa fa-address-card"></i> &nbsp; Información de la categoría</legend>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group bmd-form-group is-filled">
                            <label for="nombre" class="bmd-label-floating">Nombre de la categoría &nbsp; <i class="fa fa-flag-o"></i> &nbsp;</label>
                            <input type="text" class="form-control" name="nombre" id="categoria_nombre">
                        </div>
                    </div>                    
                    <div class="col-12 col-md-6">
                        <div class="form-group bmd-form-group is-filled">
                            <label for="esta_activada" class="bmd-label-floating">Estado de la categoría</label>
                            <select class="form-control" name="esta_activada" id="categoria_estado">
                                <option value="1">Activa</option>
                                <option value="0">Inactiva</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        <p class="text-center" style="margin-top: 40px;">
            <button type="reset" class="btn btn-secondary"><i class="fa fa-eraser"></i> &nbsp; LIMPIAR</button>
            &nbsp; &nbsp;
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> &nbsp; GUARDAR</button>
        </p>
    </form>
</div>
</div>
</section>
@include('Supervisor.inferior')