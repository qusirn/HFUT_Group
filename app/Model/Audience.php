<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Audience extends Model
{
    //
    protected $table = 'audiences';
    protected $primaryKey = 'a_id';
    protected $fillable = [];
    protected $hidden = [];
}
