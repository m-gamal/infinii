<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
    protected $fillable = ['name', 'type', 'amount'];
}
