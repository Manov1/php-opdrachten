<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>lab1.08</title>
</head>
<h2>inschrijfformulier</h2>
<body>
    <form action="lab08.verwerken.php" method="post">
        <label for="Achternaam">Achternaam</label>
        <input type="text" name="Achternaam" placeholder="" /><br>
        <label for="Voornaam">Voornaam</label>
        <input type="text" name="Voornaam" placeholder="" /><br>
        <label for="Straat">Straat</label>
        <input type="text" name="Straat" placeholder="" /><br>
        <label for="Postcode">Postcode</label>
        <input type="text" name="Postcode" placeholder="" /><br>
        <label for="Plaats">Plaats</label>
        <select id="Plaats" name="Plaats">
          <option value="Amersfoort">Amersfoort</option>
          <option value="Amsterdam">Amsterdam</option>
          <option value="Groningen">Groningen</option>
          <option value="Utrecht">Utrecht</option>
        </select><br>
        <label for="e-mail">E-mailadres</label>
        <input type="email" name="e-mail" placeholder="" /><br><br>
        Kies een opleiding:
        <br><input type="radio" name="Opleiding" value="ICT"> ICT
        <br><input type="radio" name="Opleiding" value="Eng"> Engels
        <br><input type="radio" name="Opleiding" value="Tec"> Techniek
        <br><input type="radio" name="Opleiding" value="Ned"> Nederlands
        <br><br>
        <input type="submit" name="submit" value="Versturen">
        <input type="reset" value="Reset">
</body>
</html>