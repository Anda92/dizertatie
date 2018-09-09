<?php
require_once('db.php');
if(isset($_POST['submit_password']) && $_POST['key'] && $_POST['reset'])
{
  $email=$_POST['email'];
  $pass=md5($_POST['password']);
  $select=mysqli_query($con, "update accounts set password='$pass' where md5(email)='$email'");
}
header('Location: http://localhost/disertatie/login.php');
?>