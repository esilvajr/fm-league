<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use App\Repositories\UserRepository;

/**
 * @resource Users
 *
 * Provides info about users
 */
class UsersController
{

    private $users;

    /**
     * Create new instance of UsersController
     *
     * @param UserRepository $users as service container
     */
    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }

    public function index()
    {
        return $this->users->all();
    }

    public function show($id)
    {
        return $this->users->find($id);
    }

    public function store(UsersRequest $request)
    {
        return $this->users->create(
            $request->all()
        );
    }
}
