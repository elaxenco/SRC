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
       <div class="container-fluid"  >

        <h3 class="mt-2">Lista Distribuidoras</h3>
        <hr>
          <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Filtro
                      </button>
                    </h2>
                  </div>

                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body"> 
                    </div>
                  </div>
                </div>
                <div class="card"> 
                </div> 
      
          </div>

          <div class="card mt-2">
              <div class="card-header bg-primary" id="headingOne">
                <a  class="btn btn-success float-right text-light" data-toggle="modal" data-target="#modalDistribuidoras"><i class="fa fa-plus"></i> Nuevo Cliente</a>
                <h4 class="mb-0 text-light"> 
                    Distribuidoras 
                </h4>
              </div>
 
                <div class="card-body"> 
                  <table class="table table-sm table-hover table-bordered">
                    <thead>
                      <tr>
                        <th scope="col" class="text-center">ID</th>
                        <th scope="col" class="text-center">Nombre</th>
                        <th scope="col" class="text-center">CURP</th>
                        <th scope="col" class="text-center">Sucursal</th>
                        <th scope="col" class="text-center">Estatus</th>
                        <th scope="col" class="text-center">Acciones</th>
                      </tr>
                    </thead>
                    <tbody> 
                      <tr>
                        <td scope="col" class="text-right">00001</td>
                        <td scope="col" class="text-left">MARIA MAGDALENA CRUZ NEVAREZ</td>
                        <td scope="col" class="text-center">CRNM920626</td>
                        <td scope="col" class="text-center">CULIACAN</td>
                        <td scope="col" class="text-center">ACTIVO</td>
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
 
    </div>
    <!-- /#page-content-wrapper -->
    
  </div>
  <!-- /#modals -->
  <?php   include('../modals/modals.php'); ?>
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
