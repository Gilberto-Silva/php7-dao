<?php

require_once("config.php");

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios;");

echo json_encode($usuarios);
*/
// Carrega um usuario.
//$root = new Usuario();
//$root->loadById(3);
//echo $root;


// Carrega uma lista de usuarios.
//$lista = Usuario::getList();
//echo json_encode($lista);


// Carrega um lista de usuarios buscando pelo login.
//$search = Usuario::search("rob");
//echo json_encode($search);

// Carrega um usuario com base no login e password.
//$name = new Usuario;
//$name->login("Gilberto", "otreblig");
//echo $name;

//$aluno = new Usuario("Carlos", "solrac");

//$aluno->insert();
//echo $aluno;

// Alterar um usuario
//$usuario = new Usuario();
//$usuario->loadById(8);

//$usuario->update("Andre", "erdna");
//echo $usuario;

$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();

echo $usuario;


?>