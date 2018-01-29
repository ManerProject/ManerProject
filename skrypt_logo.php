<body onload="RunAction()">
	<div id="hej1" >
	<img  id="hej" src="Grafika/logo.png"> </img>
	<script language="JavaScript">
		var i = 0;
		function RunAction()
		{
		i=i+0.008;
		document.getElementById("hej").style.opacity=i;
		if(i>1)
		{
		i=1;
		}
		setTimeout("RunAction()",50);
		}
	</script>