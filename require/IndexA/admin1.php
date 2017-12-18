
<!DOCTYPE html>

<html>
<?php 
require "baza.php";
session_start()
 ?>
<head>
<meta lang="pl"/>
<meta charset="utf-8"/>

</head>
<body>
 <?php
  $h=$_POST['sele'];
$prze=$_POST['przedmiot'];
 if ($result1 = $wynik->query("SELECT * FROM loginy WHERE login='$h'")) {
   
    while($w=$result1->fetch_assoc()){
			 $id=$w['id'];
      
    }
	}
	
	
	
	
 
 
 
 if(isset($_POST['sele'])){
     
    $h=$_POST['sele'];
  
   
    $wynik->query("UPDATE loginy SET `typ` = 'teacher' WHERE login='$h'");
      $wynik->query("UPDATE loginy SET `klasa` = NULL WHERE login='$h'");
	  
	  if ($result = $wynik->query("SELECT * FROM nau where nau='$id'"))
{	
	if($result->num_rows!=1 )
	{
	     $wynik->query("INSERT INTO `nau` ( `nau`,`przedmiot1`,`przedmiot2`,`przedmiot3`) VALUES ( '$id',0,0,0)");
		
		  
	}
	
	$result->close();
}
	
		    

	     
		 
		 
		
		
		  
	
	  
	  
	  
	  
	  
	  

        unset($_SESSION['login']);
}
 

 

 

      
        unset($_SESSION['login']);
		header ('Location:admin.php');

?>

</body>
</html>
