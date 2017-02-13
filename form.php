<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="img/top.png" alt="">
	<div id="form_container">
	
		<h1><br></h1>
		<form id="form_12757" class="appnitro"  method="post" action="action.php">
					<div class="form_description">
					<h2>Verspätungen</h2>
			<p>Bitte die entsprechenden Felder ausfüllen</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="name">Name </label>
		<div>
			<input id="name" name="name" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="time">Verspätung:</label>
		<div>
		<select class="element select medium" id="time" name="time"> 
			<option value="" selected="selected"></option>
			<option value="5" >5 Min</option>
			<option value="10" >10 Min</option>
			<option value="15" >15 Min</option>
			<option value="20" >20 Min</option>
			<option value="30" >30 Min</option>
			<option value="45" >45 Min</option>
			<option value="60" >1 Stunde</option>
			<option value="120" >2 Stunde</option>

		</select>
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="ursache">Ursache </label>
		<div>
			<input id="ursache" name="ursache" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="entschuldtigt">Entschuldigung </label>
		<span>
			<input id="entschuldtigt" name="entschuldtigt" class="element checkbox" type="checkbox" value="1" />
			<label class="choice" for="entschuldtigt">liegt vor</label>
		</span> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="<?php

						$dateinamen = "besucherzaehler.txt";
						$handle = fopen ($dateinamen, "r");
						$inhalt = fread ($handle, filesize ($dateinamen));
						fclose ($handle);

						//Ausgabe
							echo $inhalt;

						$inhalt = $inhalt+1;
						$handle = fopen ($dateinamen, "w");
						fwrite ($handle, $inhalt);
						fclose ($handle);
				?>" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Abschicken" />
		</li>
			</ul>
		</form>	
	</div>
	<img id="bottom" src="img/bottom.png" alt="">





	</body>
</html>