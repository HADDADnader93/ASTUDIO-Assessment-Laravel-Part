<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // Define the relationship to users
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    // Define the relationship to timesheets
    public function timesheets()
    {
        return $this->hasMany(Timesheet::class);
    }
}

