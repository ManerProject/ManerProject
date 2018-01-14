
  <div class="diagram"  >
   <canvas id="myChart" width="400px" height="200px"></canvas>
  </div>
<?php
   require "baza.php";
   
   $i=0;
     if ($result = $wynik->query("SELECT * FROM `loginy` WHERE `typ`='uczen'")) {
   
    while($w=$result->fetch_assoc()){
		$iducznia=$w['id'];
		
		
		
		if ($result1 = $wynik->query("SELECT COUNT(`oceny`) FROM oceny WHERE `oceny`=1 and `idlogin`='$iducznia'")) {
   
		while($w=$result1->fetch_assoc()){
		$co= $w['COUNT(`oceny`)'];
			
			$tab[$i]=$co;
	}
	}
		$i++;
	 }
	 }
	 $max1 = max($tab);
	 
	 $i=0;
	 $pom=0;
	   if ($result = $wynik->query("SELECT * FROM `loginy` WHERE `typ`='uczen'")) {
   
    while($w=$result->fetch_assoc()){
		$iducznia=$w['id'];
		
		
		
		if ($result1 = $wynik->query("SELECT COUNT(`oceny`) FROM oceny WHERE `oceny`=1 and `idlogin`='$iducznia'")) {
   
		while($w=$result1->fetch_assoc()){
		$co= $w['COUNT(`oceny`)'];
			if($pom==0 and $co==$max1)
			{
				$pom=1;
			}
			else
			{
			$tab1[$i]=$co;
			}
	}
	}
		$i++;
	 }
	 }
	 $max2= max($tab1);
	 
	 
	 
	 $i=0;
	 $pom=0;
	 $pom1=0;
	   if ($result = $wynik->query("SELECT * FROM `loginy` WHERE `typ`='uczen'")) {
   
    while($w=$result->fetch_assoc()){
		$iducznia=$w['id'];
		
		
		
		if ($result1 = $wynik->query("SELECT COUNT(`oceny`) FROM oceny WHERE `oceny`=1  and `idlogin`='$iducznia'")) {
   
		while($w=$result1->fetch_assoc()){
		$co= $w['COUNT(`oceny`)'];
			if($pom==0 and $co==$max1)
			{
				$pom=1;
			}
			else
				if( $pom1==0 and $co==$max2)
				{
					$pom1=1;
				}
			else
			{
			$tab2[$i]=$co;
			}
	}
	}
		$i++;
	 }
	 }
	 $max3= max($tab2);
	
// echo $max1; echo $max2;echo $max3;
 
 $pom=0;
 $pom1=0;
 $pom2=0;
  if ($result = $wynik->query("SELECT * FROM `loginy` WHERE `typ`='uczen' ORDER by `login` DESC")) {
   
    while($w=$result->fetch_assoc()){
		$iducznia=$w['id'];
		$loginuczniaxd=$w['login'];
		
		
		
		if ($result1 = $wynik->query("SELECT COUNT(`oceny`) FROM oceny WHERE `oceny`=1 and `idlogin`='$iducznia'")) {
   
		while($w=$result1->fetch_assoc()){
		$co= $w['COUNT(`oceny`)'];
			
			if($co==$max1 )
				$ucznemax1=$loginuczniaxd;
			if($co==$max2 )
				$ucznemax2=$loginuczniaxd;
			if($co==$max3 )
				$ucznemax3=$loginuczniaxd;
	}
	}
		
	 }
	 }
	// echo $ucznemax1;
 
 

?>
  <script>
   var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["<?php echo $ucznemax1 ?>", "<?php echo $ucznemax2 ?>", "<?php echo $ucznemax3 ?>"],
        datasets: [{
            label: 'liczba jedynek',
            data: ["<?php echo $max1; ?>",
            "<?php echo $max2; ?>",
            "<?php echo $max3; ?>"],
            backgroundColor: [
                '#B388FF',
                '#DCE775',
                '#BCAAA4'
                
            ],
            borderColor: [
                '#212121',
				'#212121',
				'#212121'
				
                
            ],
            borderWidth: 1
        }]
    },
    options: {
		title:{
          display:true,
          text:'Ranking uczniow ktorzy maja najwiencej 1',
          fontSize:25
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    },
	
});
  </script>

