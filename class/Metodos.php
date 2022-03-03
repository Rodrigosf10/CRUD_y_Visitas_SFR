<?php
    class Metodos{
        public function mostrarDatos($sql){
            $conexion = Conexion::conectar();
            $result = mysqli_query($conexion, $sql);
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        public function insertarDatos($ip,$navegador){
            $conexion = Conexion::conectar();
            $sql = "INSERT INTO contador (ip,fecha,navegador) VALUES ('$ip',now(),'$navegador')";
            $result = mysqli_query($conexion, $sql);
            return $result;
        }
        public function actualizarDatos($datos){
            $conexion = Conexion::conectar();
            $sql = "UPDATE contador SET ip='$datos[0]', fecha='$datos[1]', navegador='$datos[2]' WHERE id='$datos[3]'";
            $result = mysqli_query($conexion, $sql);
            return $result;
        }
        public function eliminarDatos($id){
            $conexion = Conexion::conectar();
            $sql = "DELETE FROM contador WHERE id='$id'";
            $result = mysqli_query($conexion, $sql);
            return $result;
        }
    }
?>