<div class="col-sm-6">
  <div class="card">
    <div class="card-body">
            <h6><?php echo $title ?></h6>
            <hr class="my-4">


            <table class="table table-hover w-100">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Tracking</th>
                    <th scope="col">Contenido</th>
                    <th scope="col">Precio</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <input type="checkbox" name="check_buy" value="">
                    </td>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td>
                      <input type="checkbox" name="check_buy" value="">
                    </td>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                </tbody>
            </table>
            <div class="container">
              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#payment-modal" style="border-radius: 15px;">Pagar</button>
            </div>
          </div>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="card">
        <div class="card-body">
          <h6>Factura</h6>
          <hr class="my-4">
          <div class="row">
            <div class="col">
              <p>Items: </p>
            </div>
            <div class="col">
              <p style="text-align: right;">2</p>
            </div>
            <div class="w-100"></div>
            <div class="col">
              <p >Envio: </p>
            </div>
            <div class="col">
              <p style="text-align: right;">200 Bs</p>
            </div>
            <div class="w-100"></div>
            <div class="col">
              <p>Subtotal: </p>
            </div>
            <div class="col">
              <p style="text-align: right;">500 Bs</p>
            </div>
          </div>
          <hr class="my-4">
          <div class="row">
            <div class="col">
              <h4>Total: </h6>
            </div>
            <div class="col">
              <h6>1000 Bs</h4>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="payment-modal" tabindex="-1" role="dialog" aria-hidden="true" aria-labelleby="payment-modal">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Pago Online</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col">
                  <h6 class="modal-title">Información de Facturación</h6>
                  <br class="my-3">
                  <div class="form-group">
                    <label class="col-form-label col-form-label-sm" for="inputSmall">Dirección:</label>
                    <input class="form-control form-control-sm" type="text" id="payment_direccion">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label col-form-label-sm" for="inputSmall">Cuidad:</label>
                    <input class="form-control form-control-sm" type="text" id="payment_cuidad">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label col-form-label-sm" for="inputSmall">Estado:</label>
                    <select class="custom-select">
                        <option selected="">Seleccione su Estado</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                  </div>
                </div>
                <div class="col">
                  <h6 class="modal-title">Datos de Pago</h6>
                  <br class="my-3">
                  <!-- Nombre tarjetahabiente -->
                  <div class="form-group">
                    <label class="col-form-label col-form-label-sm" for="inputSmall">Nombre Tarjeta Habiente:</label>
                    <input class="form-control form-control-sm" type="text" id="payment_tarjetahabiente">
                  </div>
                  <!-- Numero tarjeta -->
                  <div class="form-group">
                    <label class="col-form-label col-form-label-sm" for="inputSmall">Número Tarjeta:</label>
                    <input class="form-control form-control-sm" type="text" id="payment_id_tarjeta" maxlength="16">
                  </div>
                  <!-- Fecha Vencimiento -->

                  <div class="row">
                    <div class="col-8">
                      <label class="col-form-label col-form-label-sm" for="inputSmall">Fecha de Vencimiento:</label>
                      <div class="row">
                        <div class="col-6">
                            <input class="form-control form-control-sm" type="text" id="payment_mm" placeholder="mm" maxlength="2">
                        </div>
                        <div class="col-6">
                            <input class="form-control form-control-sm" type="text" id="payment_yy" placeholder="yy" maxlength="2">
                        </div>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="form-group">
                        <label class="col-form-label col-form-label-sm" for="inputSmall">CVC:</label>
                        <input class="form-control form-control-sm" type="text" id="payment_cvc" maxlength="3">
                      </div>
                    </div>
                  </div>

                      <!-- Cedula -->
                  <div class="row">
                    <div class="col-3">
                      <br>
                      <select class="custom-select">
                          <option selected="selected" value="1">V-</option>
                          <option value="2">E-</option>
                          <option value="3">P-</option>
                      </select>
                    </div>
                    <div class="col-9">
                      <div class="form-group">
                        <label class="col-form-label col-form-label-sm" for="inputSmall">Cedula:</label>
                        <input class="form-control form-control-sm" type="text" id="payment_cedula">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#payment1-modal" style="border-radius: 15px;" data-dismiss="modal" disabled>Pagar</button>
              <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" style="border-radius: 15px">Cancelar</button>
            </div>
          </div>
        </div>
      </div>
