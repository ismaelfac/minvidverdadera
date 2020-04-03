<?php

namespace App\Repositories;
use App\Repositories\BaseRepository;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonRepository extends BaseRepository
{
    protected $dni = 0;
    protected $first_name = '';
    protected $last_name = '';
    protected $slug = '';
    protected $blood_type = '';
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
    protected $birthdate = '';
    protected $status = [];

    public function __construct(
            $dni = null,
            $gender = null,
            $first_name = null,
            $last_name = null,
            $slug = null,
            $blood_type = null,
            $country_id = null,
            $departament_id = null,
            $municipality_id = null,
            $location_id = null,
            $neighborhood_id = null,
            $address = null,
            $landline = null,
            $phone = null,
            $email = null,
            $birthdate = null,
            $status = null
            )
    {
        $this->dni = $dni;
        $this->gender = $gender;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->slug = $this->setSlug();
        $this->gender = $gender;
        $this->email = $email;
        $this->birthdate = $birthdate;
        $this->status = $status;
    }

    protected function setSlug() {
        return ;
    }

    public function getFullName() {
        return $this->getFields('Ismael Lastre');
    }

    public function index(){
        return Person::all();
    }
    public function create(){

        return [
            'dni' => "string|required",
            'gener' => ['male','female'],
            'first_name' => 'string',
            'last_name' => 'string'
        ];
    }
    public function store($data){
        $person = $data->request;
        DB::transaction(function () use ($person){
            $person  = Person::create([$person]);
            return $person;
        });
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
