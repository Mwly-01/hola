<?php

namespace App\Domain\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'name',
        'email',
        'password',
        'rol'
    ];
    protected $hidden = ['password'];
}