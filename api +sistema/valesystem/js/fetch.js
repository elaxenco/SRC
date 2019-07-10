function fetchFunction( ruta,datos,respuesta ) {  
  
    fetch(`http://localhost/apirest/public/api/${ruta}`,{
        method:'POST',
        body:datos
    })
    .then(resp=>resp.json())
    .then(data=>{
        respuesta(data);
    })
}
