<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
    Protected $table = 'posts';
    // Primary Key
    public $primarykey = 'id';
    // Timestamps
    public $timestamps = true;
}
