<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TeamsTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testTeamsGet()
    {
        $this->get('/api/v1/teams', ['Content-Type' => 'application/json', 'Accept' => 'application/json'])
             ->seeJsonStructure([
                 '*' => [
                     'id',
                     'name',
                     'nickname',
                     'acronym',
                     'coach',
                     'location',
                 ]
             ]);
    }
}
