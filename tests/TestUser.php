<?php

use App\Models\User;
use PHPUnit\Framework\TestCase;

final class TestUser extends TestCase // phpcs:ignore PSR1.Classes.ClassDeclaration.MissingNamespace
{
    public function testCanGetAll()
    {
        $users = (new User())->getAll();

        $this->assertIsArray($users);
        $this->assertIsObject($users[0]);
        $this->assertIsString($users[0]->firstname);
        $this->assertNotEmpty($users[0]->firstname);
    }

    public function testCanCreate()
    {
        $values = [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'john.doe@doe.com',
            'city' => 'Yverdon',
            'canton' => 'Vaud',
            'zip' => '1400',
        ];

        $user = new User();
        $user->create($values);

        $this->assertEquals($values['firstname'], $user->firstname);
        $this->assertEquals($values['lastname'], $user->lastname);
        $this->assertEquals($values['email'], $user->email);
        $this->assertEquals($values['city'], $user->city);
        $this->assertEquals($values['canton'], $user->canton);
        $this->assertEquals($values['zip'], $user->zip);
    }
}
