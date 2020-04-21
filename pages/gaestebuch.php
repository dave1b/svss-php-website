<?php include"../styles/header.php"; ?>
<style> .gästebuch  { border-bottom: solid #385769; color: #385769;  }</style>

<main>

<div>
<a href="gaestebucheintrag.php" class="button">Eintrag erfassen</a>
<h2 class="pageTitle gästebuchTitle">Gästebuch</h2>
</div>
<h3 class="description">Stöbere hier durch unser Gästebuch und erhalte einige Einblicke in unseren Verein.<br> Gerne darfst du dich auch selber eintragen.</h3>

<?php

$sql = "SELECT vorname, nachname, text, erstelldatum FROM guestbook ORDER BY id DESC";

$query = mysqli_query($conn, $sql);

while($result = mysqli_fetch_array($query)){
    
    $vorname =  $result["vorname"];
    $nachname =  $result["nachname"];
    $text =  $result["text"];
    $erstelldatum =  $result["erstelldatum"];

    echo '<div class="eintrag">
          <h3 class="name">'; echo htmlspecialchars($vorname); echo " "; echo htmlspecialchars($nachname); echo '</h3>
          <h4 class="erstelldatum">'; echo htmlspecialchars($erstelldatum); echo '</h4>
          <div class="line"></div>
          <p class="text">'; echo htmlspecialchars($text); echo '</p>
          </div>';
}
?>



  
            








</main>

<?php include"../styles/footer.php" ?>