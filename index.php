<?php 

require_once ("config.php");

/* $sql = new Sql();

$usuarios = $sql->select("SELECT * from tb_usuarios");
echo json_encode($usuarios);*/

//Carrega um usuário por seu ID
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//Carrega uma lista de usuários ordenados por nome
//$lista = Usuario::getList(); // Não precisa ser instânciado pois estamos chamando um método estático.
//echo json_encode($lista); // Tem que usar o json_encode pois estamos usando apenas um método estático e não todo o objeto.

//Busca por um determinado usuário
//$user = Usuario :: searchUser("jo");
//echo json_encode($user);

//Autentica usuário e senha
//$login = new Usuario();
//$login->login("AlunoTonto","tilambucano123");
//echo $login;

//Insere um novo usuário

//$aluno = new Usuario("Aluno Bobo", "ZikZira123");

//$aluno -> setDeslogin("AlunoTonto");

//$aluno -> setDessenha("tilambucano123");

//$aluno -> insert();

//echo $aluno;

//Modifica um usuário

//$usuario = new Usuario();

//$usuario->loadById(6);

//$usuario->update("Professor Caralho", "qwerty123");

//echo $usuario;

//Deleta um usuário

$usuario = new Usuario();

$usuario->loadById(6);

$usuario->delete();

echo $usuario;

 ?>

