<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'size'];

    public function add($users)
    {
        $this->guardAgainstTooManyUsers($users);

        $method = $users instanceof User ? 'save' : 'saveMany';

        $this->members()->$method($users);
    }

    public function members()
    {
        return $this->hasMany(User::class);

    }

    public function count()
    {
        return $this->members()->count();
    }

    public function guardAgainstTooManyUsers($users)
    {
        $numUsersToAdd = ($users instanceof User) ? 1 :$users->count();
        $newTeamCount = $this->count() + $numUsersToAdd;

        if($newTeamCount > $this->size) {
            throw new \Exception;
        }
    }

    public function removeOne()
    {
        $this->members()->first()->delete();
    }

    public function removeAllUsers()
    {
        foreach ($this->members()->get() as $member) {
            $member->delete();
        }
    }

}
