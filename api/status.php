<?php

header("Content-Type:application/json");
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');
include('config.php');


$data = json_decode(file_get_contents("php://input"), true);
$type = @$data['type'];
$APP_URL = 'https://jataq.com/john';

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

if($type == 3) {
    global $APP_URL;
    $response = array();
    $getAllProducts = $con -> query("SELECT * FROM products ORDER BY id DESC");
    while($product = mysqli_fetch_array($getAllProducts)) {
        $response[] = array(
            "product_id" => $product['id'],
            "product_name" => $product['name'],
            "product_price" => $product['price'],
            "product_image" => $product['image'],
            "purchased" => false
        );
    }
    echo json_encode($response);
}
if($type == 4) {
    $name = htmlspecialchars(mysqli_real_escape_string($con, $data['name']));
    $email = htmlspecialchars(mysqli_real_escape_string($con, $data['email']));
    $phone = htmlspecialchars(mysqli_real_escape_string($con, $data['phone']));
    $message = htmlspecialchars(mysqli_real_escape_string($con, $data['message']));

    $insertMessage = $con -> query("INSERT INTO contact(name, email, phone, message) VALUES('$name', '$email', '$phone', '$message')");
    if($insertMessage) {
        $to = "ahadaman757@gmail.com";
        $subject = "This is subject";
        
        $message = "<b>This is HTML message.</b>";
        $message .= "<h1>This is headline.</h1>";
        
        $header = "From:ahadaman757@gmail.com \r\n";
        $header .= "Cc:afgh@somedomain.com \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";
        
        $retval = mail ($to,$subject,$message,$header);
        $response = array(
            "response" => 1
        );
        echo json_encode($response);
    }
    else {
        $response = array(
            "response" => 0
        );
        echo json_encode($response);
    }
}

?>