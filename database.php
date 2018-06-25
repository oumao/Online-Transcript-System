<?php

class Database{

//constructor function
	private $pdo;

public function __construct($pdo){
	$this->pdo = $pdo;
}	

function getData(){
	$query = $this->pdo->prepare('SELECT * FROM transcript_system');
	$query->execute();
	return $query->fetchAll();
}

}

?>