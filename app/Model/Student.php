<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $primaryKey = 's_id';
    protected $fillable = [];
    protected $hidden = [];
}
