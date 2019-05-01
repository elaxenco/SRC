<!-- MODAL DE BANCO -->
<div class="modal fade" id="modalDistribuidoras" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-xl" role="document" >
    <div class="modal-content">
      <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Distribuidora  </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">  

      <div class="container-fluid">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#datosPersonales" role="tab" aria-controls="datosPersonales" aria-selected="true">Datos Personales</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="direccion-tab" data-toggle="tab" href="#direccion" role="tab" aria-controls="direccion" aria-selected="false">Direccion</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="propiedad-tab" data-toggle="tab" href="#propiedad" role="tab" aria-controls="propiedad" aria-selected="false">Propiedad</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="referencias-tab" data-toggle="tab" href="#referencias" role="tab" aria-controls="referencias" aria-selected="false">Referencias</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="aval-tab" data-toggle="tab" href="#aval" role="tab" aria-controls="aval" aria-selected="false">Aval</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="credito-tab" data-toggle="tab" href="#credito" role="tab" aria-controls="credito" aria-selected="false">Linea de Credito</a>
                </li>
              </ul>
              <div class="tab-content mt-2" id="myTabContent ">
                <div class="tab-pane fade show active" id="datosPersonales" role="tabpanel" aria-labelledby="home-tab">
                    <div class="form-row">
                            <div class="col-md-1 col-3">
                                <label for="c_id">Id</label>
                                <input type="number" min="1" class="form-control" id="c_id" placeholder="Id" value="0"   readonly=""> 
                            </div>
                            <div class="col-md-3 col-9 ">
                                <label for="c_nombre ">Nombre</label>
                                <input type="text" class="form-control" id="c_nombre" placeholder="Ingrese su nombre" onkeyup="buscarClientesReg();" onkeypress="return soloLetras(event)"  required> 
                              </div> 
                              <div class="col-md-4 col-12">
                                <label for="c_appaterno">Apellido Paterno</label>
                                <input type="text" class="form-control" id="c_appaterno" placeholder="Ingrese su apellido paterno" onkeyup="buscarClientesReg();" onkeypress="return soloLetras(event)" required>
                                
                              </div> 
                              <div class="col-md-4 col-12 ">
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
                              <div class="col-md-3 col-12 ">
                                <label for="c_apmaterno">Credito Inicial</label>
                                <input type="text" class="form-control" id="c_apmaterno" placeholder="Credito Inicial"  required> 
                              </div> 
                              <div class="col-md-3 col-12 ">
                                 <label for="c_sexo">Cordinacion</label>
                                <select class="custom-select" id="c_sexo">
                                <option selected>Seleccione una opcion</option> 
                                  <option value="1">CULIACAN A</option>
                                  <option value="2">CULIACAN B</option> 
                                </select>
                              </div> 
                             
                             
                             </div>
                </div>
                <div class="tab-pane fade mt-2" id="direccion" role="tabpanel" aria-labelledby="profile-tab">
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
                </div>
                <div class="tab-pane fade mt-2" id="propiedad" role="tabpanel" aria-labelledby="propiedad-tab">
                  <div class="form-row">
                      <div class="col-md-3 col-12 ">
                        <label for="c_apmaterno">Tipo de propiedad</label>
                        <input type="text" class="form-control" id="c_apmaterno" placeholder="Tipo de propiedad"  required> 
                      </div> 
                      <div class="col-md-3 col-12 ">
                        <label for="c_apmaterno">Numero de Predial</label>
                        <input type="text" class="form-control" id="c_apmaterno" placeholder="Numero de Predial"  required> 
                      </div> 
                      <div class="col-md-3 col-12 ">
                        <label for="c_apmaterno">Direccion</label>
                        <input type="text" class="form-control" id="c_apmaterno" placeholder="Direccion"  required> 
                      </div> 
                    </div>
                </div>
                <div class="tab-pane fade mt-2" id="referencias" role="tabpanel" aria-labelledby="referencias-tab">
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
                              <div class="col-md-2 col-12 mt-2 offset-md-10">
                                 <button class="btn btn-outline-secondary mr-2">Limpiar</button><button class="btn btn-success ">Guardar</button> 
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
                                <td>001</td>
                                <td>Manuel Gaspar Hernandez</td>
                                <td>HERMANO</td>
                                <td>655235214</td>
                                <td>30 AÑOS</td>
                                <td>
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
                </div>
                <div class="tab-pane fade mt-2" id="aval" role="tabpanel" aria-labelledby="aval-tab"> 
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
                        <div class="col-md-3 col-12 ">
                          <label for="c_cp">Telefono</label>
                          <input type="text" class="form-control" id="c_cp" placeholder="Parentesco"  required>  
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
                        <div class="col-md-4 col-12 ">
                          <label for="c_apmaterno">Calle</label>
                          <input type="text" class="form-control" id="c_apmaterno" placeholder="Calle"  required> 
                        </div> 
                        <div class="col-md-2 col-12 ">
                          <label for="c_apmaterno">Numero</label>
                          <input type="text" class="form-control" id="c_apmaterno" placeholder="# Numero"  required> 
                        </div> 
                        <div class="col-md-2 col-12 mt-2 offset-md-10">
                           <button class="btn btn-outline-secondary mr-2">Limpiar</button><button class="btn btn-success ">Guardar</button> 
                        </div> 
                   </div> 
                   <div class="row"> 
                        <div class="table-responsive">
                          <table class="table table-bordered table-hover  table-sm mt-2">
                              <thead>
                                <tr>
                                  <th scope="col" class="text-center">ID</th>
                                  <th scope="col" class="text-center">Nombre</th> 
                                  <th scope="col" class="text-center">Telefono</th> 
                                  <th scope="col" class="text-center">Acciones</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr> 
                                  <td>001</td>
                                  <td>JOEL LOPEZ VEGA</td>
                                  <td>85263965214</td> 
                                  <td>
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
                </div>
                <div class="tab-pane fade mt-2" id="credito" role="tabpanel" aria-labelledby="credito-tab">
                    <div class="form-row">
                            <div class="col-md-1 col-3">
                                <label for="c_id">Id</label>
                                <input type="number" min="1" class="form-control" id="c_id" placeholder="Id" value="0"   readonly=""> 
                            </div>
                            <div class="col-md-5 col-9 ">
                                <label for="c_nombre ">Distribuidora</label>
                                <input type="text" class="form-control" id="c_nombre"  readonly=""> 
                            </div>
                            <div class="col-md-3 col-12 ">
                                <label for="c_nombre ">Credito Inicial</label>
                                <input type="text" class="form-control" id="c_nombre"  readonly="" value=" $25,000.00"> 
                            </div>
                            <div class="col-md-3 col-12 ">
                                <label for="c_nombre ">Limite de Credito</label>
                                <input type="text" class="form-control" id="c_nombre"  readonly="" value=" $100,000.00"> 
                            </div> 
                            <div class="col-md-3 col-12 ">
                                <label for="c_nombre ">Cartera</label>
                                <input type="text" class="form-control" id="c_nombre"  readonly="" value="CARTERA A CULIACAN"> 
                            </div>
                            <div class="col-md-3 col-12 ">
                                <label for="c_nombre ">Colocado</label>
                                <input type="text" class="form-control" id="c_nombre"  readonly="" value="$10,000.00"> 
                            </div> 
                            <div class="col-md-3 col-12 ">
                                <label for="c_nombre ">Disponible</label>
                                <input type="text" class="form-control" id="c_nombre"  readonly="" value="$15,000.00"> 
                            </div> 
                            <div class="col-md-4 col-12 mt-2 offset-md-9">
                               <button class="btn btn-outline-primary mr-2" data-toggle="modal" data-target="#modalCreditoAD">Aumento</button><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalBloqueo">Bloqueo</button>
                            </div>   
                    </div>
                </div>
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

