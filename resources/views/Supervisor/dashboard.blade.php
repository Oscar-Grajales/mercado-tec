@include('Supervisor.lateral')
<!-----INICIO DEL CONTENIDO PRINCIPAL------->

<div id="content" class="bg-grey w-100">
  <section class="bg-light py-3">
    <section class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8">
                  <h1 class="font-weight-bold mb-0">Bienvenido</h1>
                  <p class="lead text-muted">Revisa la última información</p>
                </div>                
            </div>
        </div>
    </section>
    <section class="bg-mix py-3">
      <div class="container">
          <div class="card rounded-0">
              <div class="card-body">
                  <div class="row">
                      <div class="col-lg-3 col-md-6 d-flex stat my-3">
                          <div class="mx-auto">
                              <h6 class="text-muted">Productos consignados</h6>
                              <h3 class="font-weight-bold">{{$variables['consignados']}}</h3>
                              <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i></h6>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 d-flex stat my-3">
                          <div class="mx-auto">
                              <h6 class="text-muted">Productos no consignados</h6>
                              <h3 class="font-weight-bold">{{$variables['noConsignados']}}</h3>
                              <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i></h6>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 d-flex stat my-3">
                          <div class="mx-auto">
                              <h6 class="text-muted">No. de usuarios</h6>
                              <h3 class="font-weight-bold">{{$variables['totalUsuarios']}}</h3>
                              <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i></h6>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 d-flex my-3">
                          <div class="mx-auto">
                              <h6 class="text-muted">Usuarios nuevos hoy</h6>
                              <h3 class="font-weight-bold">{{$variables['usuariosDia']}}</h3>
                              <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i></h6>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
    <section>
      <div class="container">
          <div class="row">

          </div>
      </div>
      <br><br><br>
    </section>
  </section>
  </div>
  </div>
</div>
<!-----FIN DEL CONTENIDO PRINCIPAL------->
@include('Supervisor.inferior')