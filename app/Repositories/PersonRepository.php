<?php

namespace App\Repositories;
use App\Repositories\BaseRepository;
use App\Models\Person;

class PersonRepository extends BaseRepository
{
    protected $dni = 0;
    protected $firstName = '';
    protected $lastName = '';
    protected $slug = '';
    protected $bloodType = '';
    protected $country_id = '';
    protected $departament_id = '';
    protected $municipality_id = '';
    protected $location_id = '';
    protected $neighborhood_id = '';
    protected $address = '';
    protected $landline = '';
    protected $phone = '';
    protected $gender = [];
    protected $email = '';
    protected $identification_id = '';
    protected $dateBirth = '';
    protected $status = false;

    public function __construct($dni = null, $firstName = null, $lastName = null, array $gender = null, $email = null, $dateBirth = null, $status = null)
    {
        $this->dni = $dni;
        $this->firstName = $firstName;
        $this->lastname = $lastName;
        $this->slug = $this->setSlug();
        $this->gender = $gender;
        $this->email = $email;
        $this->dateBirth = $dateBirth;
        $this->status = $status;
    }

    protected function setSlug() {
        return ;
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
