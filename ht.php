
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farstrup Furnituer</title>
</head>
<body bgcolor="gray">

<div id="wrapper">
            <div id="banner"><h2>Farstrup Furniture</h2></div>
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Forside</a></li>
                    <li><a href="webshop.php">webshop</a></li>
                    <li><a href="om os.php">om so</a></li>
                    <li><a href="index.php">Indkøbskurven</a></li>
                    <li><a href="kundeservice.php">Kundeservice</a></li>
                    <li><a href="log ind.php">log ind</a></li>
                </ul>
            </nav>
            
            <div id="content_area">
                <?php echo $content; 
                function velkomst()
{
    echo "Velkommen til Farstrup furniture <br>";
    echo "danmarks bedste møbelvirksomhed <br><br>";
}

velkomst();

?>


            </div>
        
            <div id="sidebar">
                
            </div>
            
            <footer>
                <p>Farstrup furniture</p>
            </footer>
        </div>
</div>
        <style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}


#wrapper
{
    width: 1080px;
    background-color: white;
    margin: 0 auto;
    padding: 10px;
    border: 5px solid #dedede;

}

#banner
{
   background-color: #333;
   color:#dedede;
   padding: 40px;
   text-align: center;

    


}

#content_area
{
    float: left;
    width: 750px;
    margin: 20px 0 20px 0;
    padding: 10px;

}

#sidebar
{
    float:right;
    width: 250px;
    height: 400px;
    margin: 20px 10px;
    padding: 10px;
    border: 2px solid #E3E3E3;

}

footer
{
    clear: both;
    width: auto;
    height: 40px;
    padding: 10px;
    border: 3px solid #E3E3E3;
    text-align: center;
    text-shadow: 0.1em 0.1em #333;
    color: #fff;
    background:#333;

}

#navigation
{
    height: 60px;
    border: 3px solid #E3E3E3;
    margin-top: 20px;
    text-shadow: 0.1em 0.1em #333;
    background:#333;

}

#nav
{
    list-style: none;
}

#nav ul
{
    margin: 0;
    padding: 0;
    width: auto;
    display: none;

}

#nav li
{
    font-size: 20px;
    float:left;
    position: relative;
    width: 170px;
    height: 25px;
}

#nav a:link, nav a:active, nav a:visited
{
    display: block;
    color: #fff;
    text-decoration: none;
}

#nav a:hover
{
    color: lightblue;
}
</style>
</body>
</html>