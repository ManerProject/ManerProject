
  <div class="diagram"  >
   <canvas id="radar-chart" width="800" height="600"></canvas>
  </div>

  <script>
  
  <?php
  
  require "baza.php";
   if ($result = $wynik->query("SELECT COUNT(`login`) FROM loginy WHERE `typ`='uczen' and `Klasa`='$idklasa' ")) {
   
    while($w=$result->fetch_assoc()){
		$liczba= $w['COUNT(`login`)'];
}
}
  
  if ($result = $wynik->query("SELECT COUNT(oceny) FROM oceny WHERE `oceny`=1 and `idklasa`='$idklasa'")) {
   
    while($w=$result->fetch_assoc()){
		$oceny= $w['COUNT(oceny)'];
}
}
 if ($result = $wynik->query("SELECT COUNT(oceny) FROM oceny WHERE `oceny`=2 and `idklasa`='$idklasa'")) {
   
    while($w=$result->fetch_assoc()){
		$oceny1= $w['COUNT(oceny)'];
}
}
 if ($result = $wynik->query("SELECT COUNT(oceny) FROM oceny WHERE `oceny`=3 and `idklasa`='$idklasa'")) {
   
    while($w=$result->fetch_assoc()){
		$oceny2= $w['COUNT(oceny)'];
}
}
 if ($result = $wynik->query("SELECT COUNT(oceny) FROM oceny WHERE `oceny`=4 and `idklasa`='$idklasa'")) {
   
    while($w=$result->fetch_assoc()){
		$oceny3= $w['COUNT(oceny)'];
}
}
 if ($result = $wynik->query("SELECT COUNT(oceny) FROM oceny WHERE `oceny`=5 and `idklasa`='$idklasa'")) {
   
    while($w=$result->fetch_assoc()){
		$oceny4= $w['COUNT(oceny)'];
}
}
 if ($result = $wynik->query("SELECT COUNT(oceny) FROM oceny WHERE `oceny`=6 and `idklasa`='$idklasa'")) {
   
    while($w=$result->fetch_assoc()){
		$oceny5= $w['COUNT(oceny)'];
}
}

$oceny=round($oceny/$liczba, 0);
$oceny1=round($oceny1/$liczba, 0);
$oceny2=round($oceny2/$liczba, 0);
$oceny3=round($oceny3/$liczba, 0);
$oceny4=round($oceny4/$liczba, 0);
$oceny5=round($oceny5/$liczba, 0);


  if ($result = $wynik->query("SELECT COUNT(oceny) FROM oceny WHERE `oceny`=1 and `idlogin`=$uczenid")) {
   
    while($w=$result->fetch_assoc()){
		$ocenyu= $w['COUNT(oceny)'];
}
}

  if ($result = $wynik->query("SELECT COUNT(oceny) FROM oceny WHERE `oceny`=2 and `idlogin`=$uczenid")) {
   
    while($w=$result->fetch_assoc()){
		$ocenyu1= $w['COUNT(oceny)'];
}
}
  if ($result = $wynik->query("SELECT COUNT(oceny) FROM oceny WHERE `oceny`=3 and `idlogin`=$uczenid")) {
   
    while($w=$result->fetch_assoc()){
		$ocenyu2= $w['COUNT(oceny)'];
}
}
  if ($result = $wynik->query("SELECT COUNT(oceny) FROM oceny WHERE `oceny`=4 and `idlogin`=$uczenid")) {
   
    while($w=$result->fetch_assoc()){
		$ocenyu3= $w['COUNT(oceny)'];
}
}
  if ($result = $wynik->query("SELECT COUNT(oceny) FROM oceny WHERE `oceny`=5 and `idlogin`=$uczenid")) {
   
    while($w=$result->fetch_assoc()){
		$ocenyu4= $w['COUNT(oceny)'];
}
}
  if ($result = $wynik->query("SELECT COUNT(oceny) FROM oceny WHERE `oceny`=6 and `idlogin`=$uczenid")) {
   
    while($w=$result->fetch_assoc()){
		$ocenyu5= $w['COUNT(oceny)'];
}
}
  
  ?>
  
  
  
  
    new Chart(document.getElementById("radar-chart"), {
    type: 'bar',
    data: {
      labels: ["ocena 1", "ocena 2", "ocena 3", "ocena 4", "ocena 5","ocena 6"],
      datasets: [
        {
          label: "Srednia liczba ocen Klasy",
          
          backgroundColor: "#6A1B9A",
          borderColor: "#212121",
          pointBorderColor: "#fff",
          pointBackgroundColor: "#424242",
          data: ["<?php echo $oceny ?>","<?php echo $oceny1 ?>","<?php echo $oceny2 ?>","<?php echo $oceny3 ?>","<?php echo $oceny4 ?>","<?php echo $oceny5 ?>"]
        }, {
          label: "twoja liczba ocen",
          fontSize:45,
          backgroundColor: "#00796B",
          borderColor: '#000000',
          pointBorderColor: "#fff",
          pointBackgroundColor: "#FF1744",
          pointBorderColor: "#AAA",
          data: ["<?php echo $ocenyu ?>","<?php echo $ocenyu1 ?>","<?php echo $ocenyu2 ?>","<?php echo $ocenyu3 ?>","<?php echo $ocenyu4 ?>","<?php echo $ocenyu5 ?>"]
        }
      ]
    },
    options: {
		
     title:{
          display:true,
          text:'Uczen na tle klasy (liczba ocen)',
          fontSize:25
        },
        legend:{
          display:true,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:50,
            right:0,
            bottom:0,
            top:0
          }
        },
		scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        },
		animation: {
				duration:3000
			},
		
        
		
		
	  
	  
    }
	
	
});
  </script>

