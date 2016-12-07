<?php 
header("Content-type: Application/json;charset=UTF-8");

include "../class/users.class.php";

$id=$_POST['id'];

$retorno= new users();

echo json_encode($retorno->retornaunico($id));

 ?>