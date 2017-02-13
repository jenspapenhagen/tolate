<?php
class inputHandler{

    //construct
    public function __construct(){
        //$this->fileHandler = new fileHandler();

    }
	
	public function inputHandler(){
        self::__construct();
    }
	
	
	public function isString(string $input):bool{
		if(is_string($input) AND (strlen($input)>= 1) ){
			return true;
		}else{
			return false;
		}
	}
	
	public function isInt(int $input) :bool{
		if(is_numeric($input) AND (strlen((string)$input)>= 1) ){
			return true;
		}
		
		return false;
		
	}
	
	public function isFloat(float $input) :bool{
		if (is_float($input) ) {
			return true;
		}
		
		return false;
	}
	
}