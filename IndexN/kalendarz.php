<?php 
session_start();
$klasa= $_SESSION['kl'];
require "baza.php";



 ?>
<!DOCTYPE html>

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
SEMESTR1
<img style="height:125px;width:200px;margin-top:-20px;float:left"  src="../Grafika/logomm.png"> </img>
<form action="../wyloguj.php" method="_POST" >
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
   
    <style>
        .container {
            font-family: 'Noto Sans', sans-serif;
            margin-top: 10px;
        }
        th {
            height: 30px;
            text-align: center;
            font-weight: 700;
        }
        td {
            height: 100px;
        }
        .today {
            background: lightlue;
        }
		.todays {
            background: red;
        }
        th:nth-of-type(7),td:nth-of-type(7) {
            color: blue;
        }
        th:nth-of-type(1),td:nth-of-type(1) {
            color: red;
        }
    </style>

  <input style="float:right;background-color:#191919;:width:50px;height:100px;position:relative;
    bottom: 40px;cursor:pointer;color:white;font-family: 'Audiowide', cursive;border-left:2px dotted #1F1F1F;border-top:0;border-right:0;border-bottom:0" type="submit" value="WYLOGUJ"/>
 
 
 </form>
</div>


<?php
require "odnosiki.php";
?>

<form action="skryptKali.php" method="POST">

<input   name="tresc" placeholder="tersc" />
<input   type="date" name="data" />
zd dom <input   type="radio" name="typ"  value="1"/>
spr <input   type="radio" name="typ" value="2"/>
inne <input   type="radio" name="typ" value="3"/>
<input   type="submit"  />

</form>


<?php


 
// Get prev & next month
if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
    // This month
    $ym = date('Y-m');
}
 
// Check format
$timestamp = strtotime($ym . '-01');
if ($timestamp === false) {
    $timestamp = time();
}
 
// Today
$today = date('Y-m-d');
 
// For H3 title
$html_title = date('Y / m', $timestamp);
 
// Create prev & next month link     mktime(hour,minute,second,month,day,year)
$prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
$next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));
 
// Number of days in the month
$day_count = date('t', $timestamp);

// 0:Sun 1:Mon 2:Tue ...
$str = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));

// Create Calendar!!
$weeks = array();
$week = '';
 $datam=date('n', $timestamp);;
 
$elo="xd";
$week .= str_repeat('<td></td>', $str);
$j=1;
  if ($result = $wynik->query("SELECT * FROM `kalendarz` WHERE MONTH(data)=$datam and `idklasa`=10 and `typ`=1 ORDER by `data`")) {
  
    while($w=$result->fetch_assoc()){
		
		$dataK1[$j]=$w['data'];
		$trescK1[$j]=$w['tresc'];
		$j++;
	}
  }
  $j=1;
  if ($result = $wynik->query("SELECT * FROM `kalendarz` WHERE MONTH(data)=$datam and `idklasa`=10 and `typ`=2 ORDER by `data`")) {
  
    while($w=$result->fetch_assoc()){
		
		$dataK2[$j]=$w['data'];
		$trescK2[$j]=$w['tresc'];
		$j++;
	}
  }
  $j=1;
  if ($result = $wynik->query("SELECT * FROM `kalendarz` WHERE MONTH(data)=$datam and `idklasa`=10 and `typ`=3 ORDER by `data`")) {
  
    while($w=$result->fetch_assoc()){
		
		$dataK3[$j]=$w['data'];
		$trescK3[$j]=$w['tresc'];
		$j++;
	}
  }
 
  $i=1;$k=1;$c=1;
for ( $day = 1; $day <= $day_count; $day++, $str++) {
	if($day<10)
		 $date = $ym.'-0'.$day;
else
    $date = $ym.'-'.$day;

    if ($today == $date) 
		 $week .= '<td class="today">'.$day;
	 else
	 $week .= '<td>'.$day;
	

     if(@$dataK1[$i] == $date)
	 {
		 
		 $week .= '<div style="background-color:orange;"  class="todays">'.$trescK1[$i].'</div>';
		 $i++;
	 }
	 if(@$dataK2[$k] == $date)
	 {
		 
		 $week .= '<div style="background-color:red;" class="todays">'.$trescK2[$k].'</div>';
		 $k++;
	 }
	 if(@$dataK3[$c] == $date)
	 {
		 
		 $week .= '<div style="background-color:blue;" class="todays">'.$trescK3[$c].'</div>';
		 $c++;
	 }
    
    
    $week .= '</td>';
     
    // End of the week OR End of the month
    if ($str % 7 == 6 || $day == $day_count) {
         
        if($day == $day_count) {
            // Add empty cell
            $week .= str_repeat('<td></td>', 6 - ($str % 7));
        }
         
        $weeks[] = '<tr>'.$week.'</tr>';
         
        // Prepare for new week
        $week = '';
         
    }
 
}
 
?>
 
 <div class="container">
        <h3><a href="?ym=<?php echo $prev; ?>">&lt;</a> <?php echo $html_title; ?> <a href="?ym=<?php echo $next; ?>">&gt;</a></h3>
        <br>
        <table class="table table-bordered">
            <tr>
                <th>S</th>
                <th>M</th>
                <th>T</th>
                <th>W</th>
                <th>T</th>
                <th>F</th>
                <th>S</th>
            </tr>
            <?php
                foreach ($weeks as $week) {
                    echo $week;
                }   
            ?>
        </table>
    </div>

 </div>
    <div style="height:200px;width:100%;">
 
 </div>
 </div>
</body>
</html>
