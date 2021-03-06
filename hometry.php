 <!DOCTYPE html>



    <html lang="en">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">



        <title>Science</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                <li class="active"><a href="hometry.php">Home</a></li>
                <?php if(isset($_SESSION['username'])) { ?>
                    <li><a href="search.php">Profile</a></li>
                <?php } ?>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="">More <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <?php if(isset($_SESSION['username'])) { ?>
                            <li><a href="documentation.html">Documentation</a></li>
                            <li><a href="research.php">Research</a></li>
                        <?php } ?>
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







<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>




		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1,12,4/jquery.min.js"></script> -->

		<script src="./js/jquery-3.3.1.min.js"></script>
		<script src="./js/bootstrap.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	   <div class="container-fluid">
	   <div class="jumbotron">
		<h1>Evolution of age and activity</h1>
		<p>I thought this application to help scientists, bioarhologists trying to restore physical activity made by a man during his lifetime, and the age he had at the time of his death</p>
		<p>Due to this, the working time should be considerably reduced, and it is not necessary to continue searching in different work protocols in order to interpret the results</p>
        <div class="row">

            <div class="col-xs-4">

                <h2>Bioarchaeology</h2>
				<div class="bs-example">
				 <div class="box">
					<img src="./img/bioarchaeology.jpg" class="img-responsive" alt="Bioarchaeology">

				</div>
				</div>
                <p>Bioarchaeology is the study of bones and other biological materials found in archaeological sites designed to provide information on people's lives and the environment in the past. The term bioarheology was first used in 1972 by British archaeologist Grahame Clark in his study on animal bones.</p>
                <p><a href="bioarchaeology.html" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>

            </div>

            <div class="col-xs-4">

                <h2>Age</h2>

				<div class="bs-example">
				 <div class="box">
					<img src="./img/age.jpg" class="img-responsive" alt="Age">

				</div>
				</div>

                <p>Determining a man's age at the time of death is not a complicated thing. Several methods are known for this, and two of them will be used within the application. The first method is based on the observation of the dental eruption, and the second is based on the measurement of the bone length.</p>



            </div>

            <div class="col-xs-4">

                <h2>Activity</h2>

				<div class="bs-example">
				 <div class="box">
					<img src="./img/activity.jpg" class="img-responsive" alt="Activity">

				</div>
				</div>
                <p>Reconstitution of the lifestyles of past populations has been possible due to the research of the morphology of the insertion sites of the muscles. Muscles have the ability to leave different markers on the bones at the insertion site of the muscle, ligament, or archeological tendon.</p>
                <p><a href="activity.html" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>

            </div>

        </div>

        <hr>

        <div class="row">

            <div class="col-xs-12">
			<footer>
				<p>&copy; Copyright 2018 Anda_S</p>
			</footer>
		</div>
	</div>
</div>
</div>


</body>

</html>