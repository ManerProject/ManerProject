<!DOCTYPE html>
<?php 
session_start();
?>


<head>
<meta lang="pl"/>
<meta charset="utf-8"/>
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
<link rel="Stylesheet" type="text/css" href="style.css" />

</head>
<body>
  <style>
  body
  {
	background-color:#E6E6E6;
	margin:0%;
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
	
	width:350px;
	height:100px;
	margin-left:9%;
}
#tekst{
		margin-right:20%;
}  
  </style>
  <form action="skrypt_panel_dodania_ucznia1.php" method=post>
    <?php
	require "baza.php";
	?>
		<br>
		<div>Ilosc uczni do dodania: <input type=text name ="ilosc" value=""></div>
		<input type=submit value=aktualizuj>
    </form>
</body>
</html>
