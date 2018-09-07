
<?php
include "db.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bioarchaeology";


$l_humerus = $_POST["humerus"];
$l_femur = $_POST["femur"];
function calculate_age_bones($l_humerus,$l_femur){

$age_h = 0;
$age_f = 0;

    if($l_humerus<117 AND $l_humerus> 90){
        $age_h=1;
    }
    if($l_humerus<127 AND $l_humerus>116){
    $age_h=1.5;
}
    if($l_humerus<137 AND $l_humerus>126){
        $age_h=2;
}
        if($l_humerus<145 AND $l_humerus>136){
        $age_h=2.5;
}
        if($l_humerus<153 AND $l_humerus>144){
        $age_h=3;
}
            if($l_humerus<160 AND $l_humerus>152){
        $age_h=3.5;
}
            if($l_humerus<169 AND $l_humerus>159){
        $age_h=4;
}
            if($l_humerus<176 AND $l_humerus>168){
        $age_h=4.5;
}
            if($l_humerus<190 AND $l_humerus>175){
        $age_h=5;
}
            if($l_humerus<202 AND $l_humerus>189){
        $age_h=6;
}
            if($l_humerus<216 AND $l_humerus>201){
       $age_h=7;
}
            if($l_humerus<228 AND $l_humerus>215){
        $age_h=8;
}
            if($l_humerus<239 AND $l_humerus>227){
        $age_h=9;
}
            if($l_humerus<251 AND $l_humerus>238){
        $age_h=10;
}
            if($l_humerus<265 AND $l_humerus>250){
        $age_h=11;
}
        if($l_humerus<287 AND $l_humerus>264){
        $age_h=12;
    }


if($l_femur<153 AND $l_femur>133){
    $age_f=1;
}
if($l_femur<170 AND $l_femur>152){
    $age_f=1.5;
}
if($l_femur<185 AND $l_femur>169){
    $age_f=2;
}
if($l_femur<198 AND $l_femur>184){
    $age_f=2.5;
}
if($l_femur<211 AND $l_femur>197){
    $age_f=3;
}
if($l_femur<223 AND $l_femur>210){
    $age_f=3.5;
}
if($l_femur<235 AND $l_femur>222){
    $age_f=4;
}

if($l_femur<247 AND $l_femur>234){
    $age_f=4.5;
}
    if($l_femur<268 AND $l_femur>246){
    $age_f=5;
}
if($l_femur<288 AND $l_femur>267){
    $age_f=6;
}
if($l_femur<309 AND $l_femur>287){
    $age_f=7;
}
if($l_femur<328 AND $l_femur>308){
    $age_f=8;
}
if($l_femur<347 AND $l_femur>327){
    $age_f=9;
}
if($l_femur<367 AND $l_femur>346){
    $age_f=10;
}
    if($l_femur<387 AND $l_femur>366){
    $age_f=11;
}
if($l_femur<403 AND $l_femur>386){
    $age_f=12;
}


$age_b = ($age_h + $age_f)/2;
return $age_b;

}



$msm=$_POST['msm'];
function activity($msm){

if(empty($msm))
     {
       echo("You didn't select any marker.");
      }
      else
      {
      $N = count($msm);

        for($i=0; $i < $N; $i++)
        {
         echo($msm[$i] . " ");
     }
    }
}


$e_pr= $_POST["erupted"];
$e_pe= $_POST["erupted2"];
$unerupt= $_POST["unerupted"];
$age_t=0;
function calculate_age_teeth($e_pr, $e_pe. $unerupt){
if($e_pr>4 AND $e_pr<10 AND $e_pe=0 AND $unerupt>28 AND $unerupt<32){

 $age_t=0;
}



if($e_pr>9 AND $e_pr<19 AND $e_pe=0 AND $unerupt>21 AND $unerupt<31){

        $age_t=2;
}

if($e_pr>18 AND $e_pr<21 AND $e_pe=0 AND $unerupt>23 AND $unerupt<27){
        $age_t=3;
}

if($e_pr=28 AND $e_pe=0 AND $unerupt=28  ){
        $age_t=4;

if($e_pr>17 AND $e_pr<23 AND $e_pe>1 AND $e_pe<5 AND $unerupt>23 AND $unerupt<25){
        $age_t=6;

}
}

if($e_pr>20 AND $e_pr<23 AND $e_pe=0 AND $unerupt>23 AND $unerupt<27){
        $age_t=5;

}

if($e_pr>17 AND $e_pr<23 AND $e_pe>1 AND $e_pe<5 AND $unerupt>23 AND $unerupt<25){
        $age_t=6;

}
if($e_pr>11 AND $e_pr<15 AND $e_pe>7 AND $e_pe<11 AND $unerupt>15 AND $unerupt<19){
        $age_t=7;

}

if($e_pr>9 AND $e_pr<13 AND $e_pe>9 AND $e_pe<13 AND $unerupt>13 AND $unerupt<17){
        $age_t=8;

}
if($e_pr>9 AND $e_pr<13 AND $e_pe>9 AND $e_pe<13 AND $unerupt>16 AND $unerupt<20){
        $age_t=9;

}
if($e_pr>3 AND $e_pr<7 AND $e_pe>15 AND $e_pe<19 AND $unerupt>11 AND $unerupt<15){
        $age_t=10;

}
if($e_pr=0 AND $e_pe>21 AND $e_pe<25 AND $unerupt>5 AND $unerupt<9){
        $age_t=11;

}

if($e_pr=0 AND $e_pe>24 AND $e_pe<29 AND $unerupt>1 AND $unerupt<5){
        $age_t=12;

}
return $age_t;
}

function myfunctions(){
    $age_bones=calculate_age_bones();
    $age_teeth=calculate_age_teeth();
    $activity=activity();
    return $age_bones, $age_teeth, $activity;
}

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

<?php
echo  $age_bones, $age_teeth, $activity ;
?>
