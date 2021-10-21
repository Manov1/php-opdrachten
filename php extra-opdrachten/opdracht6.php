<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht 6</title>
</head>
<body>
    <?php
    for($teller = 1; $teller <31; $teller++)
    {
        if($teller<11){
            if ($teller==1){
                echo "<p style=\"color:red;\">";
            }
            echo "$teller ";
            if($teller==11){
                echo "</p>";
            }
        } elseif ($teller<21){
            if ($teller==11){
                echo "<p style=\"color:green;\">";
            }
            echo "$teller ";
            if($teller==21){
                echo "</p>";
            }
        } elseif ($teller<31){
            if ($teller==21){
                echo "<p style=\"color:blue;\">";
            }
            echo "$teller ";
            if($teller==31){
                echo "</p>";
            }
        }
    }
    ?>
</body>
</html>