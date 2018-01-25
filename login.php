	<!DOCTYPE html>
<html lang="pl">
<head>
	<link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="description" content="Centrum Kształcenia Zawodowego i Ustawicznego w Brodnicy">
	<meta name="keywords" content="ckziu brodnica, technikum, zawodówka">
	<title>CKZiU w Brodnicy</title>
	<link rel="stylesheet" href="CSS/login.css"/>	
</head>
<body onload="RunAction()">
	<div id="hej1" >
		<img  id="hej" src="Grafika/logo.png"> </img>
		<form action="zaloguj.php" method="POST" >
	<div id=uno>
		Login <input type="text" placeholder="login"name="login"/>
		Haslo <input type="password" placeholder="haslo" name="haslo"/>
	</div>
	</br>
	<input type="submit" value="Wyslij"/>
	</form>
	<div id="sub">
		<form action="zarejestruj.php" method="POST" >
			<input type="submit" value="Zarejestruj"/>
		</form>
	</div>
 <script language="JavaScript">

var i = 0;
function RunAction()
{

i=i+0.008;
document.getElementById("hej").style.opacity=i;
if(i>1)
{
i=1;
}
setTimeout("RunAction()",50);
}

</script>
 
 
  </body>
 </html>