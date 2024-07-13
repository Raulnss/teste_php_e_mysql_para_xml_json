<?php
include("consulta.php");
if (file_exists('arquivo.json')) {
    unlink('arquivo.json');
  }
  
  foreach ($dados as $linha) {
    $jas = array(
    "id" => $linha['id'],
    "nome" => $linha['nome'],
    "user" => $linha['user'],
    "email" => $linha['email'],
    "senha" => $linha['senha']
);
$jason = json_encode($jas);
file_put_contents("arquivo.json", $jason, FILE_APPEND);
  }
  
    
