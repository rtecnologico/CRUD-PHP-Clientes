<?php

require('../db/conn.php');

$sqldeletarlead = "DELETE FROM clientes WHERE id = ".$_GET['iddeletar'];

$editar = $conn->query($sqldeletarlead);

if ($editar === TRUE) {
  echo "Cliente deletado";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: http://127.0.0.1/crud/index.php');
?>