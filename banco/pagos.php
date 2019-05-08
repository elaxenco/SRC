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
    <div class="container mt-5"  >
        <div class="card ">
            <div class="card-header bg-primary text-white">
              <h4>Pagos</h4>
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

              <div class="form-row mt-2"> 
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
              </div> 

              <div class="row mt-5">
                <div class="col-md-7 col-12  "> 
                  <div class="col-12 ">
                    <div class="row">
                      <div class="col-md-5 col-12 ">Saldo Vencido :</div>
                      <div class="col-md-7 col-12 text-left "><b  id="saldoVencido">0.00</b></div>
                    </div> 
                  </div>
                  <div class="col-12 ">
                    <div class="row">
                      <div class="col-md-5 col-12 ">Pago :</div>
                      <div class="col-md-7 col-12 text-left "><b   id="pagoNormal">0.00</b></div>
                    </div> 
                  </div>
                  <div class="col-12 ">
                    <div class="row">
                      <div class="col-md-5 col-12 ">Saldo Exigible :</div>
                      <div class="col-md-7 col-12 text-left "><b  id="saldoExigible">0.00</b></div>
                    </div> 
                  </div>
                  <div class="col-12 ">
                    <div class="row">
                      <div class="col-md-5 col-12 ">Saldo Total :</div>
                      <div class="col-md-7 col-12 text-left "><b  id="saldoTotal">0.00</b></div>
                    </div> 
                  </div>  
                </div>
                <div class="col-md-5 col-12 ">
                  <div class="col-12">
                    <b><label for="b_tipo_pago">Tipo de Pago</label></b>
                    <select class="custom-select" id="b_tipo_pago" onchange="seleccionarTipoPago(this.value)">
                      <option selected value="0">Seleccione una opcion</option>   
                      <option  value="1">Abono</option> 
                      <option  value="2">Pago Exigible</option>   
                    </select>
                  </div> 
                  <div id="divMontoBanco" class="col-12"  >
                     <b><label for="b_monto ">Monto</label></b>
                      <input  readonly type="text" class="form-control" id="b_monto" placeholder="Ingrese Abono" onkeypress="return soloNumeros(event)"  required> 
                  </div> 
                  <div class="col-md-12 col-12 mt-2 ">
                       <button class="btn btn-outline-secondary mr-2">Limpiar</button><button class="btn btn-success ">Guardar</button> <button class="btn btn-secondary " data-toggle="tooltip" title="" data-original-title="Imprimir" disabled=""><i class="fa fa-print"></i></button>  
                 </div>
                </div> 
              </div>
 
            </div>
          </div>
 
 
    </div>
    <!-- /#page-content-wrapper -->
    
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
