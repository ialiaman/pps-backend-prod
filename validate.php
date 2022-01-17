<?php

    session_start();

    include 'dbcon.php';

    if(isset($_POST['submit'])){

        $email = $_POST['email'];
        $password = $_POST['password'];

        $email = mysqli_real_escape_string($con,$email);

        $email_search = "select * from users where email ='$email'";
        $query = mysqli_query($con,$email_search);

        $email_count = mysqli_num_rows($query);

        if($email_count){
            
            $email_pass = mysqli_fetch_assoc($query);

            $_SESSION['email'] = $email_pass['email'];

            $_SESSION['firstname'] = $email_pass['first_name'];

            $_SESSION['lastname'] = $email_pass['last_name'];

            $db_pass = $email_pass['password'];

            $pass_decode = password_verify($password , $db_pass);
           
            if($pass_decode){

                echo "Successful";
				header('Location: dashboard.php');
            
			}else{

                echo "Failed -> Password Not Matched";
            }
   
         } else{
        echo "Invalid Email";
        }
    }
?>
