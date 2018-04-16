<?php
session_start();
//$_SESSION['kl']=$_POST['KL'];
$_SESSION['xdlekcja']=$_POST['tak'];

echo $_POST['tak'];
echo " ";
$obrazki = explode(',', $_POST['tak']);
echo $obrazki[0];
$_SESSION['kl']=$obrazki[0];
$_SESSION['xdlekcja']=$obrazki[1];

header("location:nau.php");
?>