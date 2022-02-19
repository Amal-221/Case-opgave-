<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indkøbskurv</title>
</head>
<body>
    <blockquote>
        <p><strong>Kurv</strong></p>
        <p>Kurv indeholder:</p>

        <!-- if udmelding montager informaton fra dropdown list -->
<pre>
    <?php
    if (isset($_POST["farvestof"])&& isset($_POST["træfarve"])&& isset($_POST["produkt"])) {
        $farvestof=$_POST["farvestof"];
        $træfarve=$_POST["træfarve"];
        $produkt=$_POST["produkt"];
        echo "<br>$produkt</br>";
        echo "<br>møbel i:<br>";
        echo "<br>$farvestof</br> stof/læder farve. <br>og<br>";
        echo "<br>$træfarve</br> træ farve.";
        
    }

    else{
        echo "Kurven er tom";
    }
?>
</pre>
<!-- trykker på betaling sender vider til pay.php-->
<form action="pay.php">
    <input type="submit" name= "paybutton" value=" Til betaling">
</form>
    </blockquote>
</body>
</html>