<?php

namespace App\Repositories;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface {
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function getById($id)
    {
        return $this->model->find($id);
    }
}

