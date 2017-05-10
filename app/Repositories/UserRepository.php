<?php

namespace App\Repositories;

use App\Contracts\Repository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class UserRepository extends AbstractRepository implements Repository
{

    /**
     * Find all users
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * Find user by params
     *
     * @param array $params
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function find($params)
    {
        return $this->model->find($params);
    }

    /**
     * Find user by it's e-mail
     *
     * @param $email
     * @return mixed
     */
    public function findByEmail($email)
    {
        return $this->model
            ->where([
                    'email' => $email]
            );
    }

    /**
     * Create a new user in database
     *
     * @param array $data
     * @return Model to execute queries on
     */
    public function create(array $data)
    {
        $user = $this->getInstance();

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);

        $user->save();

        return $user;
    }
}
