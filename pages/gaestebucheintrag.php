<?php include"../styles/header.php";




$vorname = $nachname = $email = $text = "";

if(isset($_POST["submit"])){
    
// Validation--------------------------------------------------------------------

    // VORNAME
    if(empty($_POST["vorname"])){
        $errors["vorname"] = "<br> <p>Geben Sie Ihren Vornamen ein.</p><br>";
    } else {
        $vorname = $_POST["vorname"];
        if(!preg_match("/^[a-zA-ZäöüÄÖÜ]+$/u", $vorname)){
        $errors["vorname"] = "<br> <p>Geben Sie bitte einen gültigen Vornamen ein.</p><br>";
        }
    }

    // NACHNAME
    if(empty($_POST["nachname"])){
        $errors["nachname"] = "<br> <p>Geben Sie Ihren Nachnamen ein.</p><br>";
    } else {
        $nachname = $_POST["nachname"];
        if(!preg_match("/^[a-zA-ZäöüÄÖÜ]+$/u", $nachname)){
        $errors["nachname"] = "<br> <p>Geben Sie einen gültigen Nachnamen ein</p><br>";
        }
    }

    // EMAIL
    if(empty($_POST["email"])){
        $errors["email"] = "<br> <p>Geben Sie Ihre E-Mail ein.</p><br>";
    } else {
        $email = $_POST["email"];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors["email"] = "<br> <p>Geben Sie eine gültige E-Mail an.</p><br>";
        }
    }

    // TEXT
    if(empty($_POST["text"])){
        $errors["text"] = "<br> <p>Geben Sie einen Text ein.</p><br>";
    } else {
        $text = $_POST["text"];
    }


    
    if(array_filter($errors)){
        // echo "errors in the form";

    } else {
        // Wenn keine Fehler werden die Variablen definitiv zugewiesen
        $vorname = mysqli_real_escape_string($conn, $_POST["vorname"]);
        $nachname = mysqli_real_escape_string($conn, $_POST["nachname"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $text = mysqli_real_escape_string($conn, $_POST["text"]);
        // IP Adresse des Clients abfangen
        if(empty($IPclient)) {
            $ip_client = $_SERVER["REMOTE_ADDR"];
        }
       
        
        // Query definieren
        $sql = "INSERT INTO guestbook(vorname,nachname,email,text,ip_client) VALUES ('$vorname', '$nachname', '$email', '$text', '$ip_client')";

        // DB-Eintrag ausführen
        if(!mysqli_query($conn, $sql)){
            echo "Daten NICHT gespeichert.";
        } else {
            header("Location: sent.php");
            
        }

         // Names-Cookie setzten
 
        setcookie("vorname",$vorname,time()+31536000,"/");

    }
}












?>
<style> .gästebuch  { border-bottom: solid #385769; color: #385769;  }</style>

<main>


<article id="articleForm">
<h2 id="pageTitleForm" id?"pageTitleForm">Gästebuch</h2>
   <h3 id="articleTitleForm">Erzähl uns deine Erlebnis.</h3>
   
   <!----- FORM ----->
    <form class="formular" method="POST" action="">

        <label for="vorname">Vorname:</label>
        <input id="vorname" type="text" name="vorname" value="<?php echo htmlspecialchars($vorname); ?>">
        <?php if(empty($errors["vorname"])) {
            echo "<br>"; } else { echo $errors["vorname"];}?>

        <br>
        <label for="nachname">Nachname:</label>
        <input id="nachname" type="text" name="nachname" value="<?php echo htmlspecialchars($nachname); ?>">
        <?php if(empty($errors["nachname"])) {
            echo "<br>"; } else { echo $errors["nachname"];}?>
       
        <br>
        <label for="email" class="emailpadding">E-Mail:</label>
        <input id="email" type="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
        <?php if(empty($errors["email"])) {
            echo "<br>"; } else { echo $errors["email"];}?>
      
        <br>
        <label for="text">Text:</label><br>
        <textarea id="text" type="text" name="text"><?php echo htmlspecialchars($text); ?></textarea>
        <?php if(empty($errors["text"])) {
            echo "<br>"; } else { echo $errors["text"];}?>

        <br>
        <input type="submit" name="submit" value="Absenden" class="submit">
    </form>

<br><br>


</article>



















</main>

<?php include"../styles/footer.php" ?>