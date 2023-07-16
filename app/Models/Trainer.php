<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'user_id', 'category', 'image'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
