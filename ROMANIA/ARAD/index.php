<?php
header("Access-Control-Allow-Origin: *");

require_once "../functions.php";
require_once "arad.php";

			
echo json_encode($arad, JSON_PRETTY_PRINT);

?>
