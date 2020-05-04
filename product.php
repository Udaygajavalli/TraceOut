<?php 
    session_start();
    include("inc/db_connect.php");
    include("inc/head_element.php");
?>
<?php 
if(isset($_GET['Submit']))
    {
        $itemname = $_GET['item_name'];
        //$details = $_GET['item_details'];
        $query = "SELECT * FROM lost_item WHERE item_name = '$itemname'";

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        //echo "details".$row['item_details'];
        /*echo "<script type='text/javascript' >
                document.getElementById('item_name').innerHTML='""';
                document.getElementById('image').src='data:image/jpeg;base64,'".base64_encode($row['image'])."';
                document.getElementById('item_description').innerHTML='".$row['item_description']."';
             </script>";*/
    }
?>

<title>Details</title>
<link rel="stylesheet" href="style/css.css">
<?php include("inc/header.php"); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 py-3">
            <?php echo'  
                     <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"  name="image"  class="img-fluid w-100 " /> '; ?> 
            </div>
            <div class="col-8 py-3">
                 <div class="h-5">
                    <div id="item_name" name="item_name">
                        <?php echo "<br><h1>".$itemname."</br></h1>";?></div>
                    <hr>
                    <div id="item_description" name="item_description">Description
                        <?php echo "<br><h2>".$row['item_description']."</br></h2>";?></div>
                    </div>
                    <hr>
                    <div id="item_description" name="item_description">Details
                        <?php echo "<br><h2>".$row['item_details']."</br></h2>";?></div>
                        Location:<?php echo "<br><h5>".$row['location']."</br></h5>";?>
                    </div>
                    <div id="item_description" name="item_description">Location
                        <?php echo "<br><h6>".$row['location']."</br></h6>";?></div>
                    </div>
                    <hr>
                </div>
        </div>
    </div>
<?php

    if(isset($_GET['Submit']))
    {
        $unique = $_GET['item_name'];
        $query = "SELECT * FROM lost_item WHERE item_name = '$unique'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        echo "<script type='text/javascript' >
                document.getElementById('item_name').innerHTML='".$unique."';
                document.getElementById('image').src='data:image/jpeg;base64,'".base64_encode($row['image'])."';
                document.getElementById('item_description').innerHTML='".$row['item_description']."';
             </script>";
    }
?>
<?php include("inc/footer.php"); ?>