<!-- Modal historial -->
<div class="modal fade" id="modalDistHistorico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-xl " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Historico Distribuidora: <b>00001 - MARIA MAGDALENA CRUZ NEVAREZ</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-canjes-tab" data-toggle="tab" href="#nav-canjes" role="tab" aria-controls="nav-canjes" aria-selected="true">Canjes</a>
            <a class="nav-item nav-link" id="nav-pagos-tab" data-toggle="tab" href="#nav-pagos" role="tab" aria-controls="nav-pagos" aria-selected="false">Pagos</a>
            <a class="nav-item nav-link" id="nav-valeras-tab" data-toggle="tab" href="#nav-valeras" role="tab" aria-controls="nav-valeras" aria-selected="false">Valeras</a>
            <a class="nav-item nav-link" id="nav-valesc-tab" data-toggle="tab" href="#nav-valesc" role="tab" aria-controls="nav-valesc" aria-selected="false">Vales Cancelados</a>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-canjes" role="tabpanel" aria-labelledby="nav-canjes-tab">
              <div class="row"> 
                <div class="table-responsive">
                  <table class="table table-bordered table-hover  table-sm mt-2">
                      <thead>
                        <tr>
                          <th scope="col" class="text-center">Folio</th>
                          <th scope="col" class="text-center">Capital</th>
                          <th scope="col" class="text-center">Cte ID</th>
                          <th scope="col" class="text-center">Nombre</th> 
                          <th scope="col" class="text-center">Fecha Entrega</th> 
                          <th scope="col" class="text-center">Quin.</th>
                          <th scope="col" class="text-center">Estatus</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr> 
                          <td  scope="col" class="text-center">001-A</td>
                          <td  scope="col" class="text-center">$ 4000.00</td>
                          <td  scope="col" class="text-center">0001</td>
                          <td  scope="col" class="text-center">JESUS MANUEL CEJA VALENCIA</td> 
                          <td  scope="col" class="text-center">2019-02-01</td> 
                          <td  scope="col" class="text-center">8</td> 
                          <td  scope="col" class="text-center">FINALIZADO</td>  
                        </tr> 
                        <tr> 
                          <td  scope="col" class="text-center">002-A</td>
                          <td  scope="col" class="text-center">$ 4000.00</td>
                          <td  scope="col" class="text-center">0002</td>
                          <td  scope="col" class="text-center">JOSE EDUARDO RUIZ HERNANDEZ</td> 
                          <td  scope="col" class="text-center">2019-02-08</td> 
                          <td  scope="col" class="text-center">10</td> 
                          <td  scope="col" class="text-center">ACTIVO</td>  
                        </tr> 
                      </tbody>
                    </table>
                  </div>
                </div>
          </div>
          <div class="tab-pane fade" id="nav-pagos" role="tabpanel" aria-labelledby="nav-pagos-tab">
            <div class="row"> 
                <div class="table-responsive">
                  <table class="table table-bordered table-hover  table-sm mt-2">
                      <thead>
                        <tr>
                          <th scope="col" class="text-center">Capturista</th>
                          <th scope="col" class="text-center">Fecha</th>
                          <th scope="col" class="text-center">Pago</th>
                          <th scope="col" class="text-center">% Bonificacion</th>  
                        </tr>
                      </thead>
                      <tbody>
                        <tr> 
                          <td  scope="col" class="text-center">MONICA MARTINEZ</td>
                          <td  scope="col" class="text-center">2019-03-15</td>
                          <td  scope="col" class="text-right">$15,000.00</td>
                          <td  scope="col" class="text-right">15.00%</td>  
                        </tr> 
                        <tr> 
                          <td  scope="col" class="text-center">MONICA MARTINEZ</td>
                          <td  scope="col" class="text-center">2019-04-01</td>
                          <td  scope="col" class="text-right">$15,000.00</td>
                          <td  scope="col" class="text-right">15.00%</td>  
                        </tr> 
                      </tbody>
                    </table>
                  </div>
                </div>
          </div>
          <div class="tab-pane fade" id="nav-valeras" role="tabpanel" aria-labelledby="nav-valeras-tab">
            <div class="row"> 
              <div class="table-responsive">
                <table class="table table-bordered table-hover  table-sm mt-2">
                    <thead>
                      <tr>
                        <th scope="col" class="text-center">Chequera Id</th>
                        <th scope="col" class="text-center">Serie</th>
                        <th scope="col" class="text-center">Folio Ini.</th>
                        <th scope="col" class="text-center">Folio Fin.</th>
                        <th scope="col" class="text-center">Fecha Entrega</th>
                        <th scope="col" class="text-center">Estatus</th>   
                        <th scope="col" class="text-center">Sucursal</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr> 
                        <td  scope="col" class="text-center">001</td>
                        <td  scope="col" class="text-center">A</td>
                        <td  scope="col" class="text-right">00001</td>
                        <td  scope="col" class="text-right">00050</td>  
                        <td  scope="col" class="text-center">2019-01-15</td>
                        <td  scope="col" class="text-right">ACTIVO</td>
                        <td  scope="col" class="text-right">CULIACAN</td>  
                      </tr>
                      <tr> 
                        <td  scope="col" class="text-center">002</td>
                        <td  scope="col" class="text-center">A</td>
                        <td  scope="col" class="text-right">00050</td>
                        <td  scope="col" class="text-right">00100</td>  
                        <td  scope="col" class="text-center">2019-04-03</td>
                        <td  scope="col" class="text-right">CANCELADO</td>
                        <td  scope="col" class="text-right">CULIACAN</td>  
                      </tr>   
                    </tbody>
                  </table>
                </div>
              </div>
          </div>
          <div class="tab-pane fade" id="nav-valesc" role="tabpanel" aria-labelledby="nav-valesc-tab">
            <div class="row"> 
              <div class="table-responsive">
                <table class="table table-bordered table-hover  table-sm mt-2">
                    <thead>
                      <tr>
                        <th scope="col" class="text-center">Chequera Id</th>
                        <th scope="col" class="text-center">Serie</th>
                        <th scope="col" class="text-center">Folio</th>
                        <th scope="col" class="text-center">Fecha</th>
                        <th scope="col" class="text-center">Comentario</th> 
                      </tr>
                    </thead>
                    <tbody>
                      <tr> 
                        <td  scope="col" class="text-center">001</td>
                        <td  scope="col" class="text-center">A</td>
                        <td  scope="col" class="text-right">00001</td>  
                        <td  scope="col" class="text-center">2019-03-15</td>
                        <td  scope="col" class="text-center">PERDIO EL VALE</td> 
                      </tr>
                      <tr> 
                        <td  scope="col" class="text-center">002</td>
                        <td  scope="col" class="text-center">A</td>
                        <td  scope="col" class="text-right">00009</td>  
                        <td  scope="col" class="text-center">2019-03-19</td>
                        <td  scope="col" class="text-center">CLIENTE PRESTA NOMBRE</td> 
                      </tr>    
                    </tbody>
                  </table>
                </div>
              </div> 
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

 <!-- Modal Incremento-->
