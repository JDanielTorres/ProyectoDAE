<?php
include dirname(__file__,2)."/Model/Conexion.php";



$usuario= $_POST['usuario'];
$pass= $_POST['pass'];

$conn;
$link;

$conn   = new Conexion();

$link = $conn->conectarse();



if(filter_var($usuario, FILTER_VALIDATE_EMAIL)){
    $query  ="SELECT * FROM persona WHERE email = '$usuario' and pass = '$pass'";

}else {
    $query  ="SELECT * FROM usuario WHERE usuario = '$usuario' and pass = '$pass'";
}



$result =mysqli_query($link,$query);

$filas=mysqli_num_rows($result);

$persona= mysqli_fetch_array($result);

if($filas>0){
    
            
    session_start();
    $_SESSION['usuario'] = $usuario;
    $_SESSION['id'] = $persona['id_persona'];

    header("location:../View/index.php");
}else{
    echo 'no existe el usuario';
}

mysqli_free_result($result);
mysqli_close($link);



?>