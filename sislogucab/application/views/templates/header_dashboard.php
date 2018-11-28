<html>
  <head>
    <title>SisLogUCAB</title>
    <link rel='stylesheet' href="https://bootswatch.com/4/lux/bootstrap.min.css">
    <script src="https://bootswatch.com/_vendor/jquery/dist/jquery.min.js"></script>
    <script src="https://bootswatch.com/_vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  </head>
<body>

<ul class="nav nav-tabs width:100">
  <li class="nav-item">
    <img src="https://media.discordapp.net/attachments/399787128948785152/514183097949093889/Untitled.png" href="/dashboard" style="margin-left: 35; margin-top: 1;">
    <!-- <a class="nav-link" >LOGO</a> -->
  </li>
  <li class="nav-item">
    <a class="nav-link" href="dashboard">Paquetes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="pago">Pago</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="balance">Balance</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="historico">Historico</a>
  </li>

  <!-- nav de empleados/gerente -->
  <div class="content" aria-hidden="true">
    <li class="justify-content-end">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Opciones de Empelado</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Localizar Paquete Cliente</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Lista Empleados</a>
          <a class="dropdown-item" href="#">Pagos Recibidos</a>
          <a class="dropdown-item" href="#">Turno de la Semana</a>
          <div class="dropdown-divider"></div>
          <!-- Opciones de Administrador -->
        </div>
      </li>
    </li>
  </div>

</ul>

  <div class="container">
    <br>
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
            <div class="card">
              <div class="card-body" style="text-align: center;">
                  <h6 class="card-title">Your Info</h4>
                    <div class="container" id="img-user-container">
                      <!-- <img src="https://www.lagersmit.com/wp-content/uploads/2014/09/default_avatar-2.gif" width="120" height="120" class="img-thumbnail rounded-circle"> -->
                      <img src="https://cdn.discordapp.com/attachments/493268890735083520/508863139408904192/Riuben13.png" width="120" height="120" class="img-thumbnail rounded-circle">
                    </div>
                  <!-- <h6 class="card-title">Your Picture</h4> -->
                  <a class="card-title" data-target="#modal-not" role="button" href="" data-toggle="modal" >
                    Your Username <span class="badge badge-pill badge-primary">4</span>
                  </a>
                    <hr class="my-4">
                    </div>
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-3">
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#vipModal" style="border-radius: 15px;"> Vip</button>
                      </div>
                      <div class="col-sm-4">
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#configModal"style="border-radius: 15px;">
                          Config
                        </button>


                      </div>
                      <div class="col-sm-4">
                        <button type="button" class="btn btn-danger btn-sm"style="border-radius: 15px;">Logout</button>
                      </div>
                    </div>
                  </div>
                    <br>
                  <div class="card-body">
                    <br>
                    <p class="text-card" >Last Conexion</p>
                  </div>


              </div>
        </div>

<!-- Config Modal -->

        <div class="modal fade bd-example-modal-lg" id="configModal">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Configurar Usuario</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-6">
                          <div class="form-group">
                            <label class="col-form-label col-form-label-sm" for="inputSmall">Nombre</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Nombre Actual" id="act_name">
                          </div>
                          <div class="form-group">
                            <label class="col-form-label col-form-label-sm" for="inputSmall">Correo Electronico</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Correo Electronico Actual" id="act_email">
                          </div>
                          <div class="form-group">
                            <label class="col-form-label col-form-label-sm" for="inputSmall">Telefono:</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Telefono Actual" id="act_telf1">
                          </div>
                          <div class="form-group">
                            <label class="col-form-label col-form-label-sm" for="inputSmall">Telefono:</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Telefono Actual" id="act_telf2">
                          </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label class="col-form-label col-form-label-sm" for="inputSmall">Apellido</label>
                          <input class="form-control form-control-sm" type="text" placeholder="Apellido" id="act_lastname">
                        </div>
                        <div class="form-group">
                          <label class="col-form-label col-form-label-sm" for="inputSmall">Compañia</label>
                          <input class="form-control form-control-sm" type="text" placeholder="Compañia Actual" id="act_company">
                        </div>
                        <div class="form-group">
                          <p>Cambiar Contraseña</p>
                          <label class="col-form-label col-form-label-sm" for="inputSmall">Contraseña Actual</label>
                          <input class="form-control form-control-sm" type="text" placeholder="Contraseña Actual" id="act_password">
                        </div>
                        <div class="form-group">
                          <label class="col-form-label col-form-label-sm" for="inputSmall">Contraseña Nueva</label>
                          <input class="form-control form-control-sm" type="text" placeholder="Contraseña Nueva" id="new_password">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary btn-sm" style="border-radius: 15px">Guardar Cambios</button>
                  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" style="border-radius: 15px">Close</button>
                </div>
              </div>
            </div>
          </div>

<!-- End config Modal -->

<!-- Config Vip Modal -->

          <div class="modal fade" id="vipModal" tabindex="-1" role="dialog" aria-hidden="true" aria-labelleby="vipModal">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">VIP Card</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!-- <img src="https://media.discordapp.net/attachments/399787128948785152/514190756341219349/unknown.png?width=740&height=474" width="100%" height="50%"> -->
                    <img src="https://media.discordapp.net/attachments/399787128948785152/514191881731702784/unknown.png?width=720&height=474" width="100%" height="50%">
                    <img src="https://media.discordapp.net/attachments/399787128948785152/514190653320855622/unknown.png?width=731&height=474"  width="100%" height="50%">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-sm" style="border-radius: 15px">Descargar PDF</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" style="border-radius: 15px">Cerrar</button>
                  </div>
                </div>
              </div>
            </div>
<!-- End Vip Modal -->

<div class="modal fade" id="modal-not" tabindex="-1" role="dialog" aria-hidden="true" aria-labelleby="vipModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Notificaciones</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <span class="badge badge-pill badge-info">&#10004;</span> Notificaciones
            <hr class="my-4">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" style="border-radius: 15px">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
