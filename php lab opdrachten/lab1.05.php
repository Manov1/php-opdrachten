<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>lab1.05</title>
</head>
<h3>php lab 1.5</h3>
<body>
<?php
    $nummer = array("een","twee",3,"vier");
    array_push($nummer, 5);
    echo "<p>Stap 3. ";
    print_r($nummer);
    echo "<br>";
    $type5 = gettype($nummer[4]);
    echo "Stap 4. Datatype is: $type5";
    unset($nummer[4]);
    echo "<br>Stap 6. ";
    print_r($nummer);
    array_unshift($nummer, "nul");
    echo "<br>Stap 8. ";
    print_r($nummer);
    $nummer0 = $nummer[0];
    unset($nummer0);
    echo "<br>Stap 10. Datatype [0] is: ".gettype($nummer0);
    unset($nummer[0]);
    echo "<br>Stap 12. ";
    print_r($nummer);
    unset($nummer[2]);
    echo "<br>Stap 14. ";
    print_r($nummer);
    sort($nummer);
    unset($nummer[2]);
    krsort($nummer);
    echo "<br>Stap 16. ";
    print_r($nummer);
    echo "</p>";
?>
</body>
</html>