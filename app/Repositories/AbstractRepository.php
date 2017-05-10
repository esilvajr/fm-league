<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class AbstractRepository
{
    /**
     * The model to execute queries on
     *
     * @var Model
     */
    protected $model;

    /**
     * Create a new user repository instance
     *
     * @param Model $model the model to execute queries on
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Create a new instance of this model
     *
     * @param $attributes
     * @return Model instance of
     */
    protected function getInstance(array $attributes = array())
    {
        return $this->model
            ->newInstance($attributes);
    }
}
