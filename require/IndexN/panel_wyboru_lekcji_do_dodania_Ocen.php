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
	?>
	
		<form   method="post" action="tonau.php" style="font-size:15px;">
			<br>
 Kl I<input type='radio' name="KL" style="width:100px; height:50px;border-radius:400px;margin-left:5%"value="I" >
 <br>
 KL II<input type='radio' name="KL" style="width:100px; height:50px;border-radius:400px;margin-left:5%"value="II" >
 <br>
 KL III<input type='radio' name="KL" style="width:100px; height:50px;border-radius:400px;margin-left:5%"value="III" >
	<?php
	$i=0;

		 if ($result1 = $wynik->query("SELECT lekcje.lekcja from lekcje,nau where nau.nau='$id' and nau.przedmiot1=lekcje.id")) {
   
    while($w=$result1->fetch_assoc()){
			 $przedmiot1=$w['lekcja'];
     
  ?>
		<br>
<input type='submit' name="tak" style="width:100px; height:50px;border-radius:400px;margin-left:15%"value="<?php 


echo $przedmiot1;


 ?>">
<?php

	 $i++;
	 echo  $i;
    }
	
	if(isset($_SESSION['blad1']) )
 { 
echo "</br>";

	 echo  $_SESSION['blad1'];
	 unset($_SESSION['blad1']);
	 
 }
	?>

</form>
		
	

	    
		 
		  
	
	
<?php

	$result1->close();
}
 
?>



</br>




 </div>
    
 </div>
</body>
</html>
