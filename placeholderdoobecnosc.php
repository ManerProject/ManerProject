<?php 


 if ($result = $wynik->query("SELECT * from `obeconsc` where `data`='$data' and `klasa`='$klasa' ORDER by `numer_lekcji` DESC LIMIT 1")) {
   
    while($w=$result->fetch_assoc()){
		
		$numer=$w['numer_lekcji'];
		
		echo $numer+1;
		
		
 }}



?>