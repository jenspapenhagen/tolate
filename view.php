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
echo "<tr><th>Name</th><th>Verspätung in Minuten</th><th>Ursache</th><th>Entschuldigt</th></tr>"."\n";

foreach ($dbHandler->findAllbyToday()as $row) {
    echo "<tr>";
    echo "<td width=\"10%\">".$row['name']."</td>";
    echo "<td align=\"right\" width=\"20%\">".$row['delaytime']."</td>";
	echo "<td width=\"60%\">".$row['ursache']."</td>";
		if($row['entschuldigt'] == 1){
			echo "<td width=\"10%\">ja</td>";
		}else{
			echo "<td width=\"10%\">nein</td>";
		}     
    echo "</tr>";
}


echo "</table></center>";

echo "<br><small>Ingesamt gibt es: ".$dbHandler->countAll()." Einträge</small>";
?>
<br>Hier zum <a href="index.php?page=vertretungsplan">Vertretungsplan</a> | <a href="https://github.com/jenspapenhagen/tolate"> Source code</a>



