<?php
session_start();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index opdracht 13</title>
</head>
<body>
    <form name="Tafel" action="opdracht13.php" method="post">
    <p>kies een tafel: </p>
    <select name="tafelkeuze" value="true">
        <option value="tafel1">tafel van 1</option>
        <option value="tafel2">tafel van 2</option>
        <option value="tafel3">tafel van 3</option>
        <option value="tafel4">tafel van 4</option>
        <option value="tafel5">tafel van 5</option>
        <option value="tafel6">tafel van 6</option>
        <option value="tafel7">tafel van 7</option>
        <option value="tafel8">tafel van 8</option>
        <option value="tafel9">tafel van 9</option>
        <option value="tafel10">tafel van 10</option>
    </select>
    <input type="submit" name="Tafel" value="Tafel" href="http://localhost/extra-opdrachten/opdracht13.php">
    </form>
    <?php
    $_SESSION["highscore"]=0;
    $replacenumber = 0;
    ?>
</body>
</html>