<?php
/*
$archivo = fopen("text.txt", "a+");
$text = $_GET["texto"];
echo $text;
fwrite($archivo, $text);
fclose($archivo);
echo "done";
 */
$sock = socket_create_listen(12345);
socket_getsockname($sock, $addr, $port);
echo "listening on $addr:$port";
$c = socket_accept($sock);
socket_getpeername($c, $raddr, $rport);
print "Received connection from $raddr:$rport\n";
socket_close($sock);
?>
