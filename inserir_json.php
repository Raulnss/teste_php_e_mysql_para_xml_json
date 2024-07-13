<?php
include("consulta.php");
  foreach ($dados as $linha) {
    $jass = array(
    "id" => $linha['id'],
    "nome" => $linha['nome'],
    "user" => $linha['user'],
    "email" => $linha['email'],
    "senha" => $linha['senha']
);
$jasson = json_encode($jass);
file_put_contents("teste.json", $jasson, FILE_APPEND);
  }