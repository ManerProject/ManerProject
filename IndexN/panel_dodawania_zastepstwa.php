<?php 
session_start();
 ?>
<!DOCTYPE html>
<?php
$data= date('Y.m.d');

for ($j=0; $j<strlen($data); $j++)
{
	if ($data[$j]=='.')
		$data[$j]='-';
}
?>
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
Kurde wywiadówka

<img style="height:125px;width:200px;margin-top:-20px;float:left"  src="../Grafika/logomm.png"> </img>
<form action="../wyloguj.php" method="_POST" >
 

  <input style="float:right;background-color:#191919;:width:50px;height:100px;position:relative;
    bottom: 40px;cursor:pointer;color:white;font-family: 'Audiowide', cursive;border-left:2px dotted #1F1F1F;border-top:0;border-right:0;border-bottom:0" type="submit" value="WYLOGUJ"/>
 
 
 </form>
</div>

 
 </div>
 <div id="con">
   <form method="post" action="panel_dodawania_zastepstwa2.php" style="font-size:15px;">
    <select style="width:120px;height:30px;border-radius:400px;" name='sele'>
<?php
require "baza.php";

$klasa=$_SESSION['kl'];


	
echo $klasa; 
	    if ($result = $wynik->query("SELECT * FROM klasy")) {
   
    while($w=$result->fetch_assoc()){
        echo "<option value=".$w['id'].">".$w['klasa']."</option>";      
      
		
       
    }
	
 
 
  $result->close();
  $wynik->close();
}
		 
		  
	
?>


    </select>
	<select style="width:120px;height:30px;border-radius:400px;" name='sele2'>


        <option value=".$w['1'].">poniedziałek</option> 
		<option value=".$w['2'].">wtorek</option> 
		<option value=".$w['3'].">środa</option> 
		<option value=".$w['4'].">czwartek</option> 
		<option value=".$w['5'].">piątek</option> 
  
		
       
  
	
</select>

	<input type='submit' style="width:100px; height:50px;border-radius:400px;"value="ok ">

    </form>

</br>



</div>
 
</body>
</html>
