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


<form   method="post" action="panel_wyboru_lekcji_do_dodania_Ocen.php" style="font-size:25px;">
<input type='submit' style="width:100px; height:30px;margin-left:15%"value="Powrot do glownego panelu">
</form>
   
    
<form action="panel_dodawania_wydarzen.php" method="POST" >
  <input type="submit" value="Dodaj wydarzenie"/>
 </form>
 </div>

Wydarzenia klasowe

<table border="1">
<tr>
<td>nr</td>
<td>data</td>
<td>wydarzenie</td>
</tr>
<?php
 require "baza.php";
$klasa=$_SESSION['klasa'];
if($rezultat=$wynik->query("SELECT * FROM `wydarzenia` WHERE klasa='$klasa' OR klasa='0'")){
$i=1;
while($w=$rezultat->fetch_assoc()){
echo "<tr>";
echo "<td>".$i."</td>";
$i++;
echo "<td>".$w['data']."</td>";
echo "<td>".$w['wydarzenie']."</td>";
echo "</tr>";
}
}
?>
</table>	
	
	

 </div>
    
 </div>
</body>
</html>