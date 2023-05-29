<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diet extends Model
{
    use HasFactory;

    protected $table = 'diets';

    public $timestamps = false;

    protected $fillable = ['name', 'program_id', 'description', 'user_id', 'photo'];

    public function program(){
        return $this->belongsTo(Program::class);
    }
}
