<?php 
session_start();
 ?>
<?php
 
require "baza.php";
 
 $kto=$_POST['sele'];
$tytuł=$_POST['tytul'];
$tresc=$_POST['tresc'];
$nau=$_SESSION['login'];
 if ($result1 = $wynik->query("SELECT * FROM loginy WHERE login='$nau'")) {
   
    while($w=$result1->fetch_assoc()){
			 $nau=$w['id'];
      
    }
	}
	 if ($result12 = $wynik->query("SELECT * FROM loginy WHERE login='$kto'")) {
   
    while($w=$result12->fetch_assoc()){
			 $kto=$w['id'];
      
    }
	}
 echo $nau;
 echo " ";
 echo $kto;
  echo " ";
 echo $tytuł;
 echo " ";
 echo $tresc;
 $wynik-> query("INSERT INTO `uwagi` ( `id_login`, `id_nau`, `tytul`, `tresc`) VALUES ( '$kto', '$nau', '$tytuł', '$tresc')");
 
  
  
  
   header ("Location:panel_wyboru_lekcji_do_dodania_Ocen.php");

?>