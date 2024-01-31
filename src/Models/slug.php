<?php

namespace sytou\test\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slug extends Model
{
    use HasFactory;

    protected $filable = [
        'name',
        'content'
    ];
}
