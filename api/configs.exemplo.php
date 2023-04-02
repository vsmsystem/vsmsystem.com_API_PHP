<?php
//este arquivo é apenas mocelo, gerar uma copia chamada configs.php com os dados reais
//poderia usar um env, mas para o docker ler alterações no env tem que fazer rebuild toda vez

$apiConfigs["HOST"] = "localhost";
$apiConfigs["BANCO"] = "banco";
$apiConfigs["USUARIO"] = "usuario";
$apiConfigs["SENHA"] = "senha";

$apiConfigs["DS"] = DIRECTORY_SEPARATOR;
$apiConfigs["DIR_APP"] = __DIR__;
$apiConfigs["DIR_PROJETO"] = "webservice_v2";
