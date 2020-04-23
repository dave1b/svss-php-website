<!DOCTYPE html>
<html lang="de">
<head>
<!-- META -->
<meta charset="utf-8"/>
<meta name="author" content="Dave Brunner">
<meta name="description" content="Sportverein Sempachersee">
<meta name="keywords" content="Sportverein, Sempach, Sport, Luzern, Sursee, Eich, Nottwil, Schenkon, Oberkirch, Neuenkirch">
<meta name="viewport" content="width=device-width, initial-scale=0.9">

<!-- <meta http-equiv="refresh" content="100"> -->

<!-- DB verbinden -->
<?php include"../db/dbconnect.php";?>

<!-- Links -->
<link rel="stylesheet" href="../styles/stylesheet.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="https://davebrunner.111mb.de/svss/medias/icon.png">
<!-- Title -->
<title>SV-Sempachersee</title>
<!-- </head> -->

<header>
<div class="middle">
<a id="headerTitlea" href="index.php"><h1 class="headerTitle">Sportverein Sempachersee</h1></a>
<h3 id="userName">Hallo <?php if(!isset($_COOKIE["vorname"])){ echo "Gast";} else {echo htmlspecialchars($_COOKIE["vorname"]);}?></h3>
<!-- <br><br><br><br><br><br> -->
</div>
<div class="headerpadding"></div>
<h3 id="motto">Wir machen dich fit!</h3>


</header>

<nav>
    <a href="index.php" class="homepage">Homepage</a>
    <a href="verein.php" class="verein">Unser Verein</a>
    <a href="spielergebnisse.php" class="spielstände">Spielstände</a>
    <a href="gaestebuch.php" class="gästebuch">Gästebuch</a>
    <a href="sponsoren.php"class="sponsorennav">Sponsoren</a>
</nav>