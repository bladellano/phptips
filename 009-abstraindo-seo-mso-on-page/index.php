<?php

require __DIR__ . "/vendor/autoload.php";

$router = new \CoffeeCode\Router\Router(ROOT);

$router->namespace("Source\App");

/*
 * WEB
 */
$router->group(null);
$router->get("/", "Web:home");
$router->get("/contato", "Web:contact");

/**
 * ERROR
 */
$router->group("ops");
$router->get("/{errcode}","Web:error");


/*
 * PROCESS
 */
$router->dispatch();


if ($error = $router->error()) {
    $router->redirect("/ops/{$router->error()}");
}