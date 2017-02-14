<?php
include_once "Handler/ConnectionProvider.php";
include_once "Handler/Constants.php";

class dbHandler{

	private $findAll = "SELECT * FROM ";
	private $lastId = "SELECT max(id) FROM ";
	private $countAll = "SELECT count(*) FROM ";
	private $allColumnsName = "DESCRIBE ";


	public function __construct(){
		$this->PDO = ConnectionProvider::getConnection();
        if(isset(Constants::$tableName)){
            $this->tablename = Constants::$tableName;
        }else{
            $tablename = "tolate";
        }

    }

	public function dbHandler(){
        self::__construct();
    }

	public function findAllbyToday(){
		$dt = new DateTime();
		$today = $dt->format('Y-m-d');

		$sql = $this->findAll.$this->tablename." WHERE date = '$today';";
		$result = $this->PDO->prepare($sql);
		$result->execute();
		$output = $result->fetchAll();

		return $output;
	}

	public function countAll():int {

		$sql = $this->countAll.$this->tablename.";";
		$result = $this->PDO->prepare($sql);
		$result->execute();

		$output = $result->fetchAll();

		if (!empty($output)) {
			return (int)$output[0][0];
		}
	}

	public function lastId():int {

		$sql = $this->lastId.$this->tablename.";";
		$result = $this->PDO->prepare($sql);
		$result->execute();

		$output = $result->fetchAll();

		if (!empty($output)) {
			return (int)$output[0][0];
		}
	}
	
	public function listAllColumnsName(string $tableName): array{
		$sql = $this->allColumnsName.$this->tablename.";";
		$result = $this->PDO->prepare($sql);
		$result->execute();
		$table_fields = $result->fetchAll(PDO::FETCH_COLUMN);

		return $table_fields;
	} 

    public function addEntity(array $array){
        $allColumnsName =  $this->listAllColumnsName($this->tablename);

        $emptylines = ":";
        $emptylines .= implode (", :", (array)$allColumnsName );
        $ColumnsNameAsCommaSeparatedWordsString = implode (", ", (array)$allColumnsName );
        $sql = "INSERT INTO ". $this->tablename. "(" .$ColumnsNameAsCommaSeparatedWordsString. ") VALUES(" .$emptylines. ")";


        $result = $this->PDO->prepare($sql);


        $result->execute($array);
    }

}
?>