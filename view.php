    <h2>Verspätungen</h2>
    <p>Auslistung</p>
    <a href="index.php?page=form">Zum eintragen hier klicken</a>
</div>
<?php
include_once "Handler/dbHandler.php";
include_once "Handler/Constants.php";

//id date name delaytime ursache entschuldigt
$dbHandler = new dbHandler;
echo '<center><table  class="rand08" >';
echo "<tr><th>Name</th><th>Verspätung in Minuten</th><th>Grund</th><th>Entschuldigt</th></tr>"."\n";

foreach ($dbHandler->findAllbyToday()as $row) {
    echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td align=\"right\">".$row['delaytime']."</td>";
    echo "<td>".$row['ursache']."</td>";
    echo "<td>".$row['entschuldigt']."</td>";
    echo "</tr>";
}


echo "</table></center>";

echo "<br><small>Ingesamt gibt es: ".$dbHandler->countAll()." Einträge</small>";
?>
<br>Hier zum <a href="index.php?page=vertretungsplan">Vertretungsplan</a> | <a href="https://github.com/jenspapenhagen/tolate"> Source code</a>



