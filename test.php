<?php
$archivo = fopen("test.txt", "a+");
$text = $_GET["texto"];
fwrite($archivo, $text);
fclose($archivo);

?>
