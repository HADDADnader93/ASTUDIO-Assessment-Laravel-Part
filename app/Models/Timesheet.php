<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
    use HasFactory;

    // Define the relationship to user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship to project
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}

