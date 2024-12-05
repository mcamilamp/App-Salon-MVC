<?php

// doble foreach porque nuestro array tiene una key que hay que identificar
// y despues se accede a los mensajes

foreach($alertas as $key => $mensajes):
    foreach($mensajes as $mensaje):

?>

    <div class="alerta <?php echo $key; ?> ">
        <?php echo $mensaje; ?>
    </div>

<?php

    endforeach;
endforeach;


?>