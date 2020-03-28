<?php

namespace App\Repositories;
use App\Repositories\BaseRepository;
use App\Models\Person;

class PersonRepository extends BaseRepository
{

    public function getModel()
    {
        return new Person;
    }

    public function __construct()
    {

    }

    public function activate(): int
    {
        return $this->getModel->where('status','pending')->update(['status' => 'activated']);
    }
}
