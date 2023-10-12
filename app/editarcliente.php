<?php

require('../db/conn.php');

function RemoveSpecialChar($str)
{
    $res = preg_replace("/\D/","", $str);

    return $res;
}

$celular = RemoveSpecialChar($_POST['celular']);
$cep = RemoveSpecialChar($_POST['cep']);

$sqleditarcliente = "UPDATE clientes SET nome = '".$_POST['nome']."', email = '".$_POST['email']."', celular = '".$celular."', estado = '".$_POST['estado']."', cidade = '".$_POST['cidade']."', bairro = '".$_POST['bairro']."', numero = '".$_POST['numero']."', endereco = '".$_POST['endereco']."', cep = '".$cep."' WHERE id = ".$_POST['id'];

$editar = $conn->query($sqleditarcliente);

if ($editar === TRUE) {
  echo "Cliente editado";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: http://127.0.0.1/crud/editar.php?id='.$_POST['id']);
?>