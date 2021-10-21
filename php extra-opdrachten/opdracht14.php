<?php
if ( isset($_POST["opnieuw"])){
    session_start();
    $_SESSION["current"]=$_SESSION["current"]-1;
    if($_SESSION["current"]<0){
        $_SESSION["current"]=15;
    }
} else{
include_once("opdracht14extrn.php");
}
$status=null;
for($teller=1; $teller < 13; $teller++){
    $nummer[$teller]=null;
}
for($teller2=1; $teller2 < 10; $teller2++){
    $num[$teller2]=rand(1, 12);
    if($num[$teller2]==12){
        $num[$teller2]="bonus";
    }
}


$result1 = '<table style=width:50%>
    <tr>
      <th style=width:5%>'.$num[1].'</th>
      <th style=width:5%>|</th>
      <th style=width:5%>'.$num[2].'</th>
      <th style=width:5%>|</th>
      <th style=width:5%>'.$num[3].'</th>
    </tr>';
$result2 = '
    <tr>
      <th style=width:5%>'.$num[4].'</th>
      <th style=width:5%>|</th>
      <th style=width:5%>'.$num[5].'</th>
      <th style=width:5%>|</th>
      <th style=width:5%>'.$num[6].'</th>
    </tr>';
$result3 = '
    <tr>
      <th style=width:5%>'.$num[7].'</th>
      <th style=width:5%>|</th>
      <th style=width:5%>'.$num[8].'</th>
      <th style=width:5%>|</th>
      <th style=width:5%>'.$num[9].'</th>
    </tr></table>';

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht 14</title>
</head>
<body>
<p><center><big><?php echo $result1; ?></big></center></p>
<p><center><big><?php echo $result2; ?></big></center></p>
<p><center><big><?php echo $result3; ?></big></center></p>
<br />
<br />
<?php
if ( isset($_POST["opnieuw"]) || $_SESSION["current"]>0){
    for($teller1=1; $teller1 < 10; $teller1++){
        if($teller1==1 || $teller1==4 || $teller1==7){
        for($teller2=1; $teller2 < 10; $teller2++){
            if($teller2==2 || $teller2==5 || $teller2==8){
            for($teller3=3; $teller3 < 10; $teller3++){
                if($teller3==3 || $teller3==6 || $teller2==9){
                if($num[$teller1]==$num[$teller2] && $num[$teller2]==$num[$teller3]){
                    for($teller=1; $teller < 13; $teller++){
                        if($teller==7){}else{
                            if($num[$teller1] == $teller){
                                $_SESSION["current"]= $_SESSION["current"]+5;
                                $status= $status."je hebt 3 keer een $num[$teller1]. +5<br>";
                            }
                        }
                    }
                    if($num[$teller1] == 7){
                        $_SESSION["current"]= $_SESSION["current"]+15;
                        $status= $status."je hebt 3 keer een $num[$teller1]. +15<br>";
                    }elseif($num[$teller1] == "bonus"){
                        $_SESSION["current"]= $_SESSION["current"]+30;
                        $status= $status."je hebt 3 keer een $num[$teller1]. +30<br>";
                    }
                }
                }
            }
            }
        }
        }
        if($teller1==3 || $teller1==6 || $teller1==9){
            if($num[$teller1]==2){
                $_SESSION["current"]= $_SESSION["current"]+1;
                $status= $status."je hebt 1 keer een $num[$teller1] in de rechter rol. +1<br>";
                for($teller2=1; $teller2 < 10; $teller2++){
                    if($teller2==2 || $teller2==5 || $teller2==8){
                        if($num[$teller2]==2){
                            $_SESSION["current"]= $_SESSION["current"]+3;
                            $status= $status."je hebt ook 1 keer een $num[$teller1] in de middelste rol. +3<br>";
                            $num[$teller1]=0;
                        }
                    }
                }
            }
        }
    }
}
?>
<center><big><?php echo $status; ?></big></center>
<br />
<br />
<center><big><?php echo 'je hebt <strong>'.$_SESSION["current"].'</strong> punten!'; ?></big></center>
<?php
if($_SESSION["current"]>0){
    echo"
<form name=\"opnieuw\" action=\"\" method=\"post\">
    <center>
    <input type=\"submit\" name=\"opnieuw\" value=\"draai opnieuw\">
    <i>draaien kost 1 punt</i>
    </center>
</form>";
}else{
    echo"<h1>game over</h1>
<form name=\"opnieuw\" action=\"\" method=\"post\">
    <center>
    <input type=\"submit\" name=\"opnieuw\" value=\"start opnieuw\">
    <i>draaien kost 1 punt</i>
    </center>
</form>";
}
?>
</body>
</html>