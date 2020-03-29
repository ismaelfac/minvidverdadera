<?php

namespace App\Repositories;
use App\Repositories\BaseRepository;
use App\Models\Person;

class PersonRepository extends BaseRepository
{
    protected $dni = 0;
    protected $firstName = '';
    protected $lastName = '';
    protected $gender = [];
    protected $email = '';
    protected $dateBirth = '';
    protected $status = false;

    public function __construct($dni = null, $firstName = null, $lastName = null, array $gender = null, $email = null, $dateBirth = null, $status = null)
    {
        $this->dni = $dni;
        $this->firstName = $firstName;
        $this->lastname = $lastName;
        $this->gender = $gender;
        $this->email = $email;
        $this->dateBirth = $dateBirth;
        $this->status = $status;
    }

    public function getFullName() {
        return $this->getFields('Ismael Lastre');
    }

    public function index(){
        return $this->getFullName();
    }
    public function create(){
        return;
    }
    public function store(){
        return;
    }
    public function edit(){
        return;
    }
    public function update(){
        return;
    }
    public function destroy(){
        return;
    }

    public function getModel()
    {
        return new Person;
    }
}
