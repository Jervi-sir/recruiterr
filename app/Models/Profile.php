<?php

namespace App\Models;

use App\Models\User;
use App\Models\Badge;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Formation;
use App\Models\ProjectIdea;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function formations()
    {
        return $this->hasMany(Formation::class);
    }

    public function badges()
    {
        return $this->hasMany(Badge::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

}
