<?php
    class Conexion{
        public static function conectar(){
            $servidor = "localhost";
            $usuario = "root";
            $password = "";
            $bd = "visitas";
            $conexion = mysqli_connect($servidor, $usuario, $password, $bd);
            return $conexion;
        }
    }

    $objeto = new Conexion();
    if ($objeto->conectar()) {
        //echo "Conexion Exitosa";
        //echo "<hr>";
    }else{
        //echo "Conexion Fallida";
    }
?>