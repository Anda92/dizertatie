 <!DOCTYPE html>

    <html lang="en">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Clavicle</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<style type="text/css">


			 img{
        margin: 10px;
    }
	.img_bio{
    	margin: 20px;
    }
	 .box{
        width: 50%;

		</style>

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
            <a href="#" class="navbar-brand">Clavicle</a>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="documentation.php">Back</a></li>
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

  echo "Hi, " . $_SESSION['username'];

?>

<li><a href="logout.php"class="lang" key="Logout">Logout</a></li>

<?php

}


    //connect to database

    $connection=mysqli_connect("localhost","root","","bioarchaeology");
        ?>

            </ul>
        </div>
    </nav>
</div>
			<img src="img/clavic.png" class="img-d" alt="Humerus" style="width:100%">
			<p class= "text-center" style="color:white;">CLAVICLE</p>

			</body>

</html>