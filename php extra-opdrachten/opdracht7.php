<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht 7</title>
</head>
<body>
    <?php
    $nummerHTML= 0;
    $nummer = ["1", "8", "12", "7", "14", "8", "1", "1", "14", "7"];
    foreach($nummer as $hoogste){
        if($hoogste>=$nummerHTML){
            $nummerHTML = $hoogste;
            if ($nummerHTML==14) {
                echo $nummerHTML;
                break;
            }
        }
    }
    ?>
</body>
</html>