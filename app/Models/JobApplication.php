<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_id',
        'category',
        'fullname',
        'email',
        'phone',
        'store',
        'position',
        'time',
        'resume',
        'content',
        'created_at',
        'updated_at'
    ];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
