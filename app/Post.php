<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = ['title','body']; 
    protected $table = 'posts';
    public $primarykey = 'id';
    public $timestamps = true;
}
