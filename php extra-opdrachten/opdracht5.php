<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht 5</title>
</head>
<body>
    <?php
    for($teller = 1; $teller <7; $teller++)
    {
        echo "<h$teller>Dit is kopje $teller </h$teller>";
    }
    for($teller = 6; $teller >0; $teller--)
    {
        echo "<h$teller>Dit is kopje $teller </h$teller>";
    }
    ?>
</body>
</html>