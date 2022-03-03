<?php  
	require_once "../class/Conexion.php";
	require_once "../class/Metodos.php";

	$id = $_POST['id'];
	$nuevaIp = $_POST['ip'];
	$nuevaFecha = $_POST['fecha'];
    $nuevoNavegador = $_POST['navegador'];
	$datos = array($nuevaIp, $nuevaFecha, $nuevoNavegador, $id);
	$objeto = new Metodos();

	if($objeto->actualizarDatos($datos)==1){
		header("location:../vistas.php");
	}else{
		echo "Fallo al actualizar";
	}
?>