
function validarUsuario(){
var usuario,formato;
usuario = document.getElementById("usuario").value;
formato= /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
if (formato.test(usuario)){
 
   
   } else {
    alert("Bienvenido Administrador: " +usuario);
    
   }
}