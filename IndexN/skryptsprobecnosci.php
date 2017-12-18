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
if ($result131 = $wynik->query("SELECT * FROM `obeconsc`,`loginy` where obeconsc.data='2017-12-08 ' and obeconsc.uczen=loginy.id and loginy.id='35'")) {
  
    while($s=$result131->fetch_assoc()){
		?>
		<?php if($i%14==0) 
			
		{
					$i=2; 
					echo '</br>';
		
		}?>
		<li id="c<?php echo $s['numer_lekcji'] ?>"style="background-color:<?php 
					if($s['oceny']==1)echo "#D50000";
					if($s['oceny']==2)echo "#E53935";
					if($s['oceny']==3)echo "#FFEB3B";
					
		?>; display:block;width:35px;height:35px;float:left;font-size:33px;border:2px white solid;border-radius:5px;"><?php  echo $s['numer_lekcji'] ;   ?>
		
			<ul style=" list-style-type:none;padding:0;
  margin:0;">
		<li id="d<?php echo $s['numer_lekcji'] ?>" style="width:100px;height:30px;background-color:#BDBDBD;z-index:1;font-size:19px;line-height:1.5em;border:2px white solid;border-radius:10px;text-align: center;margin-top:5px;">
		
		<?php  echo "hejka" ;   ?>
		
		 
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