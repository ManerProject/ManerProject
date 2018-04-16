<?php
session_start();  
require "baza.php";
$licz=$_SESSION['licz'];
/*$email=array();
$haslo=array();
$klasa=array();
$login=array();
$typ=array();
*/
for($i=0;$i<$licz;$i++)
{
	$email[$i]=$_POST['email'][$i];
	$haslo[$i]=$_POST['haslo'][$i];
	$klasa[$i]=$_POST['klasa'][$i];
	$login[$i]=$_POST['login'][$i];
	$typ[$i]=$_POST['typ'][$i];
	$id[$i]=$_POST['id'][$i];
	$wynik->query("UPDATE `loginy` SET login='$login[$i]',haslo='$haslo[$i]',email='$email[$i]',typ='$typ[$i]',klasa='$klasa[$i]' WHERE typ='uczen' and id='$id[$i]'");
}   
?>
