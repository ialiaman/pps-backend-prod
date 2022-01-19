<?php

include('config.php');
header("Content-Type:application/json");
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');

$data = json_decode(file_get_contents("php://input"), true);
$type = @$data['type'];
if ($type == 1)
{
    global $con;
    $ip = $data['ip'];
    $page= $data['page'];
    if ($ip != null)
    {
        $getCurrentCount = $con -> query("SELECT count FROM visit_count WHERE page_name = '$page' ");

        $count = mysqli_fetch_assoc($getCurrentCount);
        $newcount = intVal($count['count'])+1;

        $querycount = "UPDATE visit_count set count = '$newcount' WHERE page_name = '$page'";
        $querycount_run = mysqli_query($con,$querycount);
        if($querycount_run)
        {
            $data = array("response" => 1);
            echo json_encode($data);
        }
        else
        {
            $data = array("response" => 0);
            echo json_encode($data);
        }
    }
    else
    {
        $data = array("No IP Address Recieved");
        echo json_encode($data);
    
    } 
}
else
{
    $data = array("Type not Same");
    echo json_encode($data);
}

// if ($type == 2)
// {
//     global $con;
//     $ip = $_POST['ip'];
//     $page= $_POST['page'];
//     if ($ip != null)
//     {
//         $getCurrentCount = $con -> query("SELECT count FROM visit_count WHERE page_name = '$page' ");

//         $count = mysqli_fetch_assoc($getCurrentCount);
//         $newcount = intVal($count['count'])+1;

//         $querycount = "UPDATE visit_count set count = '$newcount' WHERE page_name = '$page'";
//         $querycount_run = mysqli_query($con,$querycount);
//         if($querycount_run)
//         {
//             echo json_encode('1');
//         }
//         else
//         {
//             echo json_encode('0');
//         }
//     }
//     else
//     {
//         echo json_encode('No IP Address Recieved');
//     } 
// }
// else
// {
//     echo json_encode('Type not Same');
// }

?>







