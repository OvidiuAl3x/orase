<?php
header("Access-Control-Allow-Origin: *");
require_once "../functions.php";
require_once "bacau.php";

			
echo json_encode($bacau, JSON_PRETTY_PRINT);

?>
