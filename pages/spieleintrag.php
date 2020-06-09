<?php include"../styles/header.php";

$error = "<br>";
$date = $sport = $home_team = $guest_team = $home_points = $guest_points = "";


if(isset($_POST["submit"])){
    

        $date = $_POST["date"];
        $home_team = $_POST["home_team"];
        $guest_team = $_POST["guest_team"];
        $home_points = $_POST["home_points"];
        $guest_points = $_POST["guest_points"];
        




        // Passwort überprüfen
        if($_POST["password"] == "moin"){
        
        // Variablen  zuweisen
        $date = mysqli_real_escape_string($conn, $_POST["date"]);
        $sport = mysqli_real_escape_string($conn, $_POST["sport"]);
        $home_team = mysqli_real_escape_string($conn, $_POST["home_team"]);
        $guest_team = mysqli_real_escape_string($conn, $_POST["guest_team"]);
        $home_points = mysqli_real_escape_string($conn, $_POST["home_points"]);
        $guest_points = mysqli_real_escape_string($conn, $_POST["guest_points"]);
        // IP Adresse des Clients abfangen
        if(empty($IPclient)) {
            $ip_client = $_SERVER["REMOTE_ADDR"];
        }
       
        
        // Query definieren
        $sql = "INSERT INTO result(date, sport, home_team, guest_team, home_points, guest_points, ip_client) VALUES ('$date', '$sport', '$home_team', '$guest_team', '$home_points', '$guest_points', '$ip_client')";

        // DB-Eintrag ausführen
        if(!mysqli_query($conn, $sql)){
            echo "Daten NICHT gespeichert.";
        } else {
            header("Location: spielergebnisse.php");
            
        }
    }
    else {

        
        $error = "Das Passwort ist falsch.";
    }
         

    
}












?>

<style> .spielstände  { border-bottom: solid #385769; color: #385769;  }</style>
<main>


<article id="articleForm">
<h2 id="pageTitleForm">Spielergebnis eintragen</h2>

<h3 id="articleTitleForm">Einträge können nur von berechtigten Personen getätigt werden. (Passwort wird verlangt)</h3>

   
   <!----- FORM ----->
    <form id="spieleintrag-form" method="POST" action="">

        <label for="date">Spieltag:</label>
        <input id="date" type="text" name="date" maxlength="10" value="<?php echo htmlspecialchars($date); ?>">
        
        <br>
        <label for="sport">Sportart:</label>
        <select id="sport" name="sport">
            <option value="none" selected disabled hidden> wähle eine Sportart</option> 
            <option value="Fussball">Fussball</option>
            <option value="Tennis">Tennis</option>
            <option value="Tischtennis">Tischtennis</option>
            <option value="Volleyball">Volleyball</option>
            <option value="Golf">Golf</option>
        </select> 

        <br>
        <label for="home_team">Heimteam:</label>
        <input id="home_team" type="text" name="home_team" value="<?php echo htmlspecialchars($home_team); ?>">
        
        <br>
        <label for="guest_team">Gastteam</label>
        <input id="guest_team" type="text" name="guest_team" value="<?php echo htmlspecialchars($guest_team); ?>">
        <br>
       
        <label for="home_points">Punkte Heimteam:</label>
        <input id="home_points" type="text" name="home_points" value="<?php echo htmlspecialchars($home_points); ?>">
        <br>

        <label for="guest_points">Punkte Gastteam:</label>
        <input id="guest_points" type="ext" name="guest_points" value="<?php echo htmlspecialchars($guest_points); ?>">
        <br>

        <label for="password">Passwort:</label>
        <input id="password" type="password" name="password" >
        <p class="error"><?php echo $error; ?></p>
        

        <br>
        <input type="submit" name="submit" value="Absenden" class="submit">
    </form>




</article>
















<br><br><br><br>


</main>

<?php include"../styles/footer.php" ?>