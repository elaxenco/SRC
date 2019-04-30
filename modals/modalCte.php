<!-- MODAL DE BANCO -->
<div class="modal fade" id="modalCte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-xl" role="document" >
    <div class="modal-content">
      <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Cliente  </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">  

        <div class="container-fluid">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="datosPersonales-tab" data-toggle="tab" href="#datosPersonales" role="tab" aria-controls="datosPersonales" aria-selected="true">Datos Personales</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="direccion-tab" data-toggle="tab" href="#direccion" role="tab" aria-controls="direccion" aria-selected="false">Direccion</a>
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link" id="referencias-tab" data-toggle="tab" href="#referencias" role="tab" aria-controls="referencias" aria-selected="false">Referencias</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="historial-tab" data-toggle="tab" href="#historial" role="tab" aria-controls="historial" aria-selected="false">Historial Vales</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="bloque-tab" data-toggle="tab" href="#bloque" role="tab" aria-controls="bloque" aria-selected="false">Bloqueo</a>
                  </li>
                </ul> 
              <div class="tab-content mt-2" id="myTabContent ">
                <div class="tab-pane fade show active " id="datosPersonales" role="tabpanel" aria-labelledby="home-tab">
                    <div class="form-row">
                      <div class="col-md-3 col-12 ">
                           <label for="c_sexo">Distribuidora</label>
                          <select class="custom-select" id="c_sexo">
                          <option selected>Seleccione una opcion</option> 
                            <option value="1">MARIA MAGDALENA CRUZ NEVAREZ</option> 
                          </select>
                      </div>
                      <div class="col-md-1 col-3">
                          <label for="c_id">Id</label>
                          <input type="number" min="1" class="form-control" id="c_id" placeholder="Id" value="0"   readonly=""> 
                      </div>
                      <div class="col-md-5 col-9 ">
                          <label for="c_nombre ">Nombre</label>
                          <input type="text" class="form-control" id="c_nombre" placeholder="Ingrese su nombre" onkeyup="buscarClientesReg();" onkeypress="return soloLetras(event)"  required> 
                      </div> 
                      <div class="col-md-3 col-12">
                        <label for="c_appaterno">Apellido Paterno</label>
                        <input type="text" class="form-control" id="c_appaterno" placeholder="Ingrese su apellido paterno" onkeyup="buscarClientesReg();" onkeypress="return soloLetras(event)" required> 
                      </div> 
                      <div class="col-md-3 col-12 ">
                        <label for="c_apmaterno">Apellido Materno</label>
                        <input type="text" class="form-control" id="c_apmaterno" placeholder="Ingrese su apellido materno" onkeyup="buscarClientesReg();" onkeypress="return soloLetras(event)" required>
                 
                      </div> 
                      <div class="col-md-3 col-12 ">
                        <label for="c_fecha">Fecha Nacimiento</label>
                        <input type="date" class="form-control" id="c_fecha"   required> 
                      </div> 
                       <div class="col-md-3 col-12 ">
                         <label for="c_sexo">Sexo</label>
                        <select class="custom-select" id="c_sexo">
                        <option selected>Seleccione una opcion</option> 
                          <option value="H">HOMBRE</option>
                          <option value="M">MUJER</option> 
                        </select>
                      </div> 
                      <div class="col-md-3 col-12 ">
                         <label for="c_sexo">Estado Civil</label>
                        <select class="custom-select" id="c_sexo">
                        <option selected>Seleccione una opcion</option> 
                          <option value="S">Soltero</option>
                          <option value="C">Casado</option> 
                        </select>
                      </div> 
                      <div class="col-md-3 col-12 ">
                        <label for="c_cp">CURP</label>
                        <input type="text" class="form-control" id="c_cp" placeholder="CURP"  required>  
                      </div> 
                      <div class="col-md-3 col-12 ">
                        <label for="c_apmaterno">Telefono</label>
                        <input type="text" class="form-control" id="c_apmaterno" placeholder="Telefono"  required>
                 
                      </div> 
                      <div class="col-md-3 col-12 ">
                         <label for="c_sexo">Sucursal</label>
                        <select class="custom-select" id="c_sexo">
                        <option selected>Seleccione una opcion</option> 
                          <option value="1">Culiacan</option>
                          <option value="2">Mazatlan</option> 
                        </select>
                      </div> 
                    </div>
                </div><!--TAB DATOS PERSONALES -->
                <div class="tab-pane fade  " id="direccion" role="tabpanel" aria-labelledby="direccion-tab">
                  <div class="form-row">  
                      <div class="col-md-5 col-12 ">
                        <label for="c_apmaterno">Calle</label>
                        <input type="text" class="form-control" id="c_apmaterno" placeholder="Telefono"  required> 
                      </div> 
                      <div class="col-md-2 col-12 ">
                        <label for="c_apmaterno">Numero</label>
                        <input type="text" class="form-control" id="c_apmaterno" placeholder="Telefono"  required> 
                      </div> 
                      <div class="col-md-2 col-12 ">
                        <label for="c_apmaterno">Numero Interior</label>
                        <input type="text" class="form-control" id="c_apmaterno" placeholder="Telefono"  required> 
                      </div>
                      <div class="col-md-3 col-12 ">
                        <label for="c_apmaterno">Codigo Postal</label>
                        <input type="text" class="form-control" id="c_apmaterno" placeholder="Telefono"  required> 
                      </div>
                      <div class="col-md-3 col-12 ">
                         <label for="c_sexo">Colonia</label>
                        <select class="custom-select" id="c_sexo">
                        <option selected>Seleccione una opcion</option> 
                          <option value="1">Centro</option>
                          <option value="2">Humaya</option> 
                        </select>
                      </div> 
                      <div class="col-md-3 col-12 ">
                        <label for="c_apmaterno">Municipio</label>
                        <input type="text" class="form-control" id="c_apmaterno" placeholder="Municipio"  required> 
                      </div>
                      <div class="col-md-3 col-12 ">
                        <label for="c_apmaterno">Ciudad</label>
                        <input type="text" class="form-control" id="c_apmaterno" placeholder="Ciudad"  required> 
                      </div>
                      <div class="col-md-3 col-12 ">
                        <label for="c_apmaterno">Estado</label>
                        <input type="text" class="form-control" id="c_apmaterno" placeholder="Estado"  required> 
                      </div>   
                   </div>
                </div><!--TAB DATOS DIRECCION -->
                <div class="tab-pane fade  " id="referencias" role="tabpanel" aria-labelledby="referencias-tab">
                  <div class="form-row">  
                      <div class="col-md-1 col-12 ">
                        <label for="c_cp">Id</label>
                        <input type="text" class="form-control" id="c_cp" placeholder="0"  required readonly="">  
                      </div>
                      <div class="col-md-5 col-12 ">
                        <label for="c_cp">Nombre</label>
                        <input type="text" class="form-control" id="c_cp" placeholder="Nombre"  required>  
                      </div> 
                      <div class="col-md-3 col-12 ">
                        <label for="c_cp">Apellido Paterno</label>
                        <input type="text" class="form-control" id="c_cp" placeholder="Apellido Paterno"  required>  
                      </div> 
                      <div class="col-md-3 col-12 ">
                        <label for="c_cp">Apellido Materno</label>
                        <input type="text" class="form-control" id="c_cp" placeholder="Apellido Materno"  required>  
                      </div>  
                      <div class="col-md-2 col-12 ">
                        <label for="c_cp">Parentesco</label>
                        <input type="text" class="form-control" id="c_cp" placeholder="Parentesco"  required>  
                      </div> 
                      <div class="col-md-2 col-12 ">
                        <label for="c_cp">Tiempo conocerse</label>
                        <input type="text" class="form-control" id="c_cp" placeholder="Tiempo conocerse"  required>  
                      </div> 
                      <div class="col-md-2 col-12 ">
                        <label for="c_cp">Telefono</label>
                        <input type="text" class="form-control" id="c_cp" placeholder="Telefono"  required>  
                      </div>  
                      <div class="col-md-6 col-12 ">
                        <label for="c_cp">Domicilio</label>
                        <input type="text" class="form-control" id="c_cp" placeholder="Domicilio"  required>  
                      </div> 
                  </div> 
                  <div class="row"> 
                    <div class="table-responsive">
                      <table class="table table-bordered table-hover  table-sm mt-2">
                          <thead>
                            <tr>
                              <th scope="col" class="text-center">ID</th>
                              <th scope="col" class="text-center">Nombre</th>
                              <th scope="col" class="text-center">Parentesco</th>
                              <th scope="col" class="text-center">Telefono</th>
                              <th scope="col" class="text-center">T.C</th>
                              <th scope="col" class="text-center">Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr> 
                              <td scope="col" class="text-right">001</td>
                              <td scope="col" class="text-left">Lorenzo Lamas Perez</td>
                              <td scope="col" class="text-center">HERMANO</td>
                              <td scope="col" class="text-center">655235214</td>
                              <td scope="col" class="text-center">30 AÑOS</td>
                              <td scope="col" class="text-center">
                                  <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group mr-2" role="group" aria-label="First group">
                                      <button type="button" class="btn  border border-secondary" data-toggle="tooltip" title="" data-original-title="Actualizar"><i class="fa fa-edit"></i></button>
                                      <button type="button" class="btn  border border-secondary" data-toggle="tooltip" title="" data-original-title="Habilitar" disabled><i class="fa fa-check"></i></button>
                                      <button type="button" class="btn  border border-secondary" data-toggle="tooltip" title="" data-original-title="Deshabilitar"><i class="fa fa-times"></i></button> 
                                    </div>
                                  </div> 

                              </td>
                            </tr> 
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div><!--TAB DATOS REFERENCIAS -->
                <div class="tab-pane fade  " id="historial" role="tabpanel" aria-labelledby="historial-tab">
                  <div class="row"> 
                    <div class="table-responsive">
                      <table class="table table-bordered table-hover  table-sm mt-2">
                          <thead>
                            <tr>
                              <th scope="col" class="text-center">ID</th>
                              <th scope="col" class="text-center">Distribuidor</th>
                              <th scope="col" class="text-center">Fecha</th>
                              <th scope="col" class="text-center">Monto</th>
                              <th scope="col" class="text-center">Quincenas</th>
                              <th scope="col" class="text-center">Pago</th>
                              <th scope="col" class="text-center">Estatus</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr> 
                              <td scope="col" class="text-right">00001</td>
                              <td scope="col" class="text-left">MARIA MAGDALENA CRUZ NEVAREZ</td>
                              <td scope="col" class="text-center">2019-01-01</td>
                              <td scope="col" class="text-center">$ 3000.00</td>
                              <td scope="col" class="text-center">6</td>
                              <td scope="col" class="text-center">460</td>
                              <td scope="col" class="text-center">ACTIVO</td>
                            </tr> 
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div><!--TAB DATOS HISTORIAL -->
                <div class="tab-pane fade  " id="bloque" role="tabpanel" aria-labelledby="bloque-tab">
                  <div class="row">
                    <div class="col-md-4 col-12">
                      <div class="col-12 ">
                          <label for="c_sexo">Estatus</label>
                          <select class="custom-select" id="c_sexo">
                          <option selected>Seleccione una opcion</option> 
                            <option value="1">Activo</option>
                            <option value="2">Bloqueado</option> 
                            <option value="3">Finado</option> 
                          </select>
                      </div> 
                      <div class="col-12">
                        <label for="exampleFormControlTextarea1">Comentarios</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                    </div>
                    <div class="col-md-8 col-12">
                        <div class="table-responsive">
                          <table class="table table-bordered table-hover  table-sm mt-2">
                              <thead>
                                <tr>
                                  <th scope="col" class="text-center">ID</th>
                                  <th scope="col" class="text-center">Comentario</th>
                                  <th scope="col" class="text-center">Estatus</th> 
                                  <th scope="col" class="text-center">Fecha</th> 
                                  <th scope="col" class="text-center">Capturista</th> 
                                </tr>
                              </thead>
                              <tbody>
                                <tr> 
                                  <td scope="col" class="text-right">00001</td>
                                  <td scope="col" class="text-left">MALA PAGA</td>
                                  <td scope="col" class="text-center">BLOQUEADO</td> 
                                  <td scope="col" class="text-center">2019-03-01</td>
                                  <td scope="col" class="text-right">MANUEL MENDICOA</td> 
                                </tr> 
                              </tbody>
                            </table>
                          </div>
                    </div>
                      
                  </div>
                  
                </div><!--TAB DATOS BLOQUE -->
                 
              </div>
      </div>
                  

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button> 
        <button type="button" class="btn btn-success" >Guardar</button> 
      </div>
    </div>
  </div> 
</div>
