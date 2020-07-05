<?php

/**
 * ROOT URL
 */
define("ROOT", "http://localhost/phptips/009-abstraindo-seo-mso-on-page");

define("SITE", "#PHPTips");


/**
 * CONFIG DATABASE
 */
define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "phptips",
    "username" => "root",
    "passwd" => "root",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

/**
 * @param $path
 * @return string
 */
/* function asset($path): string
{
    return ROOT . "/theme/assets{$path}";
} */

function url(string $uri = null): string
{
    if ($uri) {
        return ROOT . "/{$uri}";
    }
    return ROOT;
}
