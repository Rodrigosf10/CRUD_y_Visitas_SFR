<?php
    require_once "../class/Conexion.php";
    require_once "../class/Metodos.php";

    $objeto = new Metodos();
    $id = $_GET['id'];
    
    if ($objeto->eliminarDatos($id)==1) {
        header("location:../vistas.php");
    }else{
        echo "Fallo al eliminar";
    }
?>