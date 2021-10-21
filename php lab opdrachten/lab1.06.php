<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>lab1.06</title>
</head>
<h3>php lab 1.6</h3>
<body>
<?php
    $playlist = array (
        array("0" => "0", "genre" => "Hiphop","auteur" => "John Williams",
        "titel" => "My Girl"),
        array("1" => "1", "genre" => "Jazz","auteur" => "John Coltrane",
        "titel" => "New York"),
        array("2" => "2", "genre" => "Hiphop","auteur" => "Shakira",
        "titel" => "Obsession"),
        array("3" => "3", "genre" => "Latin","auteur" => "Caetano Veloso",
        "titel" => "Cafe Atlantico")
    );
    array_walk_recursive($playlist, "printArray");
    function printArray($item, $key) {
        $type = gettype($key);
        if ($type=="integer") {
            echo "Track $key";
        } elseif ($key=="genre") {
            echo ": " . "<i>$item</i>" . "|";
        } elseif ($key=="auteur") {
            echo "<i>$item</i>" . "|";
        } elseif ($key=="titel") {
            echo "<i>$item</i> <br>";
        }
    }
?>
</body>
</html>