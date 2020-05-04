
</head>

<body translate="no">
    <header class="sticky-top">
        <div class="container-fluid">
            <div class="row" style="background-color: rgb(38, 31, 30);">
                <div class="col-md-2 col-sm-12">
                    <a href="main.php" class="mx-auto">
                        <img src="Images/logo2.png" alt="logo" class="img-fluid" height="100" width="120">
                    </a>
                </div>
                <div class="col-md py-2 col-sm-12">
                    <form action="search.php" autocomplete="off" method="GET" action="product.php">
                        <div class="autocomplete" style="width:300px;">
                            <input id="myInput" type="text" name="product_image" value="" placeholder="Search...">
                        </div>
                        <input type="submit" class="btn btn-primary" name="Search" onclick="return search()" value="Search">
                    </form>
                </div>
                
                <div class="col-md-3 d-flex">
                    <div class="">
                            <a href="lost.php" class="btn btn-primary m-auto" role="button">Lost Item</a>
                            <a href="found.php" class="btn btn-primary m-auto" role="button">Found Item</a>

                        <a href="http://localhost/traceout/logout.php">
                            <i class="px-2 py-2 text-white social_link far fa-user-circle" data-toggle="tooltip" title="LogOut"></i>
                        </a>
                        <span id="uname" class="font-weight-bold"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?php
        if(empty($_SESSION)) // if the session not yet started 
        {
            session_start();
            if (!isset($_SESSION['username']))
            {

            }
            else
            {
                echo "<script>
                        document.getElementById('uname').innerHTML = '".$_SESSION['username']."';
                    </script>";
            }
        }
        
    ?>