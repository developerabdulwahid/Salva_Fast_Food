<?php

namespace App\Models;

use App\Scopes\LatestScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [];

    public function applications()
    {
        return $this->hasMany(JobApplication::class);
    }

    public static function boot()
    {
        parent::boot();

        static::addGlobalScope(new LatestScope);
    }

}


