<?php
    require_once "class/Conexion.php";
    include "./header.php";
    include "./footer.php";

    $objeto = new Conexion();
    $conexion = $objeto->conectar();
    $id = $_GET['id'];
    $sql = "SELECT ip,fecha,navegador FROM contador WHERE id='$id'";
    $result = mysqli_query($conexion, $sql);
    $informacion = mysqli_fetch_row($result);
?>

<div class="jumbotron jumbotron-fluid">
    <div class="container border border-dark rounded" style="background-color: white; margin-top: 100px;">
        <h1 class="display-4 text-center"><b>Actualizar Registro</b></h1>
        <hr style="background-color: black;">
        <p class="lead">
            <form action="procesos/actualizar.php" method="POST" class="alert alert-warning border border-dark" role="alert">
                <input type="text" name="id" hidden value="<?= $id ?>">    
                <label for="">Direccion IP: </label>
                <input type="text" name="ip" required="" class="form-control" autocomplete="off" value="<?= $informacion[0] ?>">
                <br>
                <label for="">Fecha: </label>
                <input type="datetime" name="fecha" required="" class="form-control" autocomplete="off" value="<?= $informacion[1] ?>">
                <br>
                <label for="">Navegador: </label>
                <input type="text" name="navegador" required="" class="form-control" autocomplete="off" value="<?= $informacion[2] ?>">
                <br>
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4 text-center"><button type="submit" class="btn btn-success mt-2">Actualizar</button></div>
                    <div class="col-sm-4"></div>
                </div>
            </form>
        </p>
    </div>
</div>