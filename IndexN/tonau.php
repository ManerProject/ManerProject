

   
 <?php
session_start();

$_SESSION['kl']=$_POST['KL'];

$_SESSION['xdlekcja']=$_POST['tak'];

header("location:nau.php");
  ?>
	
