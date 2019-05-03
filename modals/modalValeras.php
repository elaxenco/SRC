 <!-- Modal Incremento-->
<div class="modal fade" id="modalBuscarDist" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buscar Distribuidoras</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-row"> 
              <div class="col-md-12 col-12 ">
                  <label for="c_nombre ">Distribuidora</label>
                  <input type="text" class="form-control" id="c_nombre" placeholder="Buscar Distribuidora"> 
              </div> 
              <div class="col-12 scroller-mini">
                 <div class="table-responsive">
                  <table class="table table-bordered table-hover  table-sm mt-2">
                      <thead>
                        <tr>
                          <th scope="col" class="text-center">ID</th>
                          <th scope="col" class="text-center">Nombre</th>
                          <th scope="col" class="text-center">Surcursal</th> 
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="subrallar-tabla"> 
                          <td>001</td>
                          <td>Manuel Gaspar Hernandez</td> 
                          <td>CULIACAN</td>
                        </tr> 
                        <tr class="subrallar-tabla"> 
                          <td>002</td>
                          <td>Francisco R Serrano</td> 
                          <td>CULIACAN</td>
                        </tr> 
                        <tr class="subrallar-tabla"> 
                          <td>003</td>
                          <td>Jesus Perez Lopez</td> 
                          <td>CULIACAN</td>
                        </tr>
                        <tr class="subrallar-tabla"> 
                          <td>004</td>
                          <td>Maria Antonieta Velarde</td> 
                          <td>CULIACAN</td>
                        </tr> 
                      </tbody>
                    </table>
                 </div>
              </div>
          </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button> 
      </div>
    </div>
  </div>
</div>