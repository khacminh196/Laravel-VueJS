<?php

namespace App\Repositories;

use Illuminate\Http\Request;

interface BaseRepositoryInterface {
    public function getAll();
    public function getById($id);
    public function createItem(Request $request);
    public function updateItem($id, Request $request);
    public function deleteItem($id);
}
