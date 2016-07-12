<?php

use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TestUserCanLogin extends TestCase
{
    use DatabaseMigrations;
    
    /**
     * Test to check if user can log in
     *
     * @return void
     */
    public function testUserLogin()
    {
        $this->seed('UsersTableSeeder');

        $this->visit('/login')
            ->type('user@email.com', 'email')
            ->type('secret', 'password')
            ->press('Login')
            ->see('newUser');
    }
}
