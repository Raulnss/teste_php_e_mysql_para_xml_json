<?php
include("consulta.php");
if (file_exists('arquivo.xml')) {
    unlink('arquivo.xml');
  }
   $xml = new SimpleXMLElement('<Dados></Dados>');
  foreach ($dados as $linha) {
  $xml->addChild('id', $linha['id']);
  $xml->addChild('nome', $linha['nome']);
  $xml->addChild('user', $linha['user']);
  $xml->addChild('email', $linha['email']);
  $xml->addChild('senha', $linha['senha']);
  $xmlString = $xml->asXML();
  }
  file_put_contents("arquivo.xml", $xmlString, FILE_APPEND);