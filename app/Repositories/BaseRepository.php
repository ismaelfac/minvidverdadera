<?php

namespace App\Repositories;

abstract class BaseRepository
{
    abstract public function getModel();

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
