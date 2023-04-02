<?php
$apiConfigs["debug"] = 0;
$apiConfigs["debugGet"] = filter_input(INPUT_GET, "debug", FILTER_VALIDATE_INT);
$apiConfigs["debugPost"] = filter_input(INPUT_POST, "debug", FILTER_VALIDATE_INT);
if ($apiConfigs["debugGet"] == 1 || $apiConfigs["debugPost"] == 1 || $apiConfigs["debug"]) {
    ini_set('display_errors', 1);
    ini_set('display_startup_erros', 1);
    error_reporting(E_ERROR);
}

require_once("configs.php");

/* CONSTANTES DO BANCO */
define("HOST", $apiConfigs["HOST"]);
define("BANCO", $apiConfigs["BANCO"]);
define("USUARIO", $apiConfigs["USUARIO"]);
define("SENHA", $apiConfigs["SENHA"]);

/* OUTRAS CONSTANTES */
define("DS", $apiConfigs["DS"]);
define("DIR_APP", $apiConfigs["DIR_APP"]);
define("DIR_PROJETO", $apiConfigs["DIR_PROJETO"]);

if (file_exists('autoload.php')) {
    include 'autoload.php';
} else {
    die('Falha ao carregar autoload!');
}
