<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdressBook extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'role',
        'password',
        'city',
        'adress',
        'PersonalNumber',
        'WorkNumber'

    ];
}
