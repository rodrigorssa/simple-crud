<?php 
include_once 'db.class.php';

class users{

	private $id;
	private $name;
	private $endereco;
	private $email;
	private $senha;
	private $db;

public function __get($key) {
    return $this->$key;
}

public function __set($key, $value) {
    $this->$key = $value;
}

public function __construct(){
	 $this->db= new db();
}


public function __destruct(){
	unset($this->db);
}

public function selectAll(){

	$query=$this->db->pdo->prepare("SELECT * FROM users");
	$query->execute();

	return $query->fetchAll();
}


public function inserir(){

	$query=$this->db->pdo->prepare("INSERT INTO users(name,endereco,email,senha) VALUES (?,?,?,?) ");
	$query->execute(array($this->name,$this->endereco,$this->email,$this->senha,));

	 return true;
}


public function retornaunico($id=" "){

	$query=$this->db->pdo->prepare("SELECT * FROM users WHERE id=?");
	$query->execute(array($id));

	return $query->fetch();
}


public function editar(){

	$query=$this->db->pdo->prepare("UPDATE users SET name=?,endereco=?,email=?,senha=? WHERE id=?");
	$query->execute(array($this->name,$this->endereco,$this->email,$this->senha,$this->id));
	return true;
}

public function delete($id){
	$query=$this->db->pdo->prepare("DELETE FROM users where id=?");
	$query->execute(array($id));

	return true;
}
}