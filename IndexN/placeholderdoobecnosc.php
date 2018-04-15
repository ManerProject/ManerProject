<?php 
$numer=1;
if ($result = $wynik->query("SELECT * from `obeconsc` where `data`='$data' and `klasa`='$klasa' ORDER by `numer_lekcji` DESC LIMIT 1"))
{
	if($result->num_rows==0 )
	{   
		echo $numer;  
	}
	else
	{
		while($w=$result->fetch_assoc())
		{		
			$numer=$w['numer_lekcji'];
			echo $numer+1;
		}
	}
}
?>