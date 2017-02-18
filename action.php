<?php
if ( empty($_POST) ){
    header("index.php");
    exit();
}

include_once "Handler/ConnectionProvider.php";
include_once "Handler/dbHandler.php";
include_once "Handler/Constants.php";
include_once "Handler/inputHandler.php";
include_once "Handler/usefullFuncs.php";

//default werte
$name = "";
$time = 0;
$ursache = "";
$entschuldtigt=0;
$form_id =0;


//ini
$dbHandler = new dbHandler;
$PDO = ConnectionProvider::getConnection();
$inputHandler = new inputHandler();
$usefullFuncs = new usefullFuncs;

//input check
if(isset($_POST['name']) AND $inputHandler->isString($_POST['name'])){
	$name = $inputHandler->cleanString($_POST['name']);
    $name = $inputHandler->cutToMaxInputLimit($name,50);
}else{
	echo "keine Name angegeben";
}

if(isset($_POST['time']) AND $inputHandler->isInt($_POST['time'])){
	$time = $_POST['time'];
    if($time != $inputHandler->date($time)){
        echo "keine Zeit angegeben";
    }
}else{
	echo "keine Zeit angegeben";
}

if(isset($_POST['ursache']) AND $inputHandler->isString($_POST['ursache'])){
    $ursache = $inputHandler->cleanString($_POST['ursache']);
    $ursache = $inputHandler->cutToMaxInputLimit($ursache,250);
}else{
    echo "keine Ursache angegeben";
}

if(isset($_POST['entschuldtigt']) AND $inputHandler->isInt($_POST['entschuldtigt'])){
	if($_POST['entschuldtigt'] == 1 or $_POST['entschuldtigt'] == 0){
		$entschuldtigt=$_POST['entschuldtigt'];

	}else{
		$entschuldtigt=0;
	}
	
}

if(isset($_POST['form_id']) AND $inputHandler->isInt($_POST['form_id'])){
    $form_id = $_POST['form_id'];
}else{
    die("nice try");
}

$today = $usefullFuncs->getToday();

//db felder id ist AUTO
//id date name delaytime ursache entschuldigt
$input = array (
    'id' => ($dbHandler->lastId() + 1),
    'date' =>$today,
    'name' =>$name,
    'delaytime' =>$time,
    'ursache' =>$ursache,
    'entschuldigt' =>$entschuldtigt
);

$dbHandler->addEntity($input);

echo "<h1>gespeichert</h1>";
echo '<meta http-equiv="refresh" content="1; url=index.php">';


?>