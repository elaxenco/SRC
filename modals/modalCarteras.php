

 <!-- Modal Incremento-->
<div class="modal fade" id="modalCarteras" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Creacion de Cartera</h5>
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
                  <label for="c_nombre ">Descripcion</label>
                  <input type="text" class="form-control" id="c_nombre" > 
              </div>
              <div class="col-12 ">
                   <label for="c_sexo">Coordinador</label>
                  <select class="custom-select" id="c_sexo">
                  <option selected>Seleccione una opcion</option> 
                    <option value="1">MIGUEL ANGEL PARRA RUIZ</option> 
                    <option value="2">MARCO CESAR CORVERA</option> 
                  </select>
              </div> 
              <div class="col-12 ">
                   <label for="c_sexo">Sucursal</label>
                  <select class="custom-select" id="c_sexo">
                  <option selected>Seleccione una opcion</option> 
                    <option value="1">CULIACAN</option> 
                    <option value="2">MOCHIS</option> 
                  </select>
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
