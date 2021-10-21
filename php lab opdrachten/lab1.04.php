<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>lab1.04</title>
</head>
<h3>php lab 1.4</h3>
<body>
<?php
    $naam = "Karim";
    $nederlands = "8.5";
    $engels = "7.7";
    $rekenen = "6.7";
    $programmeren = "8.5";
    $databases = "9.4";
    $Snaam = "Sophie";
    $Snederlands = "8.9";
    $Sengels = "8.7";
    $Srekenen = "9.7";
    $Sprogrammeren = "9.5";
    $Sdatabases = "9.2";
    $Kgemiddeld = ($nederlands + $engels + $rekenen + $programmeren + $databases) * 0.2;
    $Sgemiddeld = ($Snederlands + $Sengels + $Srekenen + $Sprogrammeren + $Sdatabases) * 0.2;
    $Groepgemiddeld = ($Kgemiddeld + $Sgemiddeld) * 0.5;
    $Groepgemiddeld = round($Groepgemiddeld,1);
    echo "<table border='1'>
    <caption>
        <strong>Rapport</strong>
    </caption>
    <thead>
        <tr>
            <th>Naam</th><th>Nederlands</th><th>Engels</th>
            <th>Rekenen</th><th>Programmeren</th>
            <th>Databases</th>
            <th>Gemiddeld</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>$naam</td><td>$nederlands</td><td>$engels</td>
            <td>$rekenen</td><td>$programmeren</td>
            <td>$databases</td><td>$Kgemiddeld</td>
        </tr>
        <tr>
            <td>$Snaam</td><td>$Snederlands</td><td>$Sengels</td>
            <td>$Srekenen</td><td>$Sprogrammeren</td>
            <td>$Sdatabases</td><td>$Sgemiddeld</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td colspan='6'>Groep gemiddeld</td><td>$Groepgemiddeld</td>
        </tr>
    </tfoot>
    </table>";
?>
</body>
</html>