
<!DOCTYPE html>

<html>
<?php 
session_start()
 ?>
<head>
<meta lang="pl"/>
<meta charset="utf-8"/>

</head>
<body onload="RunAction()">
 <style>
  body
  {
	background-color:black;
  }
  #hej1
  {
 
  margin-left:35%;
  margin-right:35%;
  }
  body
  {
	background-color:black;
	font-family: 'Audiowide', cursive;
	color:white;
	font-size:16px;
	
  }
  #hej1
  {
 
  margin-left:35%;
  margin-right:35%;
  }
  input[type=text],
  [type=password]
  {
	 margin-top:30px;
	 background-color:black;
	 border:3px solid white;
	 font-family: 'Audiowide', cursive;
	border-radius:10px;
	 margin-right:10px;
	 width:175px;
	 color:white;
  }
  
 input[type=submit]
  {
	 
	border-radius:10px;
	margin-top:15px;
	border:2px solid white;
	background-color:black;
	color:white;
	font-family: 'Audiowide', cursive;
	cursor:pointer;

  }
  input:focus
  {
	  background-color:#424242;
  }
  #left
  {
	  margin-left:10px;
	  width:70px;
	  
  }
  </style>
  <div id="hej1" style="wi">
  
  
  <img  id="hej" src="Grafika/logo.png"> </img>
  
  
  
 
 <script language="JavaScript">

var i = 0;
function RunAction()
{

i=i+0.005;
document.getElementById("hej").style.opacity=i;
if(i>1)
{
i=1;
}
setTimeout("RunAction()",50);
}



</script>
<!-- if ($result = $wynik->query("insert into loginy VALUES(null,'$login','$haslo','$email')") !-->
 <form action="rejestracja.php" method="POST" >
 Login <input type="text" name="login" value="<?php if(isset($_SESSION['login1']))
 { 
	  echo $_SESSION['login1'];
  unset($_SESSION['login1']);
 }
  ?>"/>
  Haslo <input type="password" name="haslo"/>
  
</br>
 Email <input type="text" name="email" value="<?php if(isset($_SESSION['email1']))
 {echo $_SESSION['email1'];
  unset($_SESSION['email1']);
 }
  
	 ?>" />
	Klasa
	I<input type="radio" name="klasa" value="I"/>
	II<input type="radio" name="klasa"value="II"/>
	III<input type="radio" name="klasa"value="III"/>
	
	</br>
<input type="checkbox" name="rek"/>
 
 
 Regulamin  <input type="submit" id="left" value="Wyslij"/>
 
 <?php if(isset($_SESSION['blad']) )
 { 
echo "</br>";

	 echo  $_SESSION['blad'];
	 unset($_SESSION['blad']);
	 
 }
 ?>
 
 </form>
</br>
 <form action="zaloguj.php" method="POST" >
  <input type="submit" value="Zaloguj"/>

</form>
</div>

</body>
</html>
