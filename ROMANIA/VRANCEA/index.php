<?php
header("Access-Control-Allow-Origin: *");
require_once "../functions.php";
require_once "vrancea.php";

			
echo json_encode($vrancea, JSON_PRETTY_PRINT);

?>
