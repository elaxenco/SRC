var formularioLogin  = document.getElementById('loginForm');

formularioLogin.addEventListener("submit", function(e){
    e.preventDefault(); 
    var datos = new FormData(formularioLogin);
    fetchFunction('users',datos,(data)=>{
        switch(data[0].respuesta){
            case 0:
                    mensajeAlerta('El usuario o contraseña no son validos.','error');
                break;
            case 1:
                    mensajeAlerta('Ingresando.','success');
                break;
        }
    })
});

