//Declarar la función para validar el login
function validar(){
    var correo, contraseña, expReg;                                 // Se declara las variables
    correo = document.getElementById("correo").value;              // getElementById().value; trae el valor del   
    contraseña = document.getElementById("contra").value;          // input seleccionado por el id 
    expReg = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/; //expresion regular para el correo

    if(correo.length<1 || correo.length>50){           //Validación para la longitud de carácteres del correo;
        alert("Correo inválido");                      //El correo no puede ser menor a 1 o mayor a 50 
        return false;                                  //Por la longitud de carácteres permitidos en la base de datos
    }                                                  //.length evalúa la cantidad de carácteres de la variable
    else if(!expReg.test(correo)){                      //Hace un test de la expresion regular en la variable
        alert("Correo inválido"); //devuelve una alerta
        return false;  // Devuelve false, para que no se siga ejecutando la página
    } 
    else if(contraseña.length<1 || contraseña.length>50){
        alert("Contraseña inválida")
        return false;
    }
    return true;

}