<?php

echo '<pre>';
echo '<h1>update</h1>';

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;

$user = (new User())->findById(5);
$user->first_name = "Fernando";
$user->save();

print_r($user);

