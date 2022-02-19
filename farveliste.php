<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p> <strong> Vælg stof/læder & træ farve & produkt</strong></p>
        <!-- dropdown list-->
<form method="POST" input type="submit" action="basket.php" name="farver" name="produkt">
    
<label>Stof/læder farver</label>
<select name="farvestof" id="farvestof">
    <option value="Hvid">Hvid</option>
    <option value="Sort">Sort</option>
    <option value="Brun">Brun</option>
    <option value="Grå">Grå</option>
    <option value="Mørke blå">Mørke blå</option>
</select>

<br><br>

<label>Træ farve</label>
<select name="træfarve" id="træfarve">
    <option value="Mørkbejdset">Mørkbejdset</option>
    <option value="Sort">Sort</option>
    <option value="Eg/ubehandlet">Eg/udbehandlet</option>
    <option value="Mahogni">Mahogni</option>
    <option value="Kirsebærbejdset">Kirsebærbejdset</option>
</select>

<br><br>
<label>Produkt</label>
<select name="produkt" id="produkt">
    <option value="Produkt 1">Produkt 1</option>
    <option value="Produkt 2">Produkt 2</option>
    <option value="Produkt 3">Produkt 3</option>
    <option value="Produkt 4">Produkt 4</option>
</select>
<!-- knap af valgmuligerder af farve og produkt sendens vider til basket.php-->
<input type="submit" name="farveknap" value="Læg i kurv">

<!-- if udmelding til at sende til basket.php -->
<?php
if (isset($farvestof) && isset($træfarve) && isset($produkt)){
$produkt = $_POST["produkt"];
$farvestof = $_POST["farvestof"];
$træfarve = $_POST["træfarve"];
}
?>
</form>
</body>
</html>