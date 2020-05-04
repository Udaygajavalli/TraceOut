<?php 
include("inc/db_connect.php");//connect the connection page
include("inc/header.php");
if (isset($_POST['item_name']))
{
    $username = $_SESSION['username'];
    $item_name = $_POST['item_name'];

    $item_details = $_POST['item_details'];
    $item_desc = $_POST['item_desc'];
    $location = $_POST['_location'];
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
    

    $query = "INSERT INTO lost_item (username, item_name, item_details, item_description, location, image, time) VALUES ('$username','$item_name', '$item_details ', '$item_desc', '$location', '$file',CURRENT_TIMESTAMP)";
    $result = mysqli_query($conn, $query);
    if(($result))
    {
    
        header("Location: http://localhost/traceout/main.php"); /* Redirect browser */
        echo '<script>alert("Posted successfully....")</script>';
       
    }
}
?>
