<?php 

$severname ="localhost";
$user ="dave";
$pass ="123";
$dbname = "svss";

$conn = mysqli_connect($severname, $user, $pass, $dbname);

if(!$conn) {
    // echo "Verbindung zu DB fehlgeschlagen.";
}
    echo "Verbindung erfolgreich";
?>