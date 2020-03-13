<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dni', 'lastName', 'firstName', 'gender', 'dateBirth', 'state'
    ];

    protected $casts = [
        'state' => 'boolean',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
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
