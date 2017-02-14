<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/view.css" media="all">
    <style type="text/css">
        .rand08 {
            border: 1px solid #2C6ED5;
            background-color: #C4D3F6;
        }

        .rand08 caption {
            color: #0055AA;
        }

        .rand08 th {
            background-color: #6D93E1;
            color: #FFFFFF;
        }

        .rand08 td, #rand08 th {
            border: 1px solid #FFFFFF;
            font-family: Verdana, Arial, sans-serif;
            font-size: 11px;
            font-weight: normal;
        }
        </style>

</head>
<body id="main_body" >

<img id="top" src="img/top.png" alt="">
<div id="form_container">
    <h1><br></h1>
    <div class="form_description">
        <h2>Verspätungen</h2>
        <p>Auslistung</p>
        <a href="form.php">Zum eintragen hier klicken</a>
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

        echo "<br><small>ingesammt gibt es: ".$dbHandler->countAll()." Einträge</small>";

    ?>
<br>
</div>
<img id="bottom" src="img/bottom.png" alt="">





</body>
</html>