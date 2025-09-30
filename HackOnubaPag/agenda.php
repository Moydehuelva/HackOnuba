<?php include_once 'includes/templates/header.php';?>

<section class="seccion contenedor">
    <h2>Calendario de eventos</h2>
    <?php
        try {
            require_once('includes/funciones/bd_conexion.php');
            $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, nombre_invitado, apellido_invitado   ";
        $sql .= "FROM eventos ";
        $sql .= "INNER JOIN categoria_evento ";
        $sql .= "ON eventos.id_categoria = categoria_evento.id_categoria ";
        $sql .= "INNER JOIN invitados ";
        $sql .= "ON eventos.invitado_id = invitados.invitado_id ";
        $sql .= "ORDER BY evento_id";
            $resultado = $conn->query($sql);
        } catch (Exception $e) {
            $error = $e->getMessage();
        }
    ?>
    <div class="calendario">
    <?php while ($eventos = $resultado->fetch_all(MYSQLI_ASSOC) ) { ?>
        


        <?php foreach($eventos as $evento): ?>
            <div class="dia">
                <p class="titulo"><?php echo utf8_encode($evento['nombre_evento']); ?></p>
                <p class= "hora"><?php echo $evento['fecha_evento'] . " " . $evento['hora_evento'] . "hrs"; ?></p>
                <p class="cat_evento"><?php echo ($evento['cat_evento']); ?></p>
                <p class="Invitado"><?php echo utf8_encode($evento['nombre_invitado'] . " " . $evento['apellido_invitado']); ?></p>
            </div>

        <?php endforeach; ?>

           
    <?php } ?>

    </div>
   

</sectioon>
<?php
 $conn->close();
 ?>


<?php include_once 'includes/templates/footer.php'; ?>        

