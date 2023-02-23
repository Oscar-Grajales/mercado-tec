@include('Supervisor.lateral')

<!-----INICIO DEL CONTENIDO PRINCIPAL------->
<section class="bg-light py-3">
    <br>
    <div class="container">
        <h3 class="text-left text-uppercase">
            <i class="fa fa-list-alt"></i> &nbsp; Historial
        </h3>
        <hr>
        <section id="content" class="bg-light py-6">
            <div class="container-fluid">              
                <div class="form-neon">
                <h3 class="text-center">{{$vendedor->nombre}}</h3>
                <br>
            <fieldset>
                <div class="container-fluid">
                    <div class="row">
                            <br>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="form-group bmd-form-group is-filled">
                                            <label for="producto_stock_total" class="bmd-label-floating">Productos registrados</label>
                                            <input type="text" value="{{$productos['productos']->count()}}" class="form-control" id="producto_stock_total" readonly="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="form-group bmd-form-group is-filled">
                                            <label for="producto_stock_total" class="bmd-label-floating">Productos consignados</label>
                                            <input type="text" value="{{$productos['consignados']}}" class="form-control" id="producto_stock_total" readonly="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="form-group bmd-form-group is-filled">
                                            <label for="producto_stock_total" class="bmd-label-floating">Productos no consignados</label>
                                            <input type="text" value="{{$productos['noConsignados']}}" class="form-control" id="producto_stock_total" readonly="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="form-group bmd-form-group is-filled">
                                            <label for="producto_precio_venta" class="bmd-label-floating">Número de transacciones</label>
                                            <input type="text" value="{{$transacciones}}" class="form-control" id="producto_precio_venta" readonly="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="form-group bmd-form-group is-filled">
                                            <label for="producto_descuento" class="bmd-label-floating">Artículos vendidos</label>
                                            <input type="text" value="{{$articulosVendidos}}" class="form-control" id="producto_descuento" readonly="">
                                        </div>
                                    </div>   
                                    
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="form-group bmd-form-group is-filled">
                                            <label for="producto_descuento" class="bmd-label-floating">Calificación del vendedor</label>
                                            <input type="text" value="{{$calificacion}}" class="form-control" id="producto_descuento" readonly="">
                                        </div>
                                    </div> 

                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="form-group bmd-form-group is-filled">
                                            <label for="producto_vencimiento" class="bmd-label-floating">Fecha de alta</label>
                                            <input type="text" value="{{$vendedor->fecha_alta}}" class="form-control" id="producto_vencimiento" readonly="">
                                        </div>
                                    </div> 
                                </div> 
                                
                            <br> 
                            </div>                          
                    </div>

                </div>
            </fieldset>

            </div>
            <hr>
            <div class="row">
                <div class="table-responsive">
                    <h3 class="text-center"><br>Todos sus productos</h3>
                    <br>
				<table class="table table-striped table-bordered table-condensed" style="width:100%">
					<thead>
						<tr class="text-center roboto-medium">
							<th>ID</th>
							<th>NOMBRE</th>
                            <th>PIEZAS</th>
							<th>KARDEX</th>
                        </tr>
					</thead>
					<tbody>
					@foreach($productos['productos'] as $producto)
						<tr class="text-center">
							<td>{{$producto->id}}</td>
                            <td>{{$producto->nombre}}</td>
                            <td>{{$producto->piezas}}</td>
							<td>
								<a class="btn btn-info" href="/kardex-producto/{{$producto->id}}">
									<i class="fa fa-list-alt"></i>
								</a>
							</td>
                        </tr>
                    @endforeach				
                    </tbody>
				</table>
			    </div>			
                                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
        </section>
            
    </div>
    <br>
    <br> 
</section>
<!--FIN del cont principal-->
@include('Supervisor.inferior')