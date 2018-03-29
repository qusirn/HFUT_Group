<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class WatchHistory extends Model
{
    protected $table = 'watch_histories';
    protected $primaryKey = 'w_id';
    protected $fillable = [];
    protected $hidden = [];
}
