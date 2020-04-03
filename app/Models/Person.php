<?php

namespace App\Models;

use App\Models\{ Member, Leader };
use App\Modelsgenerals\{ Country, Departament, Municipality, Location, Neighborhood, Civilstatus };
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'people';
    protected $fillable = [
        'dni', 'last_name', 'first_name', 'gender', 'slug', 'blood_type', 'country_id', 'departament_id', 'municipality_id','location_id', 'neighborhood_id', 'address', 'landline', 'phone', 'email', 'facebook', 'dateBirth', 'status'
    ];

    protected $casts = [];

    public function member() {
        return $this->hasOne(Member::class);
    }

    public function leaders() {
        return $this->hasMany(Leader::class);
    }

    public function country() {
        return $this->hasOne(Country::class);
    }

    public function departament() {
        return $this->hasOne(Departament::class);
    }

    public function municipality() {
        return $this->hasOne(Municipality::class);
    }

    public function location() {
        return $this->hasOne(Location::class);
    }

    public function neighborhood() {
        return $this->hasOne(Neighborhood::class);
    }

    public function identification() {
        return $this->hasOne(Civilstatus::class);
    }

    public function isInactive()
    {
        return $this->state === false;
    }

    public function owns(Model $model)
    {
        return $this->id === $model->user_id;
    }

    public function scopeName($query, $lastName, $firstName)
    {
        if (trim($lastName) != "") {
            $query->where('name', 'LIKE', '%' . $lastName . '%');
        }
    }
    public function scopeEmail($query, $email)
    {
        if (trim($email) != "") {
            $query->where('email', 'LIKE', '%' . $email . '%');
        }
    }
}
