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
  <form action="skrypt_panel_zmiany_ucznia.php" method=post>
    <?php
	require "baza.php";
if ($result = $wynik->query("SELECT * FROM `loginy` WHERE typ='uczen'")) {
   $licz=0;
    while($w=$result->fetch_assoc()){
		$licz++;
		?>
		<br>
		<div>login: <input type=text name ="login[]" value="<?php echo $w['login'];?>"></div>
		
		<div>haslo: <input type=text name ="haslo[]" value="<?php echo $w['haslo'];?>"></div>
		
		<div>email: <input type=text name ="email[]" value="<?php echo $w['email'];?>"></div>
		
		<div>klasa: <input type=text name ="klasa[]" value="<?php echo $w['klasa'];?>"></div>
		
		<div>typ: <input type=text name ="typ[]" value="<?php echo $w['typ'];?>"></div>
		
<?php		
	}
	
}
	$_SESSION['licz']=$licz;
	//$result = mysql_query("SELECT * FROM `loginy` WHERE typ='uczen'");
	
    //$row = mysql_fetch_array($result);
	?>
	
		<input type=submit value=aktualizuj>
    </form>
</body>
</html>
