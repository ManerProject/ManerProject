
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
  $h=$_POST['sele'];
  $kl=$_POST['selekl'];
 $przedmiot=$_POST['przedmiot'];
 
  $id=0;
if ($result1 = $wynik->query("SELECT * FROM loginy WHERE login='$h'")) {
   
    while($w=$result1->fetch_assoc()){
			 $id=$w['id'];
      
    }
	}
	
	
	if ($result = $wynik->query("SELECT `przedmiot1` FROM `nau` WHERE nau='$id' and przedmiot1='$przedmiot' and idklasa='$kl'"))
{	
	if($result->num_rows==1 )
	{
	    
		echo "kure";
		
	}
	else
		$wynik->query("INSERT INTO `nau`( `nau`, `przedmiot1`,idklasa) VALUES ('$id','$przedmiot','$kl')");
}

$wynik->close();
$result->close();

 header ('Location:panel_dodawania_lekcji_dla_nau.php'); 

		
 ?>
 
 


</body>
</html>
