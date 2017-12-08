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

/*
$usuario = new Usuario();

$usuario->login("jojo","12345");

echo $usuario;

*/

/*
//Insert com procedure do BD
$aluno = new Usuario("wagner","12345");

$aluno->insert();

echo $aluno;
*/

/*
//Update de usuario
$usuario = new Usuario();

$usuario-> loadById(6);
$usuario->update("joelma","89898");

echo $usuario;

*/

$usuario = new Usuario();
$usuario->loadById(8);
$usuario->delete();

echo $usuario;

 ?>
