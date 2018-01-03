
<!DOCTYPE html>

<html>
<?php 
session_start()
 ?>
<head>
<meta lang="pl"/>
<meta charset="utf-8"/>

</head>
<body>
 


   
 <?php
 require "baza.php";
  
$kat=$_POST['logins'];
 echo $kat;
 
 
 if ($result1 = $wynik->query("SELECT * FROM klasy order by `id` DESC limit 1")) {
   
    while($w=$result1->fetch_assoc()){
			 $id=$w['id'];
      
    }
	}
  $id++;
 $wynik->query("INSERT INTO `klasy` (`id`,`klasa`) VALUES ('id','$kat')");
 
for($i=1;$i<6;$i++)
{
	$wynik->query("INSERT INTO `planlekcji`(`id`, `klasa`, `dzien`) VALUES (null,'$id','$i')");
}
$wynik->close();
		
		header ('Location:panel_dodawania_klas.php'); 
 ?>
 
 


</body>
</html>
