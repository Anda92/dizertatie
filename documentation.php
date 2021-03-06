 <!DOCTYPE html>

    <html lang="en">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">



        <title>Documentation</title>
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
		}
	.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}
.list {
	font-size: 20px;
}

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
            <a href="#" class="navbar-brand">Bioarchaeology research</a>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="hometry.php">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="">More <b class="caret"></b></a>
                    <ul class="dropdown-menu">
						<li class="active"><a href="documentation.html">Documentation</a></li>
                        <li><a href="research.php">Research</a></li>
                        <li><a href="register.php" class="lang" key="Register">Register</a></li>
                        <li class="divider"></li>

                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
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
            </ul>
        </div>
    </nav>
</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1,12,4/jquery.min.js"></script>

		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		 <div class="container-fluid">
	   <div class="jumbotron">
	   <h1><b>Important bones in determination</b><h1>

		<img src="img/skeleton.jpg" class="center" alt="Human skeleton" style="width:70%">
		<div class="row">

            <div class="col-xs-4">

                <h3>The upper arm</h3>
				<div class="bs-example">
				 <div class="box">
					<img src="img/hand.jpg" class="center" alt="The upper arm" style="width:80%">
					 <button type="button" class="btn btn-details1 center-block" onclick="location.href = 'UpperArm.php';">Details</button>

				</div>
				</div>
				</div>
				<div class="row">

            <div class="col-xs-4">

                <h3>Clavicle</h3>
				<div class="bs-example">
				 <div class="box">
					<img src="img/clavicle.jpg" class="center" alt="Clavicle" style="width:80%">
					<button type="button" class="btn btn-details2 center-block" onclick="location.href = 'Clavicle.php';">Details</button>
				</div>
				</div>
				</div>

				<div class="row">

            <div class="col-xs-4">

                <h3>Leg</h3>
				<div class="bs-example">
				 <div class="box">
					<img src="img/leg.jpg" class="center" alt="Leg" style="width:80%">
					<button type="button" class="btn btn-details3 center-block" onclick="location.href = 'Leg.php';">Details</button>
				</div>
				</div>
				</div>




		<h1><b>Age determination</b></h1>
		<h2><i>Dental eruption</i></h2>
		<p>The erupted teeth are observed, the length of the root, the teeth in the alveolus but not erratic.</p>
		<p>Written according to the chart below:</p>
		 <img src="img/dental.jpg" class="img-d" alt="Dental eruption" style="width:100%">

		 <h2><i>The length of the bones</i></h2>


		<h3>HUMERUS</h3>
		 <img src="img/humerus.png" class="img-d" alt="Humerus length" style="width:100%">
		<h3>FEMUR</h3>
		<img src="img/femur.png" class="img-d" alt="Fenur length" style="width:100%">

		<h1><b>Physical activity</b></h1>
		<h2><i>Musculoskeletal Markers</i></h2>
		<p>Musculoskeletal Markers (MSM) are analyzed according to the visual reference system initiated by Mariotti et al. (2004). The scoring system consists of four scores, attributed to the increase of MSM expression, in which 0 is attributed to the absence of markers, and 3 suggests a strong expression thereof. For missing bones, the score for those regions is 0. This method involves visual scoring giving descriptive examples, photographic images of varying degrees of MSM. The scores were scored on both sides, both straight and left</p>
		<p>The analyzed bones are humerus, radius, ulna, clavicula, femur, tibia, fibula.What we are interested in is the place of insertion of different muscles. These can be found in the document below.</p>
		<button type="button" class="btn btn-outline-dark" onclick="location.href = 'doc/MSM-Protocol.pdf';">MSM-Protocol</button>
		<p>Some types of activities that could create MSM:</p>

		<li class="list">The presence of markers on the surface of the clavicle at the location of Deltoid and Pectoralis Major could be caused by activities such as throwing different objects (spear throwing).</li>
		<li class="list">At the humerus level, the presence of these three markers, Teres Major, Pectoralis Major, Latissimus Dorsi, suggests the following possible activities, responsible for stress at this level: flexion and repetitive extension of the arm.

If they only appear on a particular part of the body, it can be deduced whether the individual was either right-handed or left-handed.</li>
		<li class="list">At the radius level is a very small number of cases of MSM occurrence. Most often observed was in the insertion area of the Abductor muscle. This marker often appears to masonry, baker, water transport, or farmer.</li>
		<li class="list">At the insertion site of the Abductor and Brachialis muscles, the appearance of the MSM can be observed on the ulna surface. These markers developed into fur traders, those who used to travel by boat, hunters, and those involved in various battles.</li>
		<li class="list">If at the level of the femur we deal with Gluteus Maximus and Gastrocnemius, the activities aimed at the appearance of these MSM are skiing, riding, football, driving, activities that require stabilization of the hip under stress conditions.Also on the surface of the femur can be seen Linea Aspera. Its occurrence is encouraged by sea-related activities, fishing or driving habits.</li>
		<li class="list">Tibial can be seen Soleus, indicating a semi-flexed leg posture. Among the occupations that could trigger this marker marker would be the fur dealer who runs from one side to the other and transports heavy packages or driver</li>


				</div>

	</body>

</html>