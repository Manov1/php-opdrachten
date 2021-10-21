<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht 11</title>
</head>
<body>
    <?php
    $vermedigvuldigen=1;
    for($teller = 1; $teller <1001; $teller++)
    {
        if($teller==(7*$vermedigvuldigen)){
            $vermedigvuldigen= $vermedigvuldigen+1;
            echo "<p style=\"color:red;\">$teller <b style=\"color:black;\">deelbaar door 7</b></p>";
        } else{
        echo "<p>$teller </p>";
        }
    }
    ?>
</body>
</html>