<?php
$xml = file_get_contents('arquivo.xml');
file_put_contents('arquivo_baixado.xml', $xml);
$json = file_get_contents('arquivo.json');
file_put_contents('arquivo_baixado.json', $json);