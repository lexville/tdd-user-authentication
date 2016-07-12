<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TestUserCanRegister extends TestCase
{
    use DatabaseMigrations;

    /**
     * Test to check if user can register
     *
     * @return void
     */
     public function testExample()
     {
         $this->assertTrue(true);
     }

    public function testUserRegistration()
    {
        $this->visit('/register')
             ->type('newUser', 'name')
             ->type('user@email.com', 'email')
             ->type('secret', 'password')
             ->type('secret', 'password_confirmation')
             ->press('Register');

        $this->seeInDatabase('users', ['name' => 'newUser']);
    }
}
