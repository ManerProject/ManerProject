<ol style=" list-style-type:none;padding:0;
  margin:0;">
  
 <?php
$data= date('Y.m.d');
 
 
 for($j=0;$j<strlen($data);$j++)
{
	if($data[$j]=='.')
		$data[$j]='-';
	
}

    $klasa= $_SESSION['kl'];
 
 


 
 
 $i=2;
if ($result131 = $wynik->query("SELECT * FROM `loginy` INNER JOIN (`planlekcji` INNER JOIN `obeconsc` ON `obeconsc`.`dzienTygodnia` = `planlekcji`.`id`) ON `loginy`.`id` = `obeconsc`.`uczen` where obeconsc.data='$data' and loginy.id='$id'")) {
  
    while($s=$result131->fetch_assoc()){
		$lekcja="lekcja0";
		
		$nr=$s['numer_lekcji'];
		$lekcja[6]=$nr;
		
		?>
		<?php if($i%14==0) 
			
		{
					$i=2; 
					echo '</br>';
		
		}?>
		<li id="c<?php echo $s['numer_lekcji'] ?>"style="background-color:<?php 
					if($s['obecnosc']==1)echo "#8BC34A";
					if($s['obecnosc']==2)echo "#E53935";
					if($s['obecnosc']==3)echo "#FFEB3B";
					if($s['obecnosc']==11)echo "#F06292";
					
		?>; display:block;width:35px;height:35px;float:left;font-size:33px;border:2px white solid;border-radius:5px;"><?php  if($s['obecnosc']==1)echo "0";
					if($s['obecnosc']==2)echo "-";
					if($s['obecnosc']==3)echo "S";
					if($s['obecnosc']==11)echo "U";
					?>
		
			<ul style=" list-style-type:none;padding:0;
  margin:0;">
		<li id="d<?php echo $s['obecnosc'] ?>" style="width:100px;height:30px;background-color:#BDBDBD;z-index:1;font-size:19px;line-height:1.5em;border:2px white solid;border-radius:10px;text-align: center;margin-top:5px;">
		
		<?php echo $s[$lekcja];  ?>
		
		 
		</li>
		
		
		</ul>
		</li> <?php
           
		  echo " " ;    
       ?>
	   <style>
	   #c<?php echo $s['numer_lekcji'] ?>:hover
	   {
		   color:red;
		  
	   }

	   ol > li > ul {
		   
  display:none;
}
   ol > li > ul>li {
  color:red;
   z-index: 1;
   position:relative;
}

ol > li:hover > ul {
  display:block;
}
	   </style>
	   <?php
	   
	   
      $i++;
    }
?></ol>
 <div style="clear:both"></div>
 <?php
  $result131->close();
  
}

 
 
?>