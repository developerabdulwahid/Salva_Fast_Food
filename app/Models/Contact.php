<?php

namespace App\Models;

use App\Scopes\LatestScope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'enquiry',
        'resturant',
        'dine_take_delivery',
        'upload_image',
        'phone_with_cc',
        'content',
        'image1',
        'image2',
        'image3',
        'created_at',
        'updated_at'
    ];

    public static function boot()
    {
        parent::boot();

        static::addGlobalScope(new LatestScope);
    }
}
