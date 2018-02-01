<?php
require('somefile.php');
?>
SEMESTR 2
<img style="height:125px;width:200px;margin-top:-20px;float:left"  src="../Grafika/logomm.png"> </img>
<form action="../wyloguj.php" method="_POST" >
 

  <input style="float:right;background-color:#191919;:width:50px;height:100px;position:relative;
    bottom: 40px;cursor:pointer;color:white;font-family: 'Audiowide', cursive;border-left:2px dotted #1F1F1F;border-top:0;border-right:0;border-bottom:0" type="submit" value="WYLOGUJ"/>
 
 
 </form>
</div>

<?php
require "odnosiki.php";
?>
 
 </div>

<form method="POST" action="nau2s1.php">
 

  za co  <input  style =""name="zaco" >
 
 

<br>

<div style="background-color:;"id="panel">

 <div style="float:left;background-color:;width:20%;min-height:30px" > Login    </div>
	  <div style="float:left;background-color:;width:10%;min-height:30px" >    Klasa  </div>
	  <div style="float:left;background-color:;min-width:35%;min-height:30px" > Przedmiot   </div>
	  <div style="float:left;background-color:;width:35%;min-height:30px" >   Oceny   </div>

    <div style="cleat:both" id="clear"> </div>
<?php
require "baza.php";

$klasa=$_SESSION['kl'];


$lekcja= $_SESSION['xdlekcja'];

if ($result = $wynik->query("SELECT * FROM `klasy` WHERE id='$klasa'")) {
   
    while($w=$result->fetch_assoc()){
		$klasssa=$w['klasa'];
}
}


if ($result = $wynik->query("SELECT * FROM `lekcje` WHERE id='$lekcja'")) {
   
    while($w=$result->fetch_assoc()){
		$lekcjaaa=$w['lekcja'];
}
}
 

 $i=0;
 if ($result = $wynik->query("SELECT * FROM `loginy` WHERE klasa='$klasa'")) {
   
    while($w=$result->fetch_assoc()){
		
		$login=$w['id'];
      ?>
	  
	  <div style="float:left;background-color:;width:19%;min-height:30px;border:1px dotted black" id="login"> <?php  echo $w['login']; ?>     </div>
	  <div style="float:left;background-color:;width:8%;min-height:30px;border:1px dotted black" id="klasa"> <?php  echo $klasssa ?>     </div>
	   <div style="float:left;background-color:;width:25%;min-height:30px;border:1px dotted black" id="przedmiot"> <?php  echo $lekcjaaa ?>     </div>
	  <div style="float:left;background-color;min-width:39%;min-height:40px;border:1px dotted black" id="Oceny">  <?php   $oceny="ocenys2";require "Skryptocen.php"; ?>    </div>
	  <div style="float:left;background-color;width:4%;min-height:30px;border:1px dotted black" id="Input">  <input maxlength="1" placeholder="0" style ="width:30px;"name="hej[]" >    </div>
	
	  <div style="cleat:both" id="clear">      </div>
	 <?php 
		
	 
	 
	
	 ?>
	 <br>
	 
	 <?php 
		
       
    }
 }

?>
<input type='submit' style=""value="wyslij">
</div>

   </form>
<?php
   
 ?>
 </div>
    
 </div>
</body>
</html>
