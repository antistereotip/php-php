<?php
$dir = "./pic/";
$pictures = glob($dir."*.png");
//var_dump($pictures);
shuffle($pictures);
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Milutin</h1>
<?php
echo "<div style='width: 100%;'>";
for ($i = 0; $i < 4; $i++) {
    echo "<div style='padding: 1%;display: inline;'><img src='". $pictures[$i] ."' height='150' style='border: 1px solid #333;'/></div>";
}
echo "</div>";
?>
</body>
</html>


      





