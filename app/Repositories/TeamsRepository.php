<?php

namespace App\Repositories;

use App\Contracts\Repository;
use App\Exceptions\NotFoundException;
use App\Exceptions\SaveFailureException;
use Barryvdh\Debugbar\Twig\Extension\Debug;
use DebugBar\DebugBar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class TeamsRepository extends AbstractRepository implements Repository
{

    /**
     * Find all teams
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * Find teams by params
     *
     * @see here we have a weak type in parameter becouse laravel supports
     * integer or array of indices in Model::find($parameter) and we'll loose this flexibility
     * otherwise the best approach is array $param
     *
     * @param array $params
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function find($params)
    {
        return $this->model->find($params);
    }

    /**
     * Create a new user in database
     *
     * @param array $data
     * @return Model to execute queries on
     * @throws SaveFailureException
     */
    public function create(array $data)
    {
        $team = $this->getInstance($data);
        if ($team->save()) {
            return $team;
        }
        //@todo write this with trans() for languages support in future;
        throw new SaveFailureException('An error occurs before save the team. Try again or call to a administrator.', 500);
    }

    /**
     * Update a user if exists
     *
     * @param int $id
     * @param array $data
     * @return Team $team
     * @throws NotFoundException
     * @throws \Exception
     */
    public function update(int $id, array $data)
    {
        try {
            $team = $this->model->findOrFail($id);
            if ($team->update($data)) {
                return $team;
            }
        } catch (ModelNotFoundException $modelNotFoundException) {
            throw new NotFoundException("Sorry. We can't find the team {$id} in our data.");
        } catch (\Exception $exception) {
            DebugBar::error($exception->getTraceAsString());
            throw new \Exception("An error occurs. Please contact the administrator. Or try again.");
        }
    }

    public function delete($id)
    {
        return $this->model->delete($id);
    }
}
