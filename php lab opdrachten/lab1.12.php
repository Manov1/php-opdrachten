<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>lab1.12</title>
</head>
<h1>Reiskosten berekenen </h1>
<?php
function reiskosten($vertrek, $bestemming){
    $reiskosten = array();
    $reiskosten[1] = array();
    $reiskosten[2] = array();
    $reiskosten[3] = array();
    $reiskosten[4] = array();
    $reiskosten[1][1] = 0;
    $reiskosten[1][2] = 30;
    $reiskosten[1][3] = 60;
    $reiskosten[1][4] = 90;
    $reiskosten[2][1] = 30;
    $reiskosten[2][2] = 0;
    $reiskosten[2][3] = 40;
    $reiskosten[2][4] = 20;
    $reiskosten[3][1] = 60;
    $reiskosten[3][2] = 40;
    $reiskosten[3][3] = 0;
    $reiskosten[3][4] = 10;
    $reiskosten[4][1] = 90;
    $reiskosten[4][2] = 20;
    $reiskosten[4][3] = 10;
    $reiskosten[4][4] = 0;
    return($reiskosten[$vertrek][$bestemming]);
}
?>
<body>
<form action="" method="post">
    <table>
        <tr>
            <td>vertrek:</td>
            <td>
                <select name="vertrek">
                    <option value="1">Amsterdam</option>
                    <option value="2">Utrecht</option>
                    <option value="3">Den Haag</option>
                    <option value="4">Rotterdam</option>
                </select>
            </td>
            <td>Bestemming:</td>
            <td>
                <select name="bestemming">
                    <option value="1">Amsterdam</option>
                    <option value="2">Utrecht</option>
                    <option value="3">Den Haag</option>
                    <option value="4">Rotterdam</option>
                </select>
            </td>
        </tr>
    </table>
    <br><input type="submit" name="submit" value="Berekenen">
    </form>
</td>
<p>------------------------------------------------------------------------------------------</p>
<?php
if(isset($_POST["bestemming"]) && isset($_POST["vertrek"])) {
    if(empty($_POST["bestemming"])) {
        echo "<p>Bestemming niet bekend</p>";
        if (empty($_POST["vertrek"])) {
            echo "<p>vertrek niet bekend</p>";
        }
    } else {
        if($_POST["vertrek"] == "Amsterdam") {

        }
        $reiskosten = reiskosten($_POST["vertrek"], $_POST["bestemming"]);
        echo "<p>De berekende reiskosten zijn: $reiskosten euro</p>";
    }
} else {
    echo "Er gaat iets fout";
}
?>
</body>
</html>