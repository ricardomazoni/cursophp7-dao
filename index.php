<?php 

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);


$root = new Usuario();
$root->loadbyId(1);
echo $root;

$lista = Usuario::getList();
echo json_encode($lista);


*/

//Carrega uma lista de usuarios buscando os login

/*$search = Usuario::search("jo");

echo json_encode($search);

*/

//carrega o usuario usando usu e a senha

$usuario = new Usuario();

$usuario->login("jojo","12345");

echo $usuario;





 ?>
