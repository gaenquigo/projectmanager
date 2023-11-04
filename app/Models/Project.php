<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'manager_id'
    ];

    public function manager(){
        return $this->belongsTo('App\Models\User', 'manager_id');
    }

    public function tasks(){
        return $this->hasMany('App\Models\Task', 'project_id');
    }

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}
