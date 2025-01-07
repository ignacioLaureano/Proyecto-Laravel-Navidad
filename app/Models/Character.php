<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = [
        'name',
        'level',
        'account_creation',
        'isActive',
        'genre',
        'type'

    ];
    public $timestamps = false;
}
