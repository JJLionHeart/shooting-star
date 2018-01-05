<?php
/*
$archivo = fopen("text.txt", "a+");
$text = $_GET["texto"];
echo $text;
fwrite($archivo, $text);
fclose($archivo);
echo "done";
 */
$name = _POST["name"];
$response = array("text"=>"Hello ".$name);
echo json_encode($response);
?>
