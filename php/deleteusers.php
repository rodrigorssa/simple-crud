<?php 
include_once '../class/users.class.php';

 $id=$_POST['id'];

$user=new users();

if($user->delete($id)) echo "Usuário deletado com sucesso!";

 ?>