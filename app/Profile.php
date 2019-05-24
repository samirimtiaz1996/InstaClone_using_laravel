<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable=['title','description','url','image'];
    public function profileImage(){
        return '/storage/'.(($this->image) ? $this->image:'uploads/YTBNiCjG4w6EqOFgPj3MDISh0GC5z8N0LsGdV3bN.png');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function followers(){
        return $this->belongsToMany(User::class);
    }
}
