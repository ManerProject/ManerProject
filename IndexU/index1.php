<?php 
session_start();
 ?>
<!DOCTYPE html>

<html>

<head>
	
<meta lang="pl"/>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
 <style>
  body
  {
	background-color:#E6E6E6;
	margin:0px;
	font-size:25px;
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
  }
  
  </style>

<div id="all">
<div id="logo">

<img style="height:125px;width:200px;margin-top:-20px;"  src="../Grafika/logomm.png"> </img>
<form action="../wyloguj.php" method="_POST" >
 

  <input style="float:right;background-color:#191919;:width:50px;height:100px;position:relative;
    bottom: 109px;cursor:pointer;color:white;font-family: 'Audiowide', cursive;border-left:2px dotted #1F1F1F;border-top:0;border-right:0;border-bottom:0" type="submit" value="WYLOGUJ"/>
 
 
 </form>
</div>
<div style="float:left;width:85%" id="content">


Semestr 1
<form method="POST" action="indexs2.php">

  <input  type="submit" name="seme" value="semestr2" >
  </form>
  <form method="POST" action="wiadomosci.php">

  <input  type="submit" name="seme" value="wiadomosc" >
  </form>
  <form method="POST" action="UczenObecnosc.php">

  <input  type="submit" name="seme" value="obecnosc" >
  </form>
 <?php  
$login= $_SESSION['login'];
require "baza.php";
if(!isset($_SESSION['zaloguj']))
{
	header ('Location:../login.php');
	exit();
}

if ($result89 = $wynik->query("SELECT * FROM `loginy` where login='$login'")) {
   
    while($s=$result89->fetch_assoc()){
      
       $_SESSION['uczenid']=$s['id'];
      $uczenid=$s['id'];
    }
	
	
}
echo  $uczenid;

$result69 = $wynik->query("select typ from loginy where login='$login' and typ='admin'");
	if($result69->num_rows==1 )
	{
	   
	   $_SESSION['admin']=true;
	   header ('Location:../IndexA/admin.php');
	   
	   
		 
		
	}
	$result79 = $wynik->query("select typ from loginy where login='$login' and typ='teacher'");
	if($result79->num_rows==1 )
	{
	   
	   $_SESSION['nau']=true;
	   header ('Location:../IndexN/panel_wyboru_lekcji_do_dodania_Ocen.php');
	   
	   
	}
	
	 $result69->close();
	  $result79->close();
		  



 
echo $login;










$poms=0;
$sua=0;
 $id=0;
if ($result1 = $wynik->query("SELECT klasa FROM loginy WHERE login='$login'")) {
   
    while($w=$result1->fetch_assoc()){
			 $id=$w['klasa'];
      
    }
	}
if ($result11 = $wynik->query("SELECT oceny.oceny from loginy,oceny where loginy.id=oceny.kl and loginy.Klasa='$id' ")) {
   
    while($s=$result11->fetch_assoc()){
      $sua=$sua + $s['oceny'];
       $poms++;
      
    }
	@$sua=$sua/$poms;
	
}
 $sua=round($sua,2); 



 ?></h1>
 


</br>





<?php


