<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Live extends Model
{
    protected $table = 'lives';
    protected $primaryKey = 'l_id';
    protected $fillable = [];
    protected $hidden = [];
}
