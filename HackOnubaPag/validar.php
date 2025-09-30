<?php include_once 'includes/templates/header.php';?>
<section class= "secccion contenedor">
    <h2>Resumen registro</h2>
    <?php if(isset($_POST['submit']));
    //datos
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $ent_dia = $_POST['ent_dia'];
    $ent_event = $_POST['ent_event'];



    try {
        require_once('includes/funciones/bd_conexion.php');
        $stmt = $conn->prepare("INSERT INTO asistentes (nombre, apellido, email, ent_dia, ent_event) VALUE (?,?,?,?,?)");
        $stmt->bind_param("sssii", $nombre, $apellido, $email, $ent_dia, $ent_event);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }catch (Exception $e) {
        $error = $e->getMessage();
    }


?>
<h3>Registro efectuado con exito</h3>


<a type="button" href="index.php" id="btnVolver" class="button" value="Inicio">Inicio</a>
</section>







<?php include_once 'includes/templates/footer.php'; ?> 