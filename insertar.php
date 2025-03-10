<?php
if (!isset($_REQUEST['mensa'])) {
	die("No he recibido datos");
	}
// este script espera recibir un objeto JSON con los campos del mensaje (autor y mensaje)
// Esta cadena JSON es enviada en un parametro llamado "mensa"
$mensa=json_decode($_REQUEST['mensa']);
$consulta ="INSERT INTO mensajes VALUES ('".date('U')."','".$mensa->autor."','".$mensa->mensaje."',NULL);";
$bd=new SQLite3("chat.db");
$resultado = $bd->query($consulta);
if ($resultado->numColumns() && $resultado->columnType(0) != SQLITE3_NULL) { 
    // Si la inserción es incorrecta devuelve false
    echo "0";
} else { 
    // Si no devuelve true
    echo "1";
} 
?>