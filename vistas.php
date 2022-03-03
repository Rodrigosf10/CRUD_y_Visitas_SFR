<?php
    include "./header.php";
    include "./menu.php";
    include "./footer.php";
?>
<div class="container border p-5 mb-4 ml-4 mr-4 bg-light rounded-3" style="margin-top: 100px;">
    <h1 class="display-5 fw-bold text-center">CRUD con contador de Visitas</h1>
    <br>
    <table class="table table-striped table-hover table-bordered border-dark table-rounded text-center table-condensed">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>IP</th>
                <th>Fecha</th>
                <th>Navegador utilizado</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <?php
            require_once "./class/Conexion.php";
            require_once "./class/Metodos.php";
            $objeto = new Metodos();
            $sql = "SELECT id,ip,fecha,navegador FROM contador";
            $datos = $objeto->mostrarDatos($sql);
            foreach($datos as $key){
        ?>
        <tbody>
            <tr>
                <td><?php echo $key['id'] ?></td>
                <td><?php echo $key['ip'] ?></td>
                <td><?php echo $key['fecha'] ?></td>
                <td><?php echo $key['navegador'] ?></td>
                <td><a href="./actualizar.php?id=<?= $key['id'] ?>"><i class="fas fa-pencil-alt fs-4" style="color: blue;"></i></a></td>
                <td><a href="./procesos/eliminar.php?id=<?= $key['id'] ?>"><i class="fas fa-trash-alt fs-4" style="color: red;"></i></a></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>