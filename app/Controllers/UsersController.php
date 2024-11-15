<?php

namespace App\Controllers;

use App\Models\User;

class UsersController
{
    public function index()
    {
        $users = (new User())->getAll();
        require __DIR__ . "/../views/users/index.php";
    }

    public function create()
    {
        require __DIR__ . "/../Views/users/create.php";
    }

    public function store()
    {
        $values = $_POST;
        (new User())->create($values);

        header("Location: /users");
    }
}