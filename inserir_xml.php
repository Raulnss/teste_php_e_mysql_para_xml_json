<?php
include("consulta.php");
$bb = simplexml_load_file("teste.xml");
foreach ($dados as $linha) {
    $bb->addChild('id', $linha['id']);
$bb->addChild('nome', $linha['nome']);
$bb->addChild('user', $linha['user']);
$bb->addChild('email', $linha['email']);
$bb->addChild('senha', $linha['senha']);
$xmlbb = $bb->asXML();
}

file_put_contents("teste.xml", $xmlbb);
