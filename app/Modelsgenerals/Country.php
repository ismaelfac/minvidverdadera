<?php

namespace App\Modelsgenerals;

use Illuminate\Database\Eloquent\Model;
use App\Modelsgenerals \{
    Departament
};

class Country extends Model
{
    //
    protected $fillable = ['code', 'description', 'nationality', 'short_name'];

    public $timestamps = false;


    public function departaments()
    {
        return $this->hasMany(Departament::class);
    }
}
