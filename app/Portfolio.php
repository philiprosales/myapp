<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    // Table Name
    Protected $table = 'portfolios';
    // Primary Key
    public $primarykey = 'id';
    // Timestamps
    public $timestamps = true;
}
