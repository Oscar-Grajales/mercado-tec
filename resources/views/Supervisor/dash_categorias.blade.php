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
				<li><a href="/formulario-crear-categoria">Nueva categoría</a></li>
				<li class="active"><a href="/crud-categorias">Listar categorías</a></li>
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
        <br>
        <div class="container-fluid">
        <h3 class="text-left text-uppercase">
            <i class="fa fa-th-list"></i> &nbsp; Lista de categorías
        </h3>
        <br>    
				<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed" style="width:100%">
					<thead>
						<tr class="text-center roboto-medium">
							<th>ID</th>
							<th>NOMBRE</th>
							<th>Cant. Productos</th>
                            <th>ACTIVADA</th>
							<th>EDITAR</th>
                            <th>ELIMINAR</th>
                        </tr>
					</thead>
					<tbody>
					@foreach($categorias as $categoria)
						<tr class="text-center">
							<td>{{$categoria->id}}</td>
                            <td>{{$categoria->nombre}}</td>
                            <td>{{$categoria->productos->count()}}</td>
							@if($categoria->esta_activada)
								<td>Sí</td>
							@else
								<td>No</td>
							@endif
							<td>
								<a class="btn btn-warning" href="/formulario-editar-categoria/{{$categoria->id}}">
									<i class="fa fa-edit"></i>
								</a>
							</td>
                            <td>
								<form action="/eliminar-categoria/{{$categoria->id}}" method="POST">
									@csrf
									@method('DELETE')
									<button type="submit" class="btn btn-danger">
										<i class="fa fa-trash-o"></i>
									</button>
								</form>
                            </td>
                        </tr>
                    @endforeach				
                    </tbody>
				</table>
			</div>
            </div>
            <br>
            <br>
            <br>
            <br>
    </section>
    <br>
    <br>
</div>
<!--FIN del cont principal-->
@include('Supervisor.inferior')