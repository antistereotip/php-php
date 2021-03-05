<html>
<head>
	<title>Milutin's Auto Parts - Freight</title>
</head>
<body>
<table border="0" cellpadding="3">
<tr>
	<td bgcolor="#CCCCCC" align="center">Distance</td>
	<td bgcolor="#CCCCCC" align="center">Cost</td>
</tr>
<?php
	// iteracija od 50 do 250 kroz for petlju
	//for ($distance = 50; $distance <= 250; $distance  += 50)
	//{
		//echo "<tr>\n <td align='right'>$distance</td>\n";
		//echo "  <td align='right'>". $distance / 10 ."</td>\n</tr>\n";
	//}
	
	// iteracija od 50 do 250 kroz while petlju
	$distance = 50;
	while ($distance <= 250)
	{
		echo "<tr>";
		echo "<td align='right'>".$distance."</td>";
		echo "<td align='right'>". $distance / 10 ."</td>";
		echo "</tr>\n";
		$distance += 50;
	} 
	
?>
</table>
</body>
</html>