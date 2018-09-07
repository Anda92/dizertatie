<?php
function myfunctions(){
    $age_bones=calculate_age_bones();
    $age_teeth=calculate_age_teeth();
    $activity=activity();
    echo $age_bones, $age_teeth, $activity;
}
?>