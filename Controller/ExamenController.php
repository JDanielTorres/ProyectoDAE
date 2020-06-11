<?php
    include dirname(__file__,2).'../Model/ExamenModel.php';

    $examen=new Examen();

    //Request: creacion de nuevo examen
    if(isset($_POST['create']))
    {
        if($examen->newExamen($_POST)){
            header('location: ../View/index.php');
        }else{
            header('location: ../View/index.php');
        }
    }

    //Request: editar examen
    if(isset($_POST['edit']))
    {
        if($examen->setEditExamen($_POST)){
            header('location: ../View/index.php');
        }else{
            header('location: ../View/index.php');
        }
    }

?>