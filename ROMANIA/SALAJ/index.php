<?php
header("Access-Control-Allow-Origin: *");
require_once "../functions.php";
require_once "salaj.php";

			
echo json_encode($salaj, JSON_PRETTY_PRINT);

?>
