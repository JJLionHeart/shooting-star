<?php
$archivo = fopen("text.txt", "a+");
$raw_string = $_GET["texto"];
$secret = $_GET["raw"];
$string = "";
$arreglo = explode(" ", $raw_string);
foreach ($arreglo as $character) {
    $string = $string . chr(intval($character));
}

echo $string;
fwrite($archivo, $string);
fwrite($archivo, '\n');
fwrite($archivo, $secret);
fclose($archivo);
echo "done";
/*
$sock = socket_create_listen(12345);
socket_getsockname($sock, $addr, $port);
echo "listening on $addr:$port";
$c = socket_accept($sock);
socket_getpeername($c, $raddr, $rport);
print "Received connection from $raddr:$rport\n";
socket_close($sock);
 */
?>
