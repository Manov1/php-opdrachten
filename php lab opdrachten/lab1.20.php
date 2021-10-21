<?php
    ob_start();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>lab 1.20</title>
</head>
<body>
    <form name="login"
    action=""
    method="post">
        Gebruikersnaam:<br>
        <input type="text" name="user" /><br><br>
        <input type="submit" name="submit" value="Inloggen" />
    </form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $user = $_POST["user"];
    $melding = welkom($user);
    echo "<br> $melding";
}
ob_end_flush();
function welkom($user){
    if(isset($_COOKIE["gebruiker"])){
        if($_COOKIE["gebruiker"]==$user){
            echo "Hallo ".$_COOKIE["gebruiker"].", welkom terug";
        }else{
            setcookie("nieuwegebruiker", "$user", mktime(0,0,0,1,1,2055));
            $nieuwegebruiker = $_COOKIE["nieuwegebruiker"];
            echo "<br>Hallo ".$user.", u bent onze nieuwste gebruiker";
        }
    }
}
?>