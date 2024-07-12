<?php
include_once __DIR__ . '/../../inc/inc.config.php';

define("ROOT", CONF_TAG_BASE . "admin");
// define("ROOT", "http://localhost/admNovo");
define("PDF_PRODUTO", false);
define("URL_PRODUTO", true);
define("PDF_CATEGORIA", false);
define("URL_CATEGORIA", true);
define("SUBTITLE_CATEGORIA", false);
define("CARD_DESC_CATEGORIA", false);
define("UPLOAD_FOLDER", "uploads/");

function url(string $uri = null): string
{
    if ($uri) {
        // Verifica se o valor passado começa com "/"
        if (substr($uri, 0, 1) !== '/') {
            $uri = '/' . $uri;
        }
        return ROOT . $uri;
    }

    return ROOT;
}

//BANCO

define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "ubikabrasil.com.br",
    "port" => "3306",
    "dbname" => "bloominprojetos_adm_novo_tester",
    "username" => "bloominprojetos_adm_novo_tester",
    "passwd" => "SstPWY_U7!,b",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);
// define("DATA_LAYER_CONFIG", [
//     "driver" => "mysql",
//     "host" => "localhost",
//     "port" => "3306",
//     "dbname" => "newadmin",
//     "username" => "root",
//     "passwd" => "",
//     "options" => [
//         PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
//         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
//         PDO::ATTR_CASE => PDO::CASE_NATURAL
//     ]
// ]);
// define("DATA_LAYER_CONFIG", [
//     "driver" => "mysql",
//     "host" => "ubikabrasil.com.br",
//     "port" => "3306",
//     "dbname" => "bloominprojetos_ret-componentes",
//     "username" => "bloominprojetos_ret-componentes",
//     "passwd" => ".HHOA=yYWyA.",
//     "options" => [
//         PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
//         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
//         PDO::ATTR_CASE => PDO::CASE_NATURAL
//     ]
// ]);

include __DIR__ . "/Stdfunctions.php";
