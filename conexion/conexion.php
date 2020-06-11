<?php

class conexion {

    private static $host = "localhost:3306";
    private static $user = "root";
    private static $pwd = "";
    private static $bd = "plataforma";

    public static function conectar() {
        return mysqli_connect(conexion::$host, conexion::$user, conexion::$pwd, conexion::$bd);
    }

}
?>