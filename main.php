<?php 
    include("inc/db_connect.php");
    include("inc/head_element.php");
?>
<title>TraceOut</title>
<link rel="stylesheet" href="style/css.css">
<?php include("inc/header.php"); ?>

<main>
      
        

    <div class="products-container text-center position-relative">
    <?php
            $sql_query = "SELECT * FROM lost_item";	
            $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
            while( $row = mysqli_fetch_assoc($resultset) ) {
    ?>
        <div class="d-inline-block col-md-3 border m-3 box-shadow" style="border-radius: 10px;">
            <form action="product.php" method="GET"  style="cursor: pointer">
                <button class="bg-white border-0 outline-none p-1" type="submit" style="border-radius: 10px;" name="Submit">
                    <div>
                       <?php echo'  
                            <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"  name="image"  class="img-fluid w-100 " /> '; ?>    
                    </div>
                    <div class="bg-light">
                        <h6 name="item_name" id="item_name">
                            <?php echo $row["item_name"]; ?>                            
                        </h6>
                        <div style="text-align:left"> <?php echo $row["location"]; ?></div>
                        <div style="text-align:right"> <?php echo $row["time"]; ?></div>                        
                    </div>    
                    <input name="item_name" id="<?php echo $row["item_name"]; ?>" type="hidden" value="<?php echo $row["item_name"]; ?>">
               
               </button>
            </form>
        </div>
        <?php } ?>
   
    </div>

</main>
<?php include('inc/footer.php');?>