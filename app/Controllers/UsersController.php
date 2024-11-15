<?php

namespace App\Controllers;

class UsersController
{
    public function index()
    {
        require __DIR__ . "/../views/users/index.php";
        $users = (new User())->getAll();
    }

    public function create()
    {
        require __DIR__ . "/../Views/users/create.php";
    }

    public function store()
    {
        $values = $_GET;
        (new User())->create($values);

        header("Location: /users");
    }
}
