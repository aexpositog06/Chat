<?php
$consulta ="SELECT * FROM mensajes ORDER BY fecha DESC;";
$bd=new SQLite3("chat.db");
$resultado = $bd->query($consulta);
if ($resultado != false) { 
	$mensajes=array();
	while($fila = $resultado->fetchArray(SQLITE3_ASSOC)) { 
		$mensajes[] = $fila; 
	} 
	echo json_encode($mensajes);
}
?>