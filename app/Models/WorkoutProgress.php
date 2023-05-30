<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutProgress extends Model
{
    use HasFactory;

    protected $table = 'workoutprogress';

    protected $fillable = ['workoutdetail_id', 'user_id', 'status'];

    public function workoutdetail(){
        return $this->belongsTo(WorkoutDetail::class);
    }
}
