<?php
	mysql_set_charset('utf8');
	$conectar = mysql_connect('localhost', 'mcarer', '******') or die('No se puede conectar al servidor.' );
	mysql_select_db('mcarer_db', $conectar) or die('No se puede conectar con la base de datos.');
?>
