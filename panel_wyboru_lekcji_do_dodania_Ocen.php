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
  <style>
  body
  {
	background-color:#E6E6E6;
	margin:0px;
	
	font-size:35px;
	font-family: 'Acme', sans-serif;
  }
  #all
  {
	  width:100%;
	  height:100%;
  }
 #logo
  {
 
	width:100%;
	height:100px;
	background-color:black;
	float:right
	text-align: center;
	pading:10px;
	color:white;
	
  }
#okno
{
	width:100px;
	
	height:100px;
	margin-left:15%;
}
  
  </style>

<div id="all">
<div id="logo">

<img style="height:125px;width:200px;margin-top:-20px;float:left"  src="../Grafika/logomm.png"> </img>
<form action="../wyloguj.php" method="_POST" >
 

  <input style="float:right;background-color:#191919;:width:50px;height:100px;position:relative;
    bottom: 40px;cursor:pointer;color:white;font-family: 'Audiowide', cursive;border-left:2px dotted #1F1F1F;border-top:0;border-right:0;border-bottom:0" type="submit" value="WYLOGUJ"/>
 
 
 </form>
</div>

 
 </div>
<?php
require "baza.php";
$login= $_SESSION['login'];
 
echo $login;
 
 if ($result1 = $wynik->query("SELECT * FROM loginy WHERE login='$login'")) {
   
    while($w=$result1->fetch_assoc()){
			 $id=$w['id'];
      
    }
	}
	echo $id;
	$_SESSION['nauczycielid']= $id;
	?>
	
		<form   method="post" action="tonau.php" style="font-size:15px;">
			<br>

 <?php
	

		?>
<select style="width:120px;height:30px;border-radius:400px;" name='tak'>
    <?php
require "baza.php";
 
 

 
 
if ($result = $wynik->query("SELECT `klasy`.`klasa`,`lekcje`.`lekcja`,`lekcje`.`id` as idlekcji, `klasy`.`id` AS idklasy from `nau`,`lekcje`,`klasy` where `nau`.`przedmiot1`=`lekcje`.`id` and `klasy`.`id`=`nau`.`idklasa` AND `nau`.`nau`=30 ")) {
   
    while($w=$result->fetch_assoc()){
        echo "<option value=".$w['idklasy']."-".$w['idlekcji'].">".$w['lekcja']." klasa ".$w['klasa']."</option>";      
        
		
       
    }
 
 
  $result->close();
  $wynik->close();
}
 
?>

    </select>
	<input type='submit' style="width:40px; height:30px;"value="ok ">
</form>
		
	

	    
		 
		  
	
	
<?php

	$result1->close();

 
?>



</br>




 </div>
    
 </div>
</body>
</html>
