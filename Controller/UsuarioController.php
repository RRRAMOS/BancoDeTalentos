<?php
if(!isset($_SESSION)) 
 { 
 session_start(); 
 } 
class UsuarioController{
 
 
 public function inserir($nome, $cpf, $dataNascimento, $email, $senha) {
 require_once '../Model/Usuario.php';
 $usuario = new Usuario();
 $usuario->setNome($nome);
 $usuario->setcpf($cpf);
 $usuario->setDataNascimento($dataNascimento); 
 $usuario->setEmail($email); 
 $usuario->setSenha($senha); 
 //return $usuario->getNome();
 $r = $usuario->inserirBD();
 $_SESSION['Usuario'] = serialize($usuario);
 return $r; 
 }
}
?>

