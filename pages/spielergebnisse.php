<?php include"../styles/header.php"; ?>
<style> .spielstände  { border-bottom: solid #385769; color: #385769;  }</style>
<main>

<div>
<a href="spieleintrag.php" class="button">Ergebnis erfassen</a>
<h2 class="pageTitle gästebuchTitle">Ergebnisse</h2>
</div>


<h3 class="description">Auf dieser Seite erfährtst du alle aktuellen Spielergebnisse unserer Mannschaften.</h3>











<?php
$sql = "SELECT date, sport, home_team, home_points, guest_team, guest_points FROM result ORDER BY id DESC";

$query = mysqli_query($conn, $sql);

while($result = mysqli_fetch_array($query)){
    
    $date =  $result["date"];
    $sport =  $result["sport"];
    $home_team =  $result["home_team"];
    $home_points =  $result["home_points"];
    $guest_team =  $result["guest_team"];
    $guest_points =  $result["guest_points"];

    echo '<div class="eintrag spiel">

        <h3 class="team">'; echo htmlspecialchars($home_team); echo " &nbsp vs. &nbsp "; echo htmlspecialchars($guest_team); echo '</h3>

        <h3 id="points">'; echo htmlspecialchars($home_points); echo " : "; echo htmlspecialchars($guest_points); echo '<br></h3>

        <div class="line"></div>

        <h3 class="spieltag">'; echo "Spieltag: "; echo htmlspecialchars($date); echo '</h3>

        <h3 class="sport">'; echo htmlspecialchars($sport); echo '</h3>

          </div>';
}
?>



















</main>
<?php include"../styles/footer.php"; ?>