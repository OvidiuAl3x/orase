<?php
header("Access-Control-Allow-Origin: *");
require_once "../functions.php";
require_once "calarasi.php";

			
echo json_encode($calarasi, JSON_PRETTY_PRINT);

?>
