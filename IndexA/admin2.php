<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta lang="pl"/>
	<meta charset="utf-8"/>
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
</head>
<body>

<?php
require "baza.php";
if(isset($_POST['sele']))
{
	echo "Uztkownik o nicku ".$_SESSION['login']." został usuniety";
	$h=$_POST['sele'];
    $wynik->query("DELETE FROM loginy WHERE id='$h'");
    unset($_SESSION['login']);
}
?>
</body>
</html>