<?php
$archivo = fopen("text.txt", "a+");
$text = $_GET["texto"];
echo $text;
fwrite($archivo, $text);
fclose($archivo);
echo "done";
?>
