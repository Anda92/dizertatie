<!DOCTYPE html>
<html lang="en">
<head>
  <title>Research</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <script src="js/jquery-3.3.1.min.js"></script>
          <script src="ajax_r.js"></script>
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
                <li><a href="search.php">Profile</a></li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle " href="">More <b class="caret"></b></a>
                    <ul class="dropdown-menu">

						<li><a href="documentation.html">Documentation</a></li>
                        <li class="active" ><a href="research.html">Research</a></li>
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



<div class="img">
<img src="img/activities.jpg" class="left" alt="activities" style="width:33%">
<img src="img/teeth1.jpg" class="center" alt="teeth" style="width:33%">
<img src="img/bone.jpg" class="right" alt="bone" style="width:33%">
</div>

<div class="btn">
<!-- Trigger the modal with a button -->
  <button type="button" class="btn1 btn-success btn-lg " data-toggle="modal" data-target="#modal1" >Research Time</button>
</div>

<style>
.btn1{
	display: inline-block;
	   margin: 50px 50px;

}

.btn1:hover {
    background-color: black;
    color: white;
  }
.modal-dialog{
  width: 70%;
}

</style>
<div class="container">

  <!-- Modal -->
  <div class="modal fade" id="modal1" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>

                <form class="form" action="reports.php" method="post" id="testName">
                 <div class="form-group">
      <h4>Skeleton Name:</h4>
      <input type="name" class="form-control" id="skeleton" placeholder="Enter Skeleton Name"  name="skeleton">
    </div>

              <h4 class="modal-title">The length of the bone</h4>
        </div>

        <div class="modal-body">


    <div class="form-group">
      <h5>Humerus length(mm):</h5>
      <input type="text" class="form-control" id="humerus" placeholder="Enter Humerus length in mm"  name="humerus">
    </div>
    <div class="form-group">
      <h5>Femur length(mm):</h5>
      <input type="text" class="form-control" id="femur" placeholder="Enter Femur length in mm"  name="femur">
    </div>


          <h4 class="modal-title">Dental eruption</h4>

        <div class="modal-body">


    <div class="form-group">
      <h5>Erupted primary teeth:</h5>
      <input type="text" class="form-control" id="erupted" placeholder="Enter number of  teeth"  name="erupted">
    </div>
        <div class="form-group">
      <h5>Erupted permanent teeth:</h5>
      <input type="text" class="form-control" id="erupted2" placeholder="Enter number of  teeth"  name="erupted2">
    </div>
    <div class="form-group">
      <h5>Unerupted teeth:</h5>
      <input type="text" class="form-control" id="unerupted" placeholder="Enter number  teeth" name="unerupted">
</div>



          <h4 class="modal-title">Musculoskeletal Markers(MSM)</h4>

        <div class="modal-body">

		   <div class="form-group">
      <label class="sr-only" for="humerus">Humerus MSM:</label>
	  <p>Humerus MSM:</p>
      <div class="checkbox">
      <label><input type="checkbox" name="msm[]" value="Kayaking,"><i>Teres Major</i></label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="msm[]" value="Rowing,"><i>Pectoralis Major</i></label>
    </div>
    <div class="checkbox disabled">
      <label><input type="checkbox" name="msm[]" value="Flexion and repetitive extension,"><i>Latissimus Dorsi</i></label>
    </div>
	<label class="sr-only" for="radius">Radius MSM:</label>
	<p>Radius MSM:</p>

    <div class="checkbox">
      <label><input type="checkbox" name="msm[]" value="Masonry work, the baker's work, wather transport, fermer's work,"><i>Abductor Pollicis Longus</i></label>
    </div>
   <div class="checkbox">
      <label><input type="checkbox" name="msm[]" value="Carrying heavy loads with the elbows bent,"><i>Biceps</i></label>
    </div>

	<label class="sr-only" for="ulna">Ulna MSM:</label>
	<p>Ulna MSM:</p>
      <div class="checkbox">
      <label><input type="checkbox" name="msm[]" value="travel by boat, hunters, involved in various battles,"><i>Brachialis</i></label>
    </div>

	<label class="sr-only" for="clavicle">Clavicle MSM:</label>
	<p>Clavicle MSM:</p>
      <div class="checkbox">
      <label><input type="checkbox" name="msm[]" value="throwing with objects,"><i>Deltoidus</i></label>
    </div>
          <div class="checkbox">
      <label><input type="checkbox" name="msm[]" value="using a double-bladed paddle,"><i>Costoclavicle ligament</i></label>
    </div>
          <div class="checkbox">
      <label><input type="checkbox" name="msm[]" value="chopping wood, carring bunden on the shoulders and/or upper back,"><i>Conoid ligament</i></label>
    </div>

	<label class="sr-only" for="femur">Femur MSM:</label>
	<p>Femur MSM:</p>
      <div class="checkbox">
      <label><input type="checkbox" name="msm[]" value="sea-related activities, fishing,"><i>Linea Aspera</i></label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="msm[]" value="skiing, riding,"><i>Gluteus Maximus</i></label>
    </div>
	<div class="checkbox">
      <label><input type="checkbox" name="msm[]" value="playing footbal, driving,"><i>Gastrocnemian</i></label>
    </div>

	<label class="sr-only" for="tibia">Tibia MSM:</label>
	<p>Tibia MSM:</p>
    <div class="checkbox">
      <label><input type="checkbox" name="msm[]" value="runs, transports heavy packages."><i>Soleus</i></label>
    </div>


<button type="button" onclick="allfunctions()">Click Me</button>

  </form>
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
</div>






<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal2").modal();
    });
});
</script>




</body>
</html>
