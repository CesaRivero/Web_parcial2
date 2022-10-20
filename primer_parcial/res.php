<?php
include_once "header.php";
?>
<h1>¡Gracias por compartir!<br>Tratare de leerte lo antes posible.</h1>
<p>Se ha cargado la info</p>
<ul>
    <?php
    if(isset($_POST['nombre'])){
        $nombre=$_POST['nombre'];
        print"<li>Nombre:$nombre</li>";

    }
    if(isset($_POST['apellido'])){
        $apellido=$_POST['apellido'];
        print"<li>Apellido:$apellido</li>";

    }
    if(isset($_POST['correo'])){
        $correo=$_POST['correo'];
        print"<li>Correo Electronico:$correo</li>";

    }
    if(isset($_POST['consulta'])){
        $consulta=$_POST['consulta'];
        print"<li>Consulta:$consulta</li>";

    }
    
    move_uploaded_file($_FILES['file']
    ['tmp_name'],"files/".$_FILES['file']['name']);
    ?>
</ul>

<?php
include_once "footer.php";
?>
