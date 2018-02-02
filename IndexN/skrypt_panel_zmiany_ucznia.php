<?php
session_start();  
require "baza.php";
$licz=$_SESSION['licz'];
$email=array();
$haslo=array();
$klasa=array();
$login=array();
$typ=array();
for($i=0;$i<$licz;$i++){
$email[$i]=$_POST['email'];
$haslo[$i]=$_POST['haslo'];
$klasa[$i]=$_POST['klasa'];
$login[$i]=$_POST['login'];
$typ[$i]=$_POST['typ'];
$wynik->query("UPDATE `loginy` SET login='$login[$i]',haslo='$haslo[$i]',email='$email[$i]',typ='$typ[$i]',klasa='$klasa[$i]' WHERE typ='uczen'");
   
}


    
?>
