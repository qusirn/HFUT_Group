<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Recommend extends Model
{
    protected $table = 'recommends';
    protected $primaryKey = 'r_id';
    protected $fillable = [];
    protected $hidden = [];
}
