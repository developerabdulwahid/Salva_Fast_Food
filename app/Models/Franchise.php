<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'country',
        'hear_about_us',
        'address',
        'city',
        'postcode',
        'nationality',
        'ever_run_options',
        'food_experience',
        'start_options',
        'level_of_investment',
        'type_of_development_interest',
        'content',
        'phone_with_cc',
        'created_at',
        'updated_at'
    ];
}
