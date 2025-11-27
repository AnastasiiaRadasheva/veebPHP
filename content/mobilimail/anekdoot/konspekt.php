<?php
echo "<!DOCTYPE html>";
echo "<html lang='et'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Anekdootide Projekti Konspekt</title>";

echo "</head>";
echo "<body>";

echo "<h1>Projekti <em>Anekdootid</em> konsppekt</h1>";

// ===== Jaotus 1 =====
echo "<div class='section'>";
echo "<h2>Peamine lehe fail (nt main.php)</h2>";
echo "<p>See fail on nagu lehe süda. Siin on kogu HTML, mis kuvatakse brauseris, ning mõned PHP osad, mis aitavad lehte muuta dünaamiliseks.</p>";

echo "<p>Siin kasutatakse XHTML 1.0 Transitional, mis tähendab, et leht on natuke vanamoodsam, aga väga ühilduv vanemate brauseritega.</p>";

echo "<h3>Mida see fail teeb:</h3>";
echo "<ul>
    <li>Kuvab pealkirja <code>Anekdootid</code>.</li>
    <li>Lisab CSS stiilid failist <code>anekdoot.css</code>, et leht näeks kena välja.</li>
    <li>Lisab navigeerimismenüü teise failist <code>nav.php</code>, et ei peaks sama koodi korduvalt kirjutama.</li>
</ul>";

echo "<h3>PHP näide:</h3>";
echo "<pre>";
echo htmlspecialchars('<?php
include("nav.php"); // siia lisatakse menüü, et seda ei peaks mitu korda kirjutama
?>');
echo "</pre>";

echo "<h3>Navigeerimismenüü HTML:</h3>";
echo "<pre>";
echo htmlspecialchars('
<div id="header">
    <div class="nav">
        <ul>
            <li><a href="esim.php">1.</a></li>
            <li><a href="tein.php">2.</a></li>
            <li><a href="kolms.php">3.</a></li>
            <li><a href="avaleht.php">Tagasi</a></li>
        </ul>
    </div>
</div>
');
echo "</pre>";
echo "</div>";

// ===== Jaotus 2 =====
echo "<div class='section'>";
echo "<h2>Nav.php</h2>";
echo "<p>Nav.php on fail, kus on kirjas navigeerimise menüü. Selle abil saab kiiresti liikuda lehtede vahel. Eelised: kui tahad menüüd muuta, piisab, kui muudad ainult seda faili, kõik lehed, mis seda kasutavad, muutuvad automaatselt.</p>";

echo "<h3>Koodinäide:</h3>";
echo "<pre>";
echo htmlspecialchars('
<div class="nav">
    <ul>
        <li><a href="esim.php">1.</a></li>
        <li><a href="tein.php">2.</a></li>
        <li><a href="kolms.php">3.</a></li>
        <li><a href="avaleht.php">Tagasi</a></li>
    </ul>
</div>
');
echo "</pre>";
echo "</div>";

// ===== Jaotus 3 =====
echo "<div class='section'>";
echo "<h2>PHP põhifunktsioonid, mida selles projektis kasutatakse</h2>";
echo "<p>Projekt on väga lihtne, seega peamised PHP tööriistad on järgmised:</p>";
echo "<ul>
    <li><strong>include('fail.php')</strong> — ühendab teise faili, nii et ei pea samu ridu koodi korduvalt kirjutama.</li>
    <li><strong>echo</strong> — kuvab teksti või HTML-i lehel.</li>
    <li>Dünaamiline sisu: PHP abil saab hiljem luua näiteks nimekirja anekdootidest, mis tulevad failist või andmebaasist.</li>
</ul>";
echo "</div>";

// ===== Jaotus 4 =====
echo "<div class='section'>";
echo "<h2>Projektifailide struktuur</h2>";
echo "<p>Lihtne ülevaade:</p>";
echo "<ul>
    <li>main.php — peamine lehe fail</li>
    <li>nav.php — menüü fail</li>
    <li>esim.php, tein.php, kolms.php — lehed, kus on anekdoodid</li>
    <li>anekdoot.css — stiilifail</li>
</ul>";
echo "<p>Kui kõik need failid töötavad koos, saab kasutaja sirvida anekdoote ja liikuda mugavalt lehtede vahel.</p>";
echo "</div>";

echo "</body>";
echo "</html>";
?>
