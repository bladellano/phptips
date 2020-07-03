<?php

echo '<pre>';
echo '<h1>create</h1>';

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;
use Source\Models\Address;


$user = new User();

$user->first_name = "Pedro";
$user->last_name = "Leite";
$user->genre = "M";
$user->save();

/*$addr = new Address();
$addr->add($user,"Quarta Rua Rural","22b");
$addr->save();*/

print_r($user);
