<?php
session_start();
$extra=null;
$aantal=0;
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht 12</title>
</head>
<body>
<form name="formulier" action="" method="post">
    <?php
    if(isset($_POST["Extra"])){
        echo "<table style=\"width:100%\">
        <tr>
        <td>Groente</td>
        <td>Fruit</td>
        <td>Toetje</td>
      </tr>";
        for($teller=0; $teller < $_POST["aantal"]; $teller++){
        $extra = "<tr>
        <td><input type=\"text\" name=\"groente[$teller]\"></td>
        <td><input type=\"text\" name=\"fruit[$teller]\"></td>
        <td><input type=\"text\" name=\"toetje[$teller]\"></td>
        </tr>";
        echo $extra;
        }
        $_SESSION["aantal"] = $_POST["aantal"];
        echo "</table>
        <input type=\"submit\" name=\"Submit\" value=\"Versturen\">";
    }
    ?>
    </form>
    <form name="Extra" action="" method="post">
    extra rijen toevoegen <input type="text" name="aantal">
    <input type="submit" name="Extra" value="voeg toe">
    </form>
    <?php
    if( isset($_POST["Submit"])){
        echo "<table style=\"width:100%\">
  <tr style=\"background-color:#00b8e0; color:white\">
    <td>Groente</td>
    <td>Fruit</td>
    <td>Toetje</td>
  </tr>";
        for($teller2=0; $teller2 < $_SESSION["aantal"]; $teller2++){
            echo "<tr>
            <td>".$_POST['groente'][$teller2]."</td>
            <td>".$_POST['fruit'][$teller2]."</td>
            <td>".$_POST['toetje'][$teller2]."</td>
            </tr>";
        }
        echo "</table>";
    }
?>
</body>
</html>