<?php

namespace App\Models;

use PDO;

abstract class Model
{
    protected PDO $db;

    protected array $columns;

    public function __construct()
    {
        $this->db = new PDO(getenv('DB_DSN'), getenv('DB_USER'), getenv('DB_PASSWORD'));
    }

    protected function getAll()
    {
        $table = str_replace("app\models\\", "", strtolower(static::class)) . 's';

        $sql = 'SELECT * FROM ' . $table . ';';
        $entries = $this->db->query($sql);

        $users = [];
        foreach ($entries as $entry) {
            $user = new User();

            foreach ($entry as $key => $value) {
                if (!is_int($key)) {
                    $user->$key = $value;
                }
            }

            $users[] = $user;
        }

        return $users;
    }

    public function create(array $values)
    {
        $class = strtolower(static::class);
        $table = str_replace("app\models\\", "", $class) . 's';

        $sql = 'INSERT INTO ' . $table . ' (';

        foreach ($this->columns as $key => $column) {
            $sql .= $column;

            if ($key === count($this->columns) - 1) {
                $sql .= ')';
                break;
            }

            $sql .= ', ';
        }

        $sql .= ' VALUES(:firstname, :lastname, :email, :city, :canton, :zip);';

        $this->db->prepare($sql)->execute($values);
        $this->setValues($values);
    }

    private function setValues(array $values)
    {
        foreach ($values as $key => $value) {
            $this->$key = $value;
        }
    }
}
