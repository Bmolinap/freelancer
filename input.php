<?php
$destino = "benjo.molina@gmail.com";
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

 
$contenido = "Nombre: ". $nombre  . "\ntelefono:" . $telefono ."\n E-Mail: ". $email . "\n Mensaje: ". "\n $mensaje";
mail($destino, "Contacto", $contenido); 
header("location:index.php");


//if ($_POST['submit']) {
//if (mail ($para, $titulo, $msjCorreo)) {
//echo 'El mensaje se ha enviado';
//} else {
//echo 'Falló el envio';
//}
//}
?>