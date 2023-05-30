<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutDetail extends Model
{
    use HasFactory;

    protected $table = 'workoutdetails';

    protected $fillable = ['workout_id', 'session', 'title'];

    public function workout(){
        return $this->belongsTo(Workout::class);
    }

    public function workoutprogress(){
        return $this->hasMany(WorkoutProgress::class);
    }
}
