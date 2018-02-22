<?php 
session_start();
 ?>
<?php
 
require "baza.php";
$klasa=$_SESSION['klasa'];

 if ($result1 = $wynik->query("SELECT * FROM loginy WHERE klasa='$klasa'")) {
		while($w=$result1->fetch_assoc()){
				 $id=$w['id'];
				 $ocena=$_POST[$id];
				 $semestr='1';
				 $rezultat=$wynik->query("INSERT INTO `oceny_z_zachowania` (`id_ucznia`, `klasa`, `ocena`, `semestr`) VALUES ('$id', '$klasa', '$ocena', '$semestr')");
		}
	}
   header ("Location:panel_wyboru_lekcji_do_dodania_Ocen.php");

?>