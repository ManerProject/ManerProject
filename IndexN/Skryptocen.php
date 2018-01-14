<ol style=" list-style-type:none;padding:0;
  margin:0;">
  
 <?php

 
 
 $i=2;
if ($result131 = $wynik->query("SELECT * FROM `$oceny`,loginy where idlogin='$login' and idlekcja='$lekcja' and `$oceny`.idnauczyciel=loginy.id")) {
  
    while($s=$result131->fetch_assoc()){
		?>
		<?php if($i%14==0) 
			
		{
					$i=2; 
					echo '</br>';
		
		}?>
		<li id="c<?php echo $s['id'] ?>"style="background-color:<?php 
					if($s['oceny']==1)echo "#D50000";
					if($s['oceny']==2)echo "#E53935";
					if($s['oceny']==3)echo "#FFEB3B";
					if($s['oceny']==4)echo "#388E3C";
					if($s['oceny']==5)echo "#1B5E20";
					if($s['oceny']==6)echo "#01579B";
		?>; display:block;width:35px;height:35px;float:left;font-size:33px;border:2px white solid;border-radius:5px;"><?php  echo $s['oceny'] ;   ?>
		
			<ul style=" list-style-type:none;padding:0;
  margin:0;">
		<li id="d<?php echo $s['id'] ?>" style="width:200px;height:90px;background-color:#BDBDBD;z-index:1;font-size:19px;line-height:1.5em;border:2px white solid;border-radius:10px;text-align: center;margin-top:5px;">
		
		<?php echo "Za co "; echo '"';echo $s['zaco'] ;echo '"'; echo "</br>" ;

		echo "Nauczyciel "; echo '"';echo $s['login'] ;echo '"'; echo "</br>" ;
		echo "Data "; echo '"';echo $s['Data'] ;echo '"'; echo "</br>" ;
		
		


		?>
		
		 
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