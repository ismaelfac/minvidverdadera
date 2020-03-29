<?php

namespace App\Repositories;

abstract class BaseRepository
{
    abstract public function getModel();
    abstract public function index();
    abstract public function create();
    abstract public function store();
    abstract public function edit();
    abstract public function update();
    abstract public function destroy();


    public function find($id)
    {
        return $this->getModel()->find($id);
    }

    public function getAll()
    {
        return $this->getModel()->all();
    }

    public function getFields($field){
        return ($field) ? ucwords(strtolower($field)) : throwException($field) ;
    }
}
