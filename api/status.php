<?php

include('config.php');
header("Content-Type:application/json");
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');

$data = json_decode(file_get_contents("php://input"), true);
$type = @$_POST['type'];
if ($type == 1)
{
    global $con;
    $ip = $_POST['ip'];
    $page= $_POST['page'];
    if ($ip != null)
    {
        $getCurrentCount = $con -> query("SELECT count FROM visit_count WHERE page_name = '$page' ");
        echo json_encode($page);

    }
    
}

?>







