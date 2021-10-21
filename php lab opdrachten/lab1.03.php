<?php
   $breedte = 10;
   $lengte = 11;
   $hoogte = 5;
   $oppervlakte = $breedte * $lengte;
   $volume = $lengte * $breedte * $hoogte;
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>lab1.03</title>
</head>
<h3>php lab 1.3</h3>
<body>
<?php
   echo "<p>Containerbasisoppervlakte is: $oppervlakte </p>";
   echo "<p>Containervolume is: $volume</p>";
?>
</body>
</html>