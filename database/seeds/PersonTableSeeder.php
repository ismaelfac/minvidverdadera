<?php

use Illuminate\Database\Seeder;
use App\Repositories\PersonRepository as Person;

class PersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = file_get_contents("database/Queries/persons.json");
        $countries = json_decode($data, true);
        foreach ($countries as $value) {
            $this->Person->create([
                'dni' => $value['dni'],
                'first_name' => $value['first_name'],
                'last_name' => $value['last_name'],
                'slug' => $value['slug'],
                'blood_type' => $value['blood_type'],
                'gender' => $value['gender']
            ]);
        }
    }
}
