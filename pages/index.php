<?php include"../styles/header.php";
   
    
   $ip = $_SERVER["REMOTE_ADDR"]; 
    
   
    
    // Query definieren
    $sql = "INSERT INTO visitors(ip_client) VALUES ('$ip')";
    mysqli_query($conn, $sql);

?>
<style> .homepage  { border-bottom: solid #385769; color: #385769; } </style><main>

<br>

<article>
<h3 class="articleTitle">Herzlich Willkommen auf der Seite des Sportvereins Sempachersee</h3>
<p class="simpleText">
Der Sportvereins Sempachersee pflegt seit über 150 Jahren Sport in seiner ganzen Vielfalt in den 
entsprechenden Alters- & Fähigkeitsstufen und fördert entsprechende Ausbildungs-, Wettkampf- und 
Spielmöglichkeiten. Unser Ziel ist es das Sportleben rund um den Sempachersee aktiv zu pushen. Du bist 
herzlichst eingeladen dich uns anzuschliessen. <br>Gemeinsam haben wir Spass! </p>
<div class="middle">
<iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/44m0GIV8vVw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
    <br><br>
</article>
    <br>


<!-- FEED-------------------------------------------------- -->

<h2 class="pageTitle">Aktuelles</h2>

<!-- ------ -->


<article>
<img class="quadratischPic" src="https://davebrunner.111mb.de/svss/medias/coronavirus.jpg">
<h3 class="articleTitle">Aktuelle Lage wegen Coronavirus</h3>
<p class="simpleText">
29. Februar <br><br>
Liebe Freunde des Sportvereins Sempachersee <br>
Aufgrund der aktuellen Situation und der Empfehlung des Bundes, wird das diesjährige Turner Super
Lotto nicht durchgeführt. Die Gesundheit unserer Lottospieler, unserer Helfer 
und Helferinnen stehen ganz klar im Vordergrund. Der Turnverein Sursee entschuldigt sich von 
ganzem Herzen für die einhergehenden Umstände und bedankt sich für euer Verständnis. Lerne <a class="link" href="https://www.bag.admin.ch/bag/de/home.html">hier</a> mehr über die aktuelle Coronasituation.<br>
Herzlichst,<br>
Sportverein Sempachersee </p>
</div>
</article>


<!-- ------ -->

<article>
<img class="quadratischPic" src="https://davebrunner.111mb.de/svss/medias/gv.png">
<h3 class="articleTitle">Generalversammlung 2020</h3>
<p class="simpleText">
02. Februar <br><br>
Vergangener Freitag hatten die Turnerinnen und Turner der Aktivriege des Sportvereins Sempachersee die 133. 
Generalversammlung. Nebst dem Jahresrückblick gab es auch Änderungen, einzelnen Turnerinnen und 
Turnern wurde gratuliert zu ihrem erfolgreichen Turnerjahr und es musste auch Abschied genommen werden.
Der Abend startete mit einem feinen Apero auf der Terrasse des Restaurants Schlacht in Sempach, um danach in 
die Wärme zu gehen, wo die Turnerschar von der Präsidentin des Turnvereins, Nadine Amrein, herzlich 
begrüsst wurden. Nach der Begrüssung wurde zuerst gegessen, um anschliessend gestärkt mit der 
Generalversammlung beginnen zu können.</p>
</article>




</main>

<?php include"../styles/footer.php" ?>