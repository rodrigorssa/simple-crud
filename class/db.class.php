<?php 

class db{

	    public $pdo;
	    private $user;
	    private $pass;

    public function __construct(){

$config=require __DIR__.'/../config.php';

    	$this->user=$config['user'];
    	$this->pass=$config['pass'];
    	 $pdo= new PDO("mysql:host=localhost;dbname=crud", $this->user,$this->pass,array(
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ));

    	 $this->pdo=$pdo;
    }

    public function __destruct(){

    }
}