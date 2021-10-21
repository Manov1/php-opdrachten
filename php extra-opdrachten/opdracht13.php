<?php
session_start();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht 13</title>
</head>
<body>
    <?php
    if ( isset($_POST["Tafel"])){
        switch($_POST["tafelkeuze"]){
            case "tafel1" :
                $_SESSION["replacenumber"]=1;
                randomnumber($_SESSION["replacenumber"]);
                $replacenumber=$_SESSION["replacenumber"];
                break;
            case "tafel2" :
                $_SESSION["replacenumber"]=2;
                randomnumber($_SESSION["replacenumber"]);
                $replacenumber=$_SESSION["replacenumber"];
                break;
            case "tafel3" :
                $_SESSION["replacenumber"]=3;
                randomnumber($_SESSION["replacenumber"]);
                $replacenumber=$_SESSION["replacenumber"];
                break;
            case "tafel4" :
                $_SESSION["replacenumber"]=4;
                randomnumber($_SESSION["replacenumber"]);
                $replacenumber=$_SESSION["replacenumber"];
                break;
            case "tafel5" :
                $_SESSION["replacenumber"]=5;
                randomnumber($_SESSION["replacenumber"]);
                $replacenumber=$_SESSION["replacenumber"];
                break;
            case "tafel6" :
                $_SESSION["replacenumber"]=6;
                randomnumber($_SESSION["replacenumber"]);
                $replacenumber=$_SESSION["replacenumber"];
                break;
            case "tafel7" :
                $_SESSION["replacenumber"]=7;
                randomnumber($_SESSION["replacenumber"]);
                $replacenumber=$_SESSION["replacenumber"];
                break;
            case "tafel8" :
                $_SESSION["replacenumber"]=8;
                randomnumber($_SESSION["replacenumber"]);
                $replacenumber=$_SESSION["replacenumber"];
                break;
            case "tafel9" :
                $_SESSION["replacenumber"]=10;
                randomnumber($_SESSION["replacenumber"]);
                $replacenumber=$_SESSION["replacenumber"];
                break;
            case "tafel10" :
                $_SESSION["replacenumber"]=10;
                randomnumber($_SESSION["replacenumber"]);
                $replacenumber=$_SESSION["replacenumber"];
                break;
        }
    }
    ?>
    <?php
function randomnumber($replacenumber){
    $_SESSION["cijfer"] = rand(1, 10);
    $cijfer = $_SESSION["cijfer"] ;
    $_SESSION["result"]  = $_SESSION["replacenumber"]*$cijfer;
    $result = $_SESSION["result"];
    echo "<br>$replacenumber*$cijfer=<form name=\"Tafel\" action=\"\" method=\"post\">
    <input type=\"text\" name=\"antwoord\">
    <input type=\"submit\" name=\"submit\" value=\"antwoord\"></form>";
}
    function highscore($highscore){
        if( isset($_POST["submit"])){
            if($result=$_POST["antwoord"]){
        $highscore= $highscore+1;
        $_SESSION["highscore"]= $highscore;
        echo "<h1>jouw score is: $highscore</h1>";
    }
}
    }
    
    if( isset($_POST["submit"])){
        if($_SESSION["result"]==$_POST["antwoord"]){
        randomnumber($_SESSION["replacenumber"]);
        echo "<p>je had het antwoord goed.<br>+1 punt</p>";
        highscore($_SESSION["highscore"]);
    }else{
        echo "<h1>antwoord was fout<h1><h1>jouw score is nu: 0</h1>";
    }
}
?>
<form name="HOME" action="opdracht13index.php" method="post">
        <br><input type="submit" name="HOME" value="terug naar homepagina" href="opdracht13index.php">
        </form>
</body>
</html>