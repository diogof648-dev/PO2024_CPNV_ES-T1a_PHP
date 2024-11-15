<?php

namespace App\Models;

class User extends Model
{
    public string $id;
    public string $firstname;
    public string $lastname;
    public string $email;
    public string $city;
    public string $canton;
    public string $zip;

    public function __construct()
    {
        $this->columns = ["firstname", "lastname", "email", "city", "canton", "zip"];

        parent->__construct();
    }
}
