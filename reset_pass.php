<?php
require_once('db.php');
if($_GET['key'] && $_GET['reset'])
{
  $email=$_GET['key'];
  $pass=$_GET['reset'];

  $select=mysqli_query($con, "select email,password from accounts where md5(email)='$email' and md5(password)='$pass'");
  if(mysqli_num_rows($select)==1)
  {
    ?>
    <form method="post" action="submit_new.php">
    <input type="hidden" name="email" value="<?php echo $email;?>">
    <p>Enter New password</p>
    <input type="password" name='password'>
    <input type="hidden" name='key' value='<?php echo $email ?>'>
    <input type="hidden" name='reset' value='<?php echo $pass ?>'>
    <input type="submit" name="submit_password">
    </form>
    <?php
  }
}
?>