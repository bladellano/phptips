<?php

echo '<pre>';
echo '<h1>delete</h1>';

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;

    $user = (new User())->findById(4);

    if($user){
        $user->destroy();
    } else {
        print_r($user);
    }

