<?php
    include dirname(__file__,2).'../Model/ResultadoModel.php';

    $resultado=new Resultado();

    //Request: creacion de nuevo examen
    if(isset($_POST['create']))
    {
        if($resultado->newResultado($_POST)){
            header('location: ../View/Resultado.php');
        }else{
            header('location: ../View/index.php');
        }
    }

    //Request: editar examen
    if(isset($_POST['edit']))
    {
        if($resultado->setEditResultado($_POST)){
            header('location: ../View/index.php');
        }else{
            header('location: ../View/index.php');
        }
    }

?>