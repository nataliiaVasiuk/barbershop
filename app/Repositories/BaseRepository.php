<?php

namespace App\Repositories;

use Illuminate\Container\Container as Application;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Eloquent\BaseRepository as EloquentBaseRepository;

abstract class BaseRepository extends EloquentBaseRepository
{
    /** @var Model */
    protected $model;

    /**
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $modelClass = $this->model();
        $this->model = new $modelClass();

        parent::__construct($app);
    }

    /**
     * @return Model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return string
     */
    abstract public function model();
}
