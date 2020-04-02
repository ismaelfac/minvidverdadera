<?php

namespace App\Modelsgenerals;

use Illuminate\Database\Eloquent\Model;
use App\Models\Person;

class Civilstatus extends Model
{
    //
    protected $fillable = ['description'];
    public $timestamps = false;

    public function People ()
    {
        return $this->belongsTo(Person::class);
    }
}
