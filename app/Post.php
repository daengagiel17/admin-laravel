<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Post extends Model
{
    use UserActivities;

    protected $fillable = ['title', 'description'];

}
