<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    use HasFactory;

    protected $table = 'workouts';

    protected $fillable = ['name', 'program_id', 'description', 'photo'];

    public function program(){
        return $this->belongsTo(Program::class);
    }
    public function workoutdetail(){
        return $this->hasMany(WorkoutDetail::class);
    }
}
