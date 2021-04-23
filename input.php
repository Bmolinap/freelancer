<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$destino = 'benjo.molina@gmail.com';
$titulo = 'Hola - La Webera';
 
$contenido = "Nombre: ". $nombre . $telefono . "\ntelefono:" ."\n E-Mail: ". $email . "\n Mensaje: ". "\n $mensaje";
mail($destino, "Contacto", $contenido); 


//if ($_POST['submit']) {
//if (mail ($para, $titulo, $msjCorreo)) {
//echo 'El mensaje se ha enviado';
//} else {
//echo 'Falló el envio';
//}
//}
?>