<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_posts extends Model
{
    use HasFactory;

    public function applicats()
    {
        return $this->belongsToMany(User::class, 'job_user');
    }
}