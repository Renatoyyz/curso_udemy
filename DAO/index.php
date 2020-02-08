<?php

    require_once("config.php");
   /*
    $sql = new Sql();
    $usuarios = $sql->select("SELECT * FROM tb_usuarios;");
    echo json_encode($usuarios);
    */
//==================================================
    //carrega apenas um usuario
    //$root = new Usuario();
    //$root->loadById(3);

    //echo $root;
//==================================================
    //carrega uma lista de usuarios
    //$lista = Usuario::getList();
    //echo json_encode($lista);
//==================================================
   //Carrega usuario pelo login
   //$login = Usuario::search("Ra");
   //echo json_encode($login);
//==================================================
   //Carrega login por validação de senha
   //$loginSenha = new Usuario();
   //$loginSenha->login("Renato","renato123");
   //echo $loginSenha;
//==================================================
//Insert de usuario novo
//$aluno = new Usuario("Leonardo","modinha123");
//$aluno->setDeslogin("Rafael");
//$aluno->setDessenha("pipoca123");
//$aluno->insert();
//echo $aluno;
//==================================================
//Atualizando um usuario
//$usuario = new Usuario();
//$usuario->loadById(1);
//$usuario->update("Renato Oliveira","renato890");
//echo $usuario;
//==================================================
$deletar = new Usuario();
$deletar->loadById(1);
//$nomeDeletado = $deletar["deslogin"];
$deletar->delete();
echo $deletar;

?>