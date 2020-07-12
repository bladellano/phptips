<?php

require __DIR__."/vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\BrowserConsoleHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SendGridHandler;
use \Monolog\Handler\TelegramBotHandler;
use \Monolog\Formatter\LineFormatter;

$logger = new Logger(
    "web"
);
$logger->pushHandler(
    new BrowserConsoleHandler(
        Logger::DEBUG
    ));

$logger->pushHandler(
    new StreamHandler(
        __DIR__."/log.txt",
        Logger::WARNING
    ));

$logger->pushHandler(
    new SendGridHandler(
        SENDGRID['user'],
        SENDGRID['passwd'],
        "caio@dellanosites.com.br",
        "bladellano@gmail.com",
        "Erro em dellanosites.com.br ".date('d/m/Y H:m:s'),
        Logger::CRITICAL
    ));

$logger->pushProcessor(function($record){
    $record['extra']['server'] = $_SERVER;
    return $record;
});

//Grupo: MonologPHPDellanoSites

$tele_key ="1334990513:AAF0fetcD-NcQ074HWiOnsvdL8tTTWVHS2k";
#$tele_channel="@MonologPhpDellanoSites";
$tele_channel="-1001395670891";
$tele_handler = new TelegramBotHandler(
    $tele_key,
    $tele_channel,
    logger::EMERGENCY
);
$tele_handler->setFormatter(new LineFormatter('%level_name%: %message%'));
$logger->pushHandler($tele_handler);

//DEBUG
$logger->debug("Olá Mundo!",["logger"=>true]);
$logger->info("Olá Mundo!",["logger"=>true]);
$logger->notice("Olá Mundo!",["logger"=>true]);

//FILE
$logger->warning("Olá Mundo!",["logger"=>true]);
$logger->error("Olá Mundo!",["logger"=>true]);

//EMAIL
//$logger->critical("Olá Mundo!",["logger"=>true]);
//$logger->alert("Olá Mundo!",["logger"=>true]);

$logger->emergency(
    "Essa mensagem foi enviada pelo Monolog!"
);