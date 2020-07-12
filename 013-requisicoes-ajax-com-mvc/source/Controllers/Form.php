<?php


namespace Source\Controllers;


use League\Plates\Engine;
use Source\Models\User;

class Form
{
    /** @var Engine  */
    private $view;

    public function __construct($router)
    {
        $this->view = Engine::create(
            dirname(__DIR__,2)."/theme",
            "php"
        );
        $this->view->addData([
            "router"=>$router
        ]);
    }

    public function home():void
    {

        echo 'Ola mundo!';
        exit;
        echo $this->view->render("home",[
            "users"=>(new User())->find()->order("first_name")->fetch(true)
        ]);
    }

    public function create(array $data):void
    {
        $callback["data"] = $data;
        echo json_encode($data);
    }

    public function delete(array $data):void
    {
        $callback["data"] = $data;
        echo json_encode($data);
    }
}