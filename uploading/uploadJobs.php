<?php
include "../connect_to_mysql.php";
echo "Request Receive\n";
$entityBody = file_get_contents('php://input');
print_r(json_decode($entityBody, true)["data"]);