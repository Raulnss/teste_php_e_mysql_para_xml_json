<?php
include('conecta.php');
$consulta = $conn->prepare('SELECT id,nome,user,email,senha FROM dados');
$consulta->execute();
$dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
