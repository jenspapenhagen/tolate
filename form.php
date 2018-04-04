		<form id="form_12757" class="appnitro"  method="post" action="index.php?page=action">
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
			<option value="270" >gesamter Tag</option>

		</select>
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="ursache">Ursache </label>
		<div>
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="entschuldtigt">Entschuldigung </label>
		<span>
			<input id="entschuldtigt" name="entschuldtigt" class="element checkbox" type="checkbox" value="1" />
			<label class="choice" for="entschuldtigt">liegt vor</label>
		</span> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="<?php echo random_int(100, 999) ?>" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Abschicken" />
		</li>
			</ul>
		</form>	
	</div>