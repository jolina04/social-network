<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //setup relation to the user
    public function user()
    {
        /*post belongst to one user*/
        return $this->belongsTo('App\User');
    }
}
