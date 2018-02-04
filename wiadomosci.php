<?php 
session_start();
 ?>
<!DOCTYPE html>

<html>

<head>
	<script src="../JS/jquery-2.1.4.min.js"></script>
		<script src="../JS/Chart.js"></script>
<meta lang="pl"/>
<meta charset="utf-8"/>

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

<div style=" background-color: red; class="uwagii" >tu som prowizorka wiadomosci</div>
		<?php
		require "baza.php";
		$login= $_SESSION['login'];
  if ($result69 = $wynik->query("SELECT * FROM loginy WHERE login='$login'")) {
			
				 
    while($w=$result69->fetch_assoc()){
			 $id=$w['id'];
      
    }
  }
			 if ($result1 = $wynik->query("SELECT * FROM wiadomosci WHERE ID_nauczyciela='$id'")) {
				
				 
   
	
    while($w=$result1->fetch_assoc()){
			 
			 ?>
			 <center><div style="margin-left:0%; background-color:#FFEB3B" class="uwagii" ><?php
      
				
				echo $w['Autor'];
				?></center>
				<div style="text-align:center; background-color:green;"><?php
				echo $w['nazwa'];
				?>
				</div>
				
	
	 <center><div style=" background-color: purple; class="uwagii" ><?php
      
				
				echo $w['tresc'];
				?></center>
				
				</br>
	<?php
      
	  
	}
    }
		?>
		</div>
		
		
		</div>
		 
		 
		 
				</body>
</html>


