<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeightDetail extends Model
{
    use HasFactory;

    protected $fillable = ['weight_id', 'user_id', 'weight'];

}
