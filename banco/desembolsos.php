<!DOCTYPE html>
<html lang="en">

<head> 
   
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content=""> 
  <link rel="icon" type="image/png" href="" />

  <title>Solucion Respaldo de Confianza</title>

  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet"> 
  <!-- Custom styles for this template -->
  <link href="../css/simple-sidebar.css" rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


</head>

<body>

  <div class="d-flex" id="wrapper">

   <?php   include('../menu/menu.php'); ?>

    <!-- Page Content -->
    <div id="page-content-wrapper">
    
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom"> 
          <button id="buttonL"  class="mr-1 ml-1 menu-toggle" data-toggle="tooltip" onclick="this.style.display='none',document.getElementById('buttonR').style.display='block'" data-placement="right" title="Ocultar Menu"><i class="fas fa-angle-double-left"></i></button>
           <button id="buttonR"  class="mr-1 ml-1 menu-toggle" data-toggle="tooltip" onclick="this.style.display='none',document.getElementById('buttonL').style.display='block'" data-placement="right" title="Ver Menu"><i class="fas fa-angle-double-right"></i></button>
      </nav>
       <div class="container mt-5 "  >
          <div class="card ">
            <div class="card-header bg-primary text-white">
              <h4>Desembolsos</h4>
            </div>
            <div class="card-body">

              <div class="form-row  ">
                <div class="col-md-4 col-12 ">
                       <label for="c_sexo">Sucursal</label>
                      <select class="custom-select" id="c_sexo">
                      <option selected>Seleccione una opcion</option> 
                        <option value="1">CULIACAN</option> 
                        <option value="2">MOCHIS</option>
                        <option value="3">MAZATLAN</option>
                      </select>
                  </div>
              </div>

              <div class="form-row mt-2 "> 
                  <div class="col-md-1 col-3">
                    <label for="c_cp">Dist Id</label>
                    <input type="text" class="form-control text-right" id="c_cp" placeholder="0"  required value="001">  
                  </div> 
                  <div class="col-md-4 col-7 ">
                    <label for="c_cp">Distribuidor</label>
                    <input type="text" class="form-control" id="c_cp" placeholder="Nombre Distribuidor"  required value="Manuel Gaspar Hernandez">  
                  </div>
                  <div class="col-md-1 col-2 "> 
                      <button data-toggle="modal" data-target="#modalBuscarDist" type="button" class="btn  border border-secondary btn-outline-secondary mt-4  " ><i data-toggle="tooltip" title="" data-original-title="Buscar Distribuidora" class="fa fa-search"></i></button>  
                  </div>  
                  <div class="col-md-6">
                    <div class="row text-center mt-2"> 
                    <b class="mx-auto bg-info"   style="width: 98%;">Datos Desembolso</b> 
                  </div>
                  </div>
                  
              </div>
              <div class="form-row">
                <div class="col-md-1 col-3">
                    <label for="c_cp">Cte Id</label>
                    <input type="text" class="form-control text-right" id="c_cp" placeholder="0"  required value="001">  
                  </div> 
                  <div class="col-md-4 col-7 ">
                    <label for="c_cp">Cliente</label>
                    <input type="text" class="form-control" id="c_cp" placeholder="Nombre Distribuidor"  required value="Jesus Manuel Salas Labrada">  
                  </div>
                  <div class="col-md-1 col-2 "> 
                      <button data-toggle="modal" data-target="#modalBuscarCte" type="button" class="btn  border border-secondary btn-outline-secondary mt-4  " ><i data-toggle="tooltip" title="" data-original-title="Buscar Cliente" class="fa fa-search"></i></button>  
                  </div> 
                  <div class="col-md-2 col-12 ">
                    <label for="c_cp">Folio</label>
                    <input type="text" class="form-control" id="c_cp" placeholder="Folio"  required value="">  
                  </div> 
                  <div class="col-md-2 col-12 ">
                     <label for="c_sexo">Monto</label>
                      <select class="custom-select" id="c_sexo">
                      <option selected>0.00</option> 
                        <option value="1">1000.00</option> 
                        <option value="2">1500.00</option>
                        <option value="3">2000.00</option>
                      </select> 
                  </div>
                  <div class="col-md-2 col-12 ">
                     <label for="c_sexo">Quincenas</label>
                      <select class="custom-select" id="c_sexo">
                      <option selected>0</option> 
                        <option value="1">4</option> 
                        <option value="2">6</option>
                        <option value="3">8</option>
                      </select> 
                  </div>
                  <div class="col-md-3 col-12 mt-2 offset-md-9  ">
                       <button class="btn btn-outline-secondary mr-2">Limpiar</button><button class="btn btn-success ">Guardar</button> <button class="btn btn-secondary " data-toggle="tooltip" title="" data-original-title="Imprimir" disabled=""><i class="fa fa-print"></i></button>  
                 </div>
              </div>

              <div class="form-row">
                <div class="col-md-6 col-12">
                   
                </div>
                <div class="col-md-6 col-12 scroller-mini">
                   <div class="row text-center mt-2"> 
                    <b class="mx-auto bg-info"   style="width: 98%;">Corrida</b> 
                    </div>
                  <div class="table-responsive">

                    <table class="table table-bordered table-hover  table-sm mt-2">
                        <thead>
                            <tr>
                              <th scope="col" class="text-center">#</th>
                              <th scope="col" class="text-center">Fecha</th> 
                              <th scope="col" class="text-center">Pago</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="subrallar-tabla"> 
                              <td>1</td>
                              <td>2019-01-15</td> 
                              <td>450</td>  
                            </tr>
                            <tr class="subrallar-tabla"> 
                              <td>2</td>
                              <td>2019-01-30</td> 
                              <td>450</td>  
                            </tr>
                            <tr class="subrallar-tabla"> 
                              <td>3</td>
                              <td>2019-02-15</td> 
                              <td>450</td>  
                            </tr>
                            <tr class="subrallar-tabla"> 
                              <td>4</td>
                              <td>2019-02-28</td> 
                              <td>450</td>  
                            </tr> 
                          </tbody>
                      </table>
                   </div>
                </div>
              </div>
            </div>
          </div>
          
       </div>
 
    </div>
    <!-- /modal -->
    
    
  </div>
  <!-- /#modals -->
  <?php   include('../modals/modalBanco.php'); ?>
  <!-- /#modals -->
  <script type="text/javascript">
    document.getElementById('m_distribuidores').classList.remove('bg-light');
    document.getElementById('m_distribuidores').classList.add('bg-blue-grey'); 
  </script>

  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
  <script type="text/javascript" src="../js/js.cookie.js"></script>
  <script type="text/javascript" src="../js/ajax.js"></script>
  <script type="text/javascript" src="../js/utileria.js"></script> 
  <script type="text/javascript" src="../js/menu.js"></script>   
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script> 
  <script type="text/javascript" src="../js/popper.min.js"></script> 

   

</body>

</html>
