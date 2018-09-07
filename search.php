

<!DOCTYPE html>

    <html lang="en">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Science</title>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Including jQuery is required. -->

   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

   <!-- Including our scripting file. -->

   <script type="text/javascript" src="scripts.js"></script>

   <!-- Including CSS file. -->

   <link rel="stylesheet" type="text/css" href="style.css">

            </head>
   <body>
<div class="container-fluid">
    <nav class="navbar navbar-inverse">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Bioarchaeology research</a>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li ><a href="hometry.php">Home</a></li>
                <li class="active"><a href="search.php">Profile</a></li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="">More <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="documentation.html">Documentation</a></li>
                        <li><a href="research.php">Research</a></li>
                        <li><a href="register.php" class="lang" key="Register">Register</a></li>
                        <li class="divider"></li>

                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">

                              <?php

session_start(); //gets session id from cookies, or prepa

if (session_id() == '' || !isset($_SESSION['username'])) { //if sid exists and login for sid exists

?>

<li><a href="login.php"class="lang" key="Login">Login</a></li>


<?php

} else {

  echo  "Hi, " . $_SESSION['username'];


?>


<li><a href="logout.php"class="lang" key="Logout">Logout</a></li>

<?php

}


    //connect to database

    $connection=mysqli_connect("localhost","root","","bioarchaeology");
        ?>


        </div>
    </nav>
</div>
            </ul>
        </div>
    </nav>
</div>


        <style type="text/css">


             img{
        margin: 10px;
    }
    .img_bio{
        margin: 20px;
    }
     .box{
        width: 50%;
}

td {
    padding: 5px !important;
    border: 1px solid black;
}


.


        </style>





        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1,12,4/jquery.min.js"></script>

        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

       <div class="container-fluid">
       <div class="jumbotron">

<div class="search">

<!-- Search box. -->


   <input type="text" id="search" placeholder="Search Reports by name" />



   <!-- Suggestions will be displayed in below div. -->

   <div id="display"></div>
</div>


</div>
</div>

</html>