<?php
echo '<pre>';

require __DIR__."/../vendor/autoload.php";

//use CoffeeCode\DataLayer\Connect;
//
//$conn = Connect::getInstance();
//$error = Connect::getError();
//
//if($error){
//    echo $error->getMessage();
//    die();
//}
//
//$query = $conn->query("SELECT * FROM users");
//print_r($query->fetchAll());

use Source\Models\User;
$user = new User();

$list = $user->find()->fetch(true);

/**
 * @var User $userItem;
 */
foreach ($list as $userItem){
    print_r($userItem->data());
    foreach ($userItem->addresses() as $address){
        var_dump($address->data());
    }
}