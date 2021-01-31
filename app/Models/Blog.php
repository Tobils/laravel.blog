<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use softDeletes;

    protected $fillable = [
        'title', 'description','image'
    ];
}
