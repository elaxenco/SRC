<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App; 


// GET Todos los clientes 
$app->get('/api/clientes', function(Request $request, Response $response){
    $res=array();
    $datos=array(); 
    $funciones= new Funciones();  
    $mysqli =  $funciones->con();
    $i=0;

    $sql="SELECT * FROM clientes limit 120000"; 
    $resultado= mysqli_query($mysqli, $sql); 
    while ($res = mysqli_fetch_row($resultado)){
         $datos[$i]['cliente_id'] 	= $res[0]; 
         $datos[$i]['nombre'] 		= $res[1] ;  

         $i++;
    } 

     echo  json_encode(  $datos );

  /* try{
   $db = new db();
    $db = $db->conectDB();
    $resultado = $db->query($sql); 
    if ($resultado->rowCount() > 0){
 
      $clientes = $resultado->fetchAll(PDO::FETCH_OBJ);
      foreach ($clientes as $cliente){ 
        $datos[$i]['id'] 	= $cliente->id;
        $datos[$i]['appaterno'] 	= $cliente->appaterno;
        $datos[$i]['appmaterno'] 	= $cliente->apmaterno;
        $datos[$i]['fecha_nacimiento'] 	= $cliente->fecha_nacimiento;
        $datos[$i]['ife'] 	= $cliente->ife;
        $i++;
       }

     echo  json_encode($datos);
    }else {
      echo json_encode("No existen clientes en la BBDD.");
    }
     $resultado = null;
    $db = null;
  }catch(PDOException $e){
    echo '{"error" : {"text":'.$e->getMessage().'}}';
  }  */
}); 

?>