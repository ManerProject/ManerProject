<?php
session_start();  
require "baza.php";
$email=$_POST['email'];
$haslo=$_POST['haslo'];
$klasa=$_POST['klasa'];
$login=$_POST['login'];
$typ=$_POST['typ'];
if ($result = $wynik->query("update loginy set (`email={$_POST["email"]},haslo={$_POST["haslo"]},klasa={$_POST["klasa"]},login={$_POST["login"]},typ={$_POST["typ"]}`)")) {
   
    while($w=$result->fetch_assoc()){
	
	}
	
}
	
	//$result = mysql_query("SELECT * FROM `loginy` WHERE typ='uczen'");
	
    //$row = mysql_fetch_array($result);
	
//mysql_query=("update loginy set (`email={$_POST["email"]},haslo={$_POST["haslo"]},klasa={$_POST["klasa"]},login={$_POST["login"]},typ={$_POST["typ"]}`)");
header('Location: panel_zmiany_ucznia.php');
    
?>
