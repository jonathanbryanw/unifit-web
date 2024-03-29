<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diet extends Model
{
    use HasFactory;

    protected $table = 'diets';

    protected $fillable = ['name', 'program_id', 'description', 'account_id', 'photo'];

    public function program(){
        return $this->belongsTo(Program::class);
    }
}
