<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\TeamsRequest;
use App\Repositories\TeamsRepository;

/**
 * @resource Teams
 *
 * Provides info about teams
 */
class TeamsController
{

    private $teams;

    /**
     * Create new instance of TeamsController
     *
     * @param TeamsRepository $teams as service container
     */
    public function __construct(TeamsRepository $teams)
    {
        $this->teams = $teams;
    }

    public function index()
    {
        return $this->teams->all();
    }

    public function show($id)
    {
        return $this->teams->find($id);
    }

    public function store(TeamsRequest $request)
    {
        return $this->teams->create(
            $request->all()
        );
    }

    public function update(TeamsRequest $request, $id) {
        return $this->teams->update($id, $request->all());
    }

    public function destroy($id) {
        return $this->teams->delete(
            $id
        );
    }
}
