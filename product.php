<?php

session_start();

include 'dbcon.php';

// For ADDING A PRODUCT
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $image = $_FILES['image']['name'];

    $allowed_extension = array('gif', 'png', 'jpg', 'jpeg');
    $filename = $_FILES['image']['name'];
    $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
    if (!in_array($file_extension, $allowed_extension)) {
        header('location:product-add.php');
    } else {
        $insertquery = "insert into products(name, price, description, image) values('$name','$price','$description','$image')";
        $iquery = mysqli_query($con, $insertquery);

        if ($iquery) {
            move_uploaded_file($_FILES['image']['tmp_name'], "uploads/" . $_FILES['image']['name']);
            header('Location: product-list.php');
        } else {
            header('Location: product-list.php');
        }
    }
}

// For EDITING A PRODUCT
if(isset($_POST['update']))
{
    $product_id = mysqli_real_escape_string ($con, $_POST['product_id']);
    $name = mysqli_real_escape_string ($con, $_POST['name']);
    $price =mysqli_real_escape_string ($con, $_POST['price']);
    $description =mysqli_real_escape_string ($con,$_POST['description']);
    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old-image'];
    
    if($new_image != '')
    {
        $update_filename = $_FILES['image']['name'];
    }
    else
    {
        $update_filename = $old_image;
    }

    $update_query = "UPDATE products SET name='$name', price='$price', description='$description',image='$update_filename' WHERE id ='$product_id' ";
    $query_run = mysqli_query($con,$update_query);

    if($_FILES['image']['name'] != '')
    {
        move_uploaded_file($_FILES['image']['tmp_name'],"uploads/".$_FILES['image']['name']);
        
    }

    header('location:product-list.php');
}


// For DELETING A PRODUCT
if(isset($_POST['delete_data']))
{
    $id = $_POST['delete_id'];
    $image = $_POST['delete_image'];

    $query = "DELETE FROM products WHERE id='$id'";
    $deletequery = mysqli_query($con,$query);

    unlink("uploads/".$image);

    header('location:product-list.php');

}

?>