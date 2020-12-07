<?php include"../styles/header.php";
$logged_in = false;
$tried = false;
$username = " ";
$pwd = " "; 


//Log in Vorgang
if(isset($_POST["submit"])){
    
    $tried = true;
    $username = $_POST["username"];
    $pwd = $_POST["pwd"]; 

    $sql = "SELECT username, pwd FROM admin ORDER BY id DESC";

    $query = mysqli_query($conn, $sql);

    while($result = mysqli_fetch_array($query)){
    
        $username_db =  $result["username"];
        $pwd_db =  $result["pwd"];
        if($username == $username_db && $pwd == $pwd_db){
            $logged_in = true;
        }

    }

}


// Log in checken ----------------------------------------------- //

if($logged_in == false){?>

<!-- If not logged in -->
<main>
<article id="articleForm">
    <h3 id="pageTitleForm">Adminseite</h3>
    
    <br>
    <h3 id="articleTitleForm">Einloggen</h3>
    <form id="login" method="POST" action="">
    
            <label for="username">Benutzername:</label>
            <input id="username" type="text" name="username" maxlength="20">
    
            <br>
            <label for="pwd">Passwort:</label>
            <input id="pwd" type="password" name="pwd" >
            
            <?php if($tried == true){ ?>
            <p class="error">Ungültiges Login</p>
            <?php } ?>

            <br>
            <input type="submit" name="submit" value="Einloggen" class="submit">
    </form>
    
</article>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
</main>


<?php }
else { ?>

<!-- If logged in -->
<main>
<h2 class="pageTitle gästebuchTitle">Adminseite</h2>

<h2 class="articleTitle">Websitebesuche</h2>
<br><br>

<?php
$sql = "SELECT id, name, besuchsdatum, ip_client FROM visitors ORDER BY id DESC";

$query = mysqli_query($conn, $sql);

while($result = mysqli_fetch_array($query)){
    
    $id =  $result["id"];
    $name =  $result["name"];
    $besuchsdatum =  $result["besuchsdatum"];
    $ip_client =  $result["ip_client"];

    echo "<div class='visitor'>";

    echo "<p> IP-Adresse: <b>"; echo htmlspecialchars($ip_client); echo "</b></p>";
    echo "<p> Besuchsdatum: "; echo htmlspecialchars($besuchsdatum); echo "</p>";
    echo "<p> ID: "; echo htmlspecialchars($id); echo "</p>";
    echo "<p> Name: "; echo htmlspecialchars($name); echo "</p>";
    
    
 
    echo "</div>";

  
}
?>
<br><br><br><br>
</main>


<?php 
}
include"../styles/footer.php" ?>