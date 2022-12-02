<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'lastname',
        'firstname',
        'email',
        'phone',
        'gender',
        'marital_status',
        'chapter',
        'occupation',
        'place_of_work',
        'photo',
        'signature',
        'state',
        'lga',
        'hostel',
        'address',
        'facebook',
        'twitter',


    ];
}
