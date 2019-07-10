<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App; 


// GET Todos los clientes 
$app->post('/api/users', function(Request $request, Response $response){
    $res=array();
    $datos=array(); 
    $funciones= new Funciones();  
    $mysqli =  $funciones->con();
    $i=0;

    $user = $request->getParam('user');
    $pass = $request->getParam('pass');
 
    $sql="SELECT * FROM usuarios WHERE usuario='axel' AND password = MD5('$pass')"; 
    $resultado= mysqli_query($mysqli, $sql); 
    while ($res = mysqli_fetch_row($resultado)){
         $datos[$i]['id'] 	= $res[0]; 
         $datos[$i]['nombre'] 		= $res[3];  

         $i++;
    } 

     
    if(empty($datos)){ 
	    $datos[0]['respuesta'] 		= 0; 
		echo json_encode( $datos ); 
	}
	else{
		$datos[0]['respuesta'] 		= 1; 
	    echo json_encode( $datos ); 
	}  
}); 

?>