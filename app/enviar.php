<?php
require('../db/conn.php');
function RemoveSpecialChar($str)
{
    $res = preg_replace("/\D/","", $str);

    return $res;
}

$celular = RemoveSpecialChar($_POST['celular']);
$cep = RemoveSpecialChar($_POST['cep']);

$datahoraatual = date("Y-m-d");

$sql = "INSERT INTO clientes (nome, email, celular, cep, created_at, estado, cidade, bairro, endereco, numero)
VALUES ('".$_POST['nome']."','".$_POST['email']."','".$celular."','".$cep."',$datahoraatual ,'".$_POST['estado']."','".$_POST['cidade']."','".$_POST['bairro']."','".$_POST['endereco']."','".$_POST['numero']."')";

$inserir = $conn->query($sql);
session_start();

if ($inserir == TRUE) {

	$_SESSION["menretornoS"]= "Cadastro realizado com sucesso !";

 // echo $_SESSION["menretornoS"];exit;
} else {
		$_SESSION["menretornoE"]= "Não foi possível cadastrar, tente novamente !";
  //echo $_SESSION["menretornoE"];exit;
  }

$conn->close();

header('Location: http://127.0.0.1/crud');

?>