<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    // Table Name
    Protected $table = 'skills';
    // Primary Key
    public $primarykey = 'id';
    // Timestamps
    public $timestamps = true;
}
