
<?php

session_start();
    //connect to database

    $connection=mysqli_connect("localhost","root","","bioarchaeology");


        ?>


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
                <li class="active"><a href="hometry.php">Home</a></li>
                <li><a href="search.php">Profile</a></li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="">Account <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="documentation.html">Documentation</a></li>
                        <li><a href="research.html">Research</a></li>
                        <li><a href="register.php" class="lang" key="Register">Register</a></li>
                        <li class="divider"></li>

                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                    </span>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"class="lang" key="Logout">Logout</a></li>
            </ul>
        </div>
    </nav>
</div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1,12,4/jquery.min.js"></script>

        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

       <div class="container-fluid">
       <div class="jumbotron">

        <h1><?php if(isset($_SESSION['username'])){
    echo "Welcome '{$_SESSION['username']}'";
}
?></h1>
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

</html>

