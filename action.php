<?php
if ( empty($_POST) ){
    header("index.php");
    exit();
}

include_once "Handler/fileHandler.php";
include_once "Handler/inputHandler.php";

 //Array ( [name] => abec [time] => 20 [ursache] => asdasdasdsad [entschuldtigt] => 1 [form_id] => 12757 [submit] => Abschicken ) 

$fileHandler;
$inputHandler;

	$fileHandler = new fileHandler();
	$inputHandler = new inputHandler();



$name = "";
$time = 0;
$ursache = "";
$entschuldtigt=0;
$form_id =0;



if(isset($_POST['name']) AND $inputHandler->isString($_POST['name'])){
	$name = $_POST['name'];
}else{
	echo "keine Name angegeben";
}

if(isset($_POST['time']) AND $inputHandler->isInt($_POST['time'])){
	$time = $_POST['time'];
}else{
	echo "keine Zeit angegeben";
}

if(isset($_POST['ursache']) AND $inputHandler->isString($_POST['ursache'])){
    $ursache = $_POST['ursache'];
}else{
    echo "keine Ursache angegeben";
}

if(isset($_POST['entschuldtigt']) AND $inputHandler->isInt($_POST['entschuldtigt'])){
	if($_POST['entschuldtigt']==1 or $_POST['entschuldtigt'] == 0){
		$entschuldtigt=$_POST['entschuldtigt'];
	}else{
		$entschuldtigt=0;
	}
	
}

if(isset($_POST['form_id']) AND $inputHandler->isInt($_POST['form_id'])){
    $form_id = $_POST['form_id'];
}else{
    $form_id = random_int(10000, 99999);
}


$jsonfile ="data.json";
if (!$fileHandler->FileExists($jsonfile)){
    echo "JSON file nicht gefunden";
}

$file = file_get_contents($jsonfile);
$data = json_decode($file);
unset($file);
//insert data here
$data[] = array(
            $form_id => array(
                'name' => $name,
                'time'=>$time,
                'ursache'=>$ursache,
                'entschuldtigt'=>$entschuldtigt
            )
    );

//save the file
file_put_contents('data.json',json_encode($data));
unset($data);//release memory

echo "<h1>gespeichert</h1>";
echo '<meta http-equiv="refresh" content="1; url=index.php">';


?>