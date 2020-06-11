<?php
    include dirname(__file__,2).'../Model/ValidarUsuario.php';

    $usuario=new Usuario();

    //Request: creacion de nuevo usuario
    if(isset($_POST['consult']))
    {
        if($usuario->newUsuario($_POST)){
            header('location: ../View/index.php');
        }else{
            header('location: ../View/index.php');
        }
    }


?>