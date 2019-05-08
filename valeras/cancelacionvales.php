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
              <h4>Cancelacion de Vales</h4>
            </div>
            <div class="card-body">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Cancelacion </a>
                    </li> 
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <div class="form-row mt-4">  
                            <div class="col-md-1 col-3">
                              <label for="c_cp">Dist Id</label>
                              <input type="text" class="form-control text-right" id="c_cp" placeholder="0"  required value="001">  
                            </div> 
                            <div class="col-md-4 col-10 ">
                              <label for="c_cp">Distribuidor</label>
                              <input type="text" class="form-control" id="c_cp" placeholder="Nombre Distribuidor"  required value="Manuel Gaspar Hernandez">  
                            </div>
                            <div class="col-md-1 col-2 "> 
                                <button data-toggle="modal" data-target="#modalBuscarDist" type="button" class="btn  border border-secondary btn-outline-secondary mt-4  " ><i data-toggle="tooltip" title="" data-original-title="Buscar" class="fa fa-search"></i></button>  
                            </div>  
                            <div class="col-md-2 col-10 ">
                              <label for="c_cp">Folio.</label>
                              <input type="text" class="form-control" id="c_cp" placeholder="Nombre Distribuidor"  required value="002-A">  
                            </div>
                            <div class="col-md-4">
                              <label for="exampleFormControlTextarea1">Motivo Cancelacion</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="2">CLIENTE CON ESTE VALE ES PRESTA NOMBRES</textarea>
                            </div>
                            <div class="col-md-3 col-12 mt-2 offset-md-9  ">
                                 <button class="btn btn-outline-secondary mr-2">Limpiar</button><button class="btn btn-danger ">Cancelar</button> 
                           </div>
                        </div>
                        <div class="row text-center mt-2"> 
                        <b class="mx-auto bg-info"   style="width: 100%;">Valera Distribuidor</b> 
                      </div>
                      <div class="form-row scroller-mini">
                        <div class="table-responsive">
                          <table class="table table-bordered table-hover  table-sm mt-2">
                              <thead>
                                <tr>
                                  <th scope="col" class="text-center">Dist Id</th>
                                  <th scope="col" class="text-center">Distribuidor</th>
                                  <th scope="col" class="text-center">Valera Id</th>
                                  <th scope="col" class="text-center">Serie</th>
                                  <th scope="col" class="text-center">Folio Ini.</th> 
                                  <th scope="col" class="text-center">Folio Fin.</th> 
                                  <th scope="col" class="text-center">Estatus.</th> 
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="subrallar-tabla"> 
                                  <td  scope="col" class="text-center">001</td>
                                  <td  scope="col" class="text-center">Manuel Gaspar Hernandez</td>
                                  <td  scope="col" class="text-center">001</td>
                                  <td  scope="col" class="text-center">A</td> 
                                  <td  scope="col" class="text-center">0001</td> 
                                  <td  scope="col" class="text-center">0050</td> 
                                  <td  scope="col" class="text-center">ACTIVO</td>  
                                </tr>   
                              </tbody>
                            </table>
                          </div>
                      </div>
                      <div class="row text-center mt-2"> 
                        <b class="mx-auto bg-info" style="width: 100%;">Detalles Valera</b> 
                      </div>
                      <div class="form-row scroller-mini">
                        <div class="table-responsive">
                          <table class="table table-bordered table-hover  table-sm mt-2">
                              <thead>
                                <tr>
                                  <th scope="col" class="text-center">Valera Id</th>
                                  <th scope="col" class="text-center">Serie</th>
                                  <th scope="col" class="text-center">Folio</th>
                                  <th scope="col" class="text-center">Cliente</th>
                                  <th scope="col" class="text-center">Estatus</th> 
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="subrallar-tabla"> 
                                  <td  scope="col" class="text-center">002</td>
                                  <td  scope="col" class="text-center">A</td>
                                  <td  scope="col" class="text-center">0051</td>
                                  <td  scope="col" class="text-center">JUAN JOSE ELENES PEÑA</td>
                                  <td  scope="col" class="text-center">ACTIVO</td>  
                                </tr>  
                                <tr class="subrallar-tabla"> 
                                  <td  scope="col" class="text-center">002</td>
                                  <td  scope="col" class="text-center">A</td>
                                  <td  scope="col" class="text-center">0052</td>
                                  <td  scope="col" class="text-center"></td>
                                  <td  scope="col" class="text-center">LIBRE</td>  
                                </tr>
                                <tr class="subrallar-tabla"> 
                                  <td  scope="col" class="text-center">002</td>
                                  <td  scope="col" class="text-center">A</td>
                                  <td  scope="col" class="text-center">0053</td>
                                  <td  scope="col" class="text-center"></td>
                                  <td  scope="col" class="text-center">LIBRE</td>  
                                </tr> 
                                <tr class="subrallar-tabla"> 
                                  <td  scope="col" class="text-center">002</td>
                                  <td  scope="col" class="text-center">A</td>
                                  <td  scope="col" class="text-center">0054</td>
                                  <td  scope="col" class="text-center"></td>
                                  <td  scope="col" class="text-center">LIBRE</td>  
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
 
    </div>
    <!-- /modal -->
    
    
  </div>
  <!-- /#modals -->
  <?php   include('../modals/modalValeras.php'); ?>
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