if ($result1 = $wynik->query("SELECT * FROM `lekcje` WHERE id!=0")) {
   
    while($w=$result1->fetch_assoc()){
			 
			$lekcja= $w['lekcja'];
			$lekcjaid=$w['id'];
			 
			 
			 
	?>		  Oceny z <?php  echo $lekcja;?>
 </br>
 
  
 <ol style=" list-style-type:none;padding:0;
  margin:0;">
  
 <?php

 
 
 
if ($result131 = $wynik->query("SELECT * FROM `oceny`,loginy where idlogin='$uczenid' and idlekcja='$lekcjaid' and `oceny`.idnauczyciel=loginy.id")) {
  
    while($s=$result131->fetch_assoc()){
		?>
		<li id="c<?php echo $s['id'] ?>"style="background-color:<?php 
					if($s['oceny']==1)echo "#D50000";
					if($s['oceny']==2)echo "#E53935";
					if($s['oceny']==3)echo "#FFEB3B";
					if($s['oceny']==4)echo "#388E3C";
					if($s['oceny']==5)echo "#1B5E20";
					if($s['oceny']==6)echo "#01579B";
		?>; display:block;width:50px;height:50px;float:left;font-size:40px;border:2px white solid;border-radius:10px;"><?php  echo $s['oceny'] ;   ?>
		
			<ul style=" list-style-type:none;padding:0;
  margin:0;">
		<li id="d<?php echo $s['id'] ?>" style="width:200px;height:90px;background-color:#BDBDBD;z-index:1;font-size:19px;line-height:1.5em;border:2px white solid;border-radius:10px;text-align: center;margin-top:5px;">
		
		<?php  echo "Zaco "; echo '"';echo $s['zaco'] ;echo '"'; echo "</br>" ;

		echo "Nauczyciel "; echo '"';echo $s['login'] ;echo '"'; echo "</br>" ;
		echo "Data "; echo '"';echo $s['Data'] ;echo '"'; echo "</br>" ;   ?>
		
		 
		</li>
		
		
		</ul>
		</li> <?php
           
		  echo " " ;    
       ?>
	   <style>
	   #c<?php echo $s['id'] ?>:hover
	   {
		   color:red;
		   
		  
	   }

	   ol > li > ul {
  display:none;
}
   ol > li > ul>li {
  color:blue;
   z-index: 1;
   position:relative;
   
}

ol > li:hover > ul {
  display:block;
}
	   </style>
	   <?php
	   
	   
      
    }
?></ol>
 <div style="clear:both"></div>
 <?php
  $result131->close();
  
}
}}
 
 
?>

  
		</div>
		<div style="float:left:width:50%" id="uwagi" >
		
		
		
		
		uwagi
		<?php
			 if ($result1 = $wynik->query("SELECT * FROM loginy WHERE login='$login'")) {
   
    while($w=$result1->fetch_assoc()){
			 $iduwagi=$w['id'];
      
    }
	}
	
		 if ($result1 = $wynik->query("SELECT * FROM uwagi WHERE id_login='$iduwagi'")) {
   
    while($w=$result1->fetch_assoc()){
			 
			 ?>
			 <div style="margin-left:84%; background-color:#9E9E9E" class="uwagii" > Tytul <?php
      
				
				echo $w['tytul'];
				?>
				</br>
	
	 <div style="padding-left:17%;; background-color:#616161" class="uwagii" >  Tresc </br><?php
      
				
				echo $w['tresc'];
				?>
				</br>
	 
	 
			 
			 
			 </div>
			 
			 
			 </div>
			 
			 <?php
      
	  
	  
    }
	}
		?>
		
		tu bendom wywiadowek
		<?php
  if ($result69 = $wynik->query("SELECT * FROM loginy WHERE login='$login'")) {
			
				 
    while($w=$result69->fetch_assoc()){
			 $klasa=$w['Klasa'];
      
    }
  }
			 if ($result1 = $wynik->query("SELECT * FROM wywiadowka WHERE klasa='$klasa'")) {
				
				 
    while($w=$result1->fetch_assoc()){
			 $wywiadowka=$w['klasa'];
    }
	}
	
		 if ($result1 = $wynik->query("SELECT * FROM wywiadowka WHERE $wywiadowka='$klasa'")) {
   if ($result1 = $wynik->query("SELECT * FROM wywiadowka WHERE aktywna='1'"))
   {
    while($w=$result1->fetch_assoc()){
			 
			 ?>
			 <div style="margin-left:84%; background-color:#9E9E9E" class="uwagii" ><?php
      
				
				echo $w['data'];
				echo " w sali ";
				echo $w['sala'];
				?>
				</br>
	
	 <div style="padding-left:17%;; background-color:#616161" class="uwagii" ><?php
      
				
				echo $w['tytul'];
				?>
				</br>
	 
	 
			 
			 
			 </div>
			 
			 
			 </div>
			 
			 <?php
      
	  
	}
    }
	}
		?>
		</div>
		<div id="diagrams" style="width:700px;height:900px; ">
		
		<?php
		$xd="dailydiagrams/diagram11.php";
		 
		

		$xd[21]=rand(0,0);
		$xd[22]=rand(0,2);
		echo $xd;
		 require  $xd;
		?>
		
		
		</div>
		
		</div> 
</body>
</html>
