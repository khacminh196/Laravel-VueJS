<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

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

    public function createItem(Request $request)
    {
        return $this->model->create($request->all());
    }

    public function updateItem($id, Request $request)
    {
        $item = $this->model->findOrFail($id);
        return $item->update($request->all());
    }

    public function deleteItem($id)
    {
        return $this->model->destroy($id);
    }
}

