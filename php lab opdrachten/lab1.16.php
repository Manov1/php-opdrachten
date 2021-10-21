<!DOCTYPE html>
<html lang="nl">
<head>
    <meta http-equiv="Content-Type"
    content="text/html;
    charset=UTF-8" />
    <style>
        .album{clear: left; width: 100%;}
        .omslag{float: left;}
        .gegevens{float: left;}
        .korting{clear: left;}
        .aantal{background-color: #f8ce6c;}
        th{background-color: #f8ce6c;}
    </style>
    <title>lab 1.16</title>
</head>
<body style="font-family: Verdana; font-size: 9px;">
<h3>Mijn winkelmandje</h3>
<form name="albums" action="" method="post">
    <div class="album">
        <div class="omslag">
            <img src="img/evora.jpg" width="50px" alt="X"/>
        </div>
        <div class="gegevens">
            Cesaria Evora "Em Um Concerto" Prijs: $9
            <input type="hidden" name="albumcode[0]" value="001" >
            <input type="hidden" name="artiest[0]" value="Cesaria Evora" >
            <input type="hidden" name="album[0]" value="Em Um Concerto" >
            <input type="hidden" name="prijs[0]" value="9" >
            <input type="hidden" name="genre[0]" value="World" >
            <br />Aantal:
            <input type="text" size=2 maxlength=3 name="aantal[0]" class="aantal" value="0" >
        </div>
    </div>
    <div class="album">
        <div class="omslag">
            <img src="img/manuchao.jpg" width="50px" alt="X" />
        </div>
        <div class="gegevens">
            Manu Chao "Clandestino" Prijs: $5
            <input type="hidden" name="albumcode[1]" value="002" />
            <input type="hidden" name="artiest[1]" value="Manu Chao" />
            <input type="hidden" name="album[1]" value="Clandestino" />
            <input type="hidden" name="prijs[1]" value="5" />
            <input type="hidden" name="genre[1]" value="World" /><br />
            Aantal:
            <input type="text" size=2 maxlength=3 class="aantal" name="aantal[1]" value="0" >
        </div>
    </div>
    <div class="album">
        <div class="omslag">
            <img src="img/starboy.jpg" width="50px" alt="X" />
        </div>
        <div class="gegevens">
            The weeknd "Starboy" Prijs: $7
            <input type="hidden" name="albumcode[2]" value="003" />
            <input type="hidden" name="artiest[2]" value="The weeknd" />
            <input type="hidden" name="album[2]" value="Starboy" />
            <input type="hidden" name="prijs[2]" value="7" />
            <input type="hidden" name="genre[2]" value="World" /><br />
            Aantal:
            <input type="text" size=2 maxlength=3 class="aantal" name="aantal[2]" value="0" >
        </div>
    </div>
    <div class="korting">
        <br><hr />Korting:<br />
        <input type="checkbox" name="student" value="15" />
            Student: 15%<br />
        <input type="checkbox" name="klant" value="10" />
            Klant: 10%<br />
            <p>Selecteer een betalingswijze:</p>
        <select name="betalingswijze" value="true">
        <option value="visa">Visa</option>
        <option value="master">MasterCard</option>
        <option value="pay">Paypal</option>
        <option value="id">Ideal</option>
    </select>
        <input type="submit" width="300px" name="verzenden" value=" Bestellen " />
    </div>
</form>
<?php
    $korting = 0;
    if( isset($_POST["aantal"][0]) ) echo "Bestelde albums: ". $_POST["aantal"][0];
    if( isset($_POST["student"]) ) $korting = $korting + 15;
    if( isset($_POST["klant"]) ) $korting = $korting + 10;
    echo "<br>Korting is: $korting%";
    if(isset($_POST["verzenden"])) {
        switch($_POST["betalingswijze"]){
            case "visa" :
                echo "<br>Betalingswijze: Visa";
                break;
            case "master" :
                echo "<br>Betalingswijze: MasterCard";
                break;
            case "pay" :
                echo "<br>Betalingswijze: Paypal";
                break;
            case "id" :
                echo "<br>Betalingswijze: Ideal";
                break;
        }
    }
    if( isset($_POST['verzenden'])){
        include_once("externe_functions.php");
        echo "<br>De korting()-function: " . korting() . "%";
        $betalingswijze = $_POST['betalingswijze'];
        $serviceKosten = serviceKosten($betalingswijze);
        echo "<br>Servicekosten zijn: " . $serviceKosten;
    }
    if( isset($_POST['verzenden'])){
        $albumcode = $_POST['albumcode'];
        $factuur = facturering();
        echo "<br>".$factuur;
        premium();
    }
?>

</body>
</html>