<div class="modal fade" id="modalCreditoAD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Aumento/Decremento de Credito</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-row">
              <div class="col-md-3 col-3">
                  <label for="c_id">Id</label>
                  <input type="number" min="1" class="form-control" id="c_id" placeholder="Id" value="0"   readonly=""> 
              </div>
              <div class="col-md-9 col-9 ">
                  <label for="c_nombre ">Distribuidora</label>
                  <input type="text" class="form-control" id="c_nombre"  readonly=""> 
              </div>
              <div class="col-md-12 col-12 ">
                  <label for="c_nombre ">Monto</label>
                  <input type="text" class="form-control" id="c_nombre"   value="0" placeholder="Ingresar Monto"> 
              </div> 
              <div class="col-12">
                <label for="exampleFormControlTextarea1">Comentarios</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
          </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>

 <!-- Modal Bloque Credito-->
<div class="modal fade" id="modalBloqueo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bloqueo de Credito</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-row">
              <div class="col-md-3 col-3">
                  <label for="c_id">Id</label>
                  <input type="number" min="1" class="form-control" id="c_id" placeholder="Id" value="0"   readonly=""> 
              </div>
              <div class="col-md-9 col-9 ">
                  <label for="c_nombre ">Distribuidora</label>
                  <input type="text" class="form-control" id="c_nombre"  readonly=""> 
              </div>
              <div class="col-md-12 col-12 ">
                 <label for="c_sexo">Estatus</label>
                <select class="custom-select" id="c_sexo">
                <option selected>Seleccione una opcion</option> 
                  <option value="S">BLOQUEADO</option>
                  <option value="C">ACTIVO</option> 
                </select>
              </div>  
              <div class="col-12">
                <label for="exampleFormControlTextarea1">Comentarios</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
          </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>