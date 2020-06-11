<?php
    include dirname(__file__,2).'../Model/PersonaModel.php';

    $persona=new Persona();

    //Request: creacion de nuevo usuario
    if(isset($_POST['create']))
    {
        if($persona->newPersona($_POST)){
            header('location: ../View/index.php');
        }else{
            header('location: ../View/index.php');
        }
    }

    //Request: editar usuario
    if(isset($_POST['edit']))
    {
        if($persona->setEditPersona($_POST)){
            header('location: ../View/index.php');
        }else{
            header('location: ../View/index.php');
        }
    }

?>