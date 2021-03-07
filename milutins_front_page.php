<?php
$pictures = array ('tire.png', 'oil.png', 'spark_plug.png', 
					'door.png', 'steering-wheel.png', 'thermostat.png',
					'wiper_blade.png', 'gasket.png', 'brake_pad.png');
					
shuffle($pictures);
?>
<html>
<head> 
	<title>Milutin's auto parts</title>
</head>
<body>
<h1>Milutin's auto parts</h1>
<div align="center">
<table width="100%">
<tr>
<?php
for ($i=0; $i<3;$i++) {
	echo "<td align=\"center\"><img src=\"";
	echo $pictures[$i];
	echo "\"/></td>";
}

?>
</tr>
</table>
</body>
</html>