<?php

namespace App\Repositories;


interface BaseRepositoryInterface {
    public function getAll();
    public function getById($id);
}
