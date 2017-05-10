<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Model;

interface Repository
{

    /**
     * Create a new repository instance
     *
     * @param Model $model
     */
    public function __construct(Model $model);
}
