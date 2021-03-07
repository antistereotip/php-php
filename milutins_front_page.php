<?php
$pictures = array ('pictures/tire.png', 'pictures/oil.png', 'pictures/spark_plug.png', 
					'pictures/door.png', 'pictures/steering-wheel.png', 'pictures/thermostat.png',
					'pictures/wiper_blade.png', 'pictures/gasket.png', 'pictures/brake_pad.png');
					
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