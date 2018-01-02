<?php
$archivo = fopen("test.txt", "a+");
$text = $_GET["texto"];
echo $text;
fwrite($archivo, $text);
fclose($archivo);
echo "done";
?>
