<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UsersTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testUsersGet()
    {
        $this->get('/api/v1/users', ['Content-Type' => 'application/json', 'Accept' => 'application/json'])
             ->seeJsonStructure([
                 '*' => [
                     'id',
                     'name',
                     'email'
                 ]
             ]);
    }
}
