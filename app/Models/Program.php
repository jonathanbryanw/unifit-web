<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name'];
    
    public function diet(){
        return $this->hasMany(Diet::class);
    }
    public function workout(){
        return $this->hasMany(Workout::class);
    }
    public function account(){
        return $this->hasMany(Account::class);
    }
}
