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
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#direccion" role="tab" aria-controls="direccion" aria-selected="false">Direccion</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#propiedad" role="tab" aria-controls="propiedad" aria-selected="false">Propiedad</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#referencias" role="tab" aria-controls="referencias" aria-selected="false">Referencias</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#aval" role="tab" aria-controls="aval" aria-selected="false">Aval</a>
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
                <div class="tab-pane fade mt-2" id="propiedad" role="tabpanel" aria-labelledby="contact-tab">
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
                <div class="tab-pane fade mt-2" id="referencias" role="tabpanel" aria-labelledby="contact-tab">
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
                <div class="tab-pane fade mt-2" id="aval" role="tabpanel" aria-labelledby="contact-tab"> 
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