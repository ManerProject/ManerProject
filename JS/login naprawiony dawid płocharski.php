<!DOCTYPE html>
<html lang="pl">
 
  <head>
  <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="description" content="Centrum Kształcenia Zawodowego i Ustawicznego w Brodnicy">
    <meta name="keywords" content="ckziu brodnica, technikum, zawodówka">
    <title>CKZiU w Brodnicy</title>
   <!--<link rel="stylesheet" href="style.css"/>-->
  </head>
 
  <body onload="RunAction()">
  <style>
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
	 width:33%;
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
  #sub
  {
	  margin-left:35%;
	  margin-right:47%;
	  
	  text-algin:center;
  }
  #uno
  {
	  
	  width:500px;
	  height:60px;
	  
  }
  </style>
  <div id="hej1" >
  
  
  <img  id="hej" src="logo.png"> </img>

 <form action="zaloguj.php" method="POST" >
 <div id=uno>
 Login <input type="text" placeholder="login"name="login"/>
  Haslo <input type="password"placeholder="haslo" name="haslo"/>
</div>
  <input type="submit" value="Wyslij"/>

 </div>

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

i=i+0.005;
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