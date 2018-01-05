<?php
/*
$archivo = fopen("text.txt", "a+");
$text = $_GET["texto"];
echo $text;
fwrite($archivo, $text);
fclose($archivo);
echo "done";
 */
$sock = socket_create_listen(0);
socket_getsockname($sock, $addr, $port);
echo $port;

socket_close($sock);
?>
