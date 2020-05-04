<html lang="en">

<head>
    <title>Lost Item</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">
        <script src="script/register.js"></script>
    <style>
        .from-center {
            margin: 15% auto;
            padding: 2% auto;
            width: 50%;
        }

        input {
            background: transparent;
            border-top: transparent !important;
            border-left: transparent !important;
            border-right: transparent !important;
            border-bottom: 1px solid !important;
            padding-left: 0;
        }

        input:active {
            outline: none !important;
        }

        @media screen and (max-width: 900px) {
            .from-center {
                width: 90%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="lost_process.php" method="POST" id="myInput" onsubmit="return Validate()" name="valid_form" class="from-center text-danger" enctype="multipart/form-data">
            <a href="" class="my-3">
            </a>
            <h4 class="my-3 text-dark">Enter Your
                <i>Lost Item/Person</i> Details</h4>
            <?php // Item Name?>
            <div class="form-group item_name_div">
                <input type="text" name="item_name" id="item_name" class="form-control" placeholder="Enter Item Name">
                <div id="itemname_error"></div>
            </div>
            
            <div class="form-group item_details_div">
                <input type="text" name="item_details" id="item_details" class="form-control" placeholder="Enter Item Details">
                <div id="itemname_error"></div>
            </div>

            <div class="form-group item_desc_div">
                <textarea rows="5" cols="75" placeholder="Enter Item Description" name="item_desc" id="item_desc" class="form-control"></textarea>
                <div id="itemname_error"></div>
            </div>
            <div class="form-group _location_div">
                <input type="text" name="_location" id="_location" class="form-control" placeholder="Enter Location Where you Missed the Item...">
                <div id="itemname_error"></div>
            </div>
            <div class="form-group item_image_div ">
                <input type="file" name="image" id="image">
                <div id="itemname_error"></div>
            </div>
            
            
            
            <div class="d-sm-flex">
                <button class="btn btn-primary ml-auto" id="submit" type="submit" name="submit" id="submit" value="submit">Post</button>
            </div>
        </form>
    </div>


</body>

</html